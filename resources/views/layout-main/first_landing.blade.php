<!doctype html>

<?php $errorStackers =array(); ?>


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lander</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    
                
    @if($errors->any())
         @foreach ($errors->all() as $error)
            <?php array_push($errorStackers,$error);  ?>
         @endforeach
        <script>
            window.onload = function(){
                document.getElementById('popUp_form').style.display = "block";
            }
        </script>
    @endif



    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    <div class="w-100 imagemodalHolder position-relative">
                        <img src="{{asset('svg/503.svg')}}" width="100%" class="mb-5 position-absolute" style="left:0;top:-80%;border-radius:5%;">
                        <span class="position-absolute text-white header-wels">Welcome ! ! !</span>
                    </div>
                </div>

                <div class="links">
                    <a onclick="popUp('#popUp_form');" class="text-danger" style="cursor:pointer;">STORES</a>
                    <a href="#" class="text-success">About Me</a>
                    <a href="#" class="text-muted">NOT ME</a>
                    <a href="#" class="text-muted">ALSO NOT ME</a>
                    <a href="#" class="text-muted">ABSOLUTELY NOT ME</a>
                    <a href="#" class="text-muted">MY OWN GITHUB</a>
                </div>
            </div>
        </div>

        <section id="popUp_form">
            <div class="container-fluid position-fixed m-auto parent-modal">
                <div class="bgDark position-absolute" onclick="popDown('#popUp_form');"></div>
                <div id="sub-modal" class="row m-0 ">
                    <div class="col-4 parentBoxForm m-auto p-0 position-relative shadow">
                            <span id="close-btn" onclick="popDown('#popUp_form');">X</span>
                        <div class="boxForm">         
                            <div class="text-center">
                                <div class="w-100 imagemodalHolder position-relative">
                                    <img src="{{asset('svg/404.svg')}}" width="100%" class="mb-5 position-absolute" style="left:0;top:-80%;">
                                </div>
                            </div>
                            {!! Form::open(['action' => 'Stores\addStoreController@store' , 'method' => 'get' , 'class' => 'px-5 py-3']) !!}
                            <div class="form-group">
                                {!! Form::label('usernameInfo','Username', ['class' => 'text-muted']) !!}
                                {!! Form::text('username','Admin', ['class'=>'form-control form-control-sm', 
                                'placeholder' => 'Ex : Dragon Praetorian ',
                                'autocomplete' => 'off'
                                ]) !!}

                                @if($errors->first('username'))
                                <span class="text-danger errorInf"><i>{{$errors->first('username')}}</i></span>
                                @endif
                            </div>
                            
                            <div class="form-group">
                                {!! Form::label('Nama','Nama Lengkap', ['class' => 'text-muted']) !!}
                                {!! Form::text('namaLengkap','Adli Raihan', ['class'=>'form-control form-control-sm', 
                                'placeholder' => 'Ex : Adli Raihan',
                                'autocomplete' => 'off' ])
                                !!}
                                
                                @if($errors->first('namaLengkap'))
                                    <span class="text-danger errorInf"><i>{{$errors->first('namaLengkap')}}</i></span>
                                @endif
                            </div>
                            
                            <div class="form-group">
                                {!! Form::label('roleLabel','Privileges', ['class' => 'text-muted']) !!}
                                {!! Form::select('role', array('Admin' => 'Admin','Guests' =>'Viewer') , '' , ['class' => 'form-control form-control-sm'] ) !!}
                            </div>
                            <div class="form-group mt-5">
                                {!! Form::submit('Explore !', ['class' => 'btn btn-outline-danger w-100']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </body>
</html>
