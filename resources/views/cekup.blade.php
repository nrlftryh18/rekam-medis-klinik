<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-DOXMLfHhQkvFFp+rWTZwVlPVqdIhpDVYT9csOnHSgWQWPX0v5MCGtjCJbY6ERspU" crossorigin="anonymous">

    <title>klinik</title>
</head>
<body>
    <h1 class="text-center">Cek Up</h1>
    <div class="container">
        
        <a href="/tambahcekup" type="button" class="btn btn-info">+ Tambah</a>
        <div class="mb-3 row"> 
        <div class="row justify-content-center">
            <div class="call-10">
        <div class="card">
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3 row">    
                    </div>
                    <div class="mb-2 row">
                        <label for="inputCervical" class="col-sm-2 col-form-label">CERVICAL</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputCervical">
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label for="inputThoraxal" class="col-sm-2 col-form-label">THORAXAL</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputThoraxal">
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label for="inputLumbar" class="col-sm-2 col-form-label">LUMBAR</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputLumbar">
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label for="inputSacral" class="col-sm-2 col-form-label">SACRAL</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputSacral">
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label for="inputPelvis" class="col-sm-2 col-form-label">PELVIS</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPelvis">
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label for="inputPlintiran" class="col-sm-2 col-form-label">PLINTIRAN</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPlintiran">
                        </div></div>
                        <div class="mb-2 row">
                            <label for="inputKompresi" class="col-sm-2 col-form-label">KOMPRESI</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputKompresi">
                            </div>
                        </div>
                        <div class="mb-2 row">
                            <label for="inputtype_veterbra" class="col-sm-2 col-form-label">TYPE VETERBRA</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputType_veterbra">
                            </div>
                        </div>
                        <div class="mb-2 row">
                            <label for="inputType_thorax" class="col-sm-2 col-form-label">TYPE THORX</label>
                            <div class="col-sm-10">
                            <input type="test" class="form-control" id="inputType_thorax">
                            </div>
                        </div>
                        <div class="mb-2 row">
                            <label for="inputVisul" class="col-sm-2 col-form-label">VISUAL</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputVisual">
                            </div>
                        </div>
                    
                </form>
            </div>
        </div>
        </div>  
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    -->
</body>
</html>