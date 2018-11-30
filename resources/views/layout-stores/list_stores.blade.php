<!doctype html>

<html>
    <head>
        <title>Stores</title>
    </head>
    <body>
        @if(empty($valery))
            {!!  "Youre accessing nothing" !!}
        @endif
        <section id="contentWeb" style="display:none">
            <div class='container py-5'>
                <div class="row m-0">
                    <div class="col pgmaster shadow-sm p-0 mx-2">
                        <div class="imageHolder">
                            <img src="{{asset('svg/403.svg')}}" width="100%" >
                        </div>
                        <div class="information p-1">
                            <i>Judul produk , yang mana saya juga tak tahu </i>
                        </div>
                        <div class="prices p-1 bg-dark text-white text-center">
                            Rp 25.000,-
                        </div>
                    </div>
                    @if(!empty($items))
                        <div class="col pgmaster shadow-sm p-0 mx-2">
                            <div class="imageHolder">
                                <img src="svg/{{$items[0]}}" width="100%" >
                            </div>
                            <div class="information p-1">
                                <i>{{$items[1]}}</i>
                            </div>
                            <div class="prices p-1 bg-dark text-white text-center">
                                Rp 25.000,-
                            </div>
                        </div>
                    @endif
                    @if($valery == 'Admin')
                    <div class="col pgmasteraddsome p-0 position-relative">
                        <a href="/add_store">
                            <div class="display-1 addStores">
                                +
                            </div>
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </section>

        <section id="logout_users" style="display:none">
            <div class='container my-3'>
                <div class="row m-0">
                    <div class="col-12">
                        <a href="/logout"><button class="btn btn-outline-danger">Instant Logout @adli</button></a>
                    </div>
                </div>
            </div>
        </section>

    </body>
</html>

