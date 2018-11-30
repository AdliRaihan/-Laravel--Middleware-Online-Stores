
<div class="container">
        <div class="row p-5">
            <div class="col-8  m-auto">
                <h5 class="mb-3">Pilih gambar :</h5>
                <div id="imgChooser">
                    <form action="/add_queue" method="get">
                        <input type="text" id="chooser" name="assetNameImg">
                        <img onclick="formChooser(this)" src="{{asset('svg/404.svg')}}" height="150px" style="border-radius:100%;">
                        <img onclick="formChooser(this)" src="{{asset('svg/403.svg')}}" height="150px" style="border-radius:100%;">
                        <img onclick="formChooser(this)" src="{{asset('svg/500.svg')}}" height="150px" style="border-radius:100%;">
                        <img onclick="formChooser(this)" src="{{asset('svg/503.svg')}}" height="150px" style="border-radius:100%;">
                        
                        <div class="form-group my-5">
                            <label for="judulProd">Judul Product</label>
                            <input id="judulProdak" type='text' name="judulProduk" class="form-control form-control-sm" maxlength="20">
                        </div>

                        <div class="form-group">
                            <label for="harga">Prices</label>
                            <input type="text" name="hargaProduk" class="form-control form-control-sm">
                        </div>
                        <input type="submit" class="btn btn-outline-danger mt-5 form-control" value="Add Data / Replace Data">
                    </form>
                </div>
            </div>
        </div>
    </div>