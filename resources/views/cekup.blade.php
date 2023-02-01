    @extends('layout.admin')

    @section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        
            
            
                <div class="call-10">
                    <a href="/tambahcekup" type="button" class="btn btn-info">+ Tambah</a>
            <a href="/hasilpemeriksaan" class="btn btn-primary">hasil pemeriksaan</a>

            <div class="card">
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-10">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="inputCervical" class="col-sm-2 col-form-label">No.Pasien</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="id_pasien">
                                            </div>
                                        </div>
                        <div class="form-group">
                            <label for="inputCervical" class="col-sm-2 col-form-label">CERVICAL</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputCervical">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputThoraxal" class="col-sm-2 col-form-label">THORAXAL</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputThoraxal">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputLumbar" class="col-sm-2 col-form-label">LUMBAR</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputLumbar">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputSacral" class="col-sm-2 col-form-label">SACRAL</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputSacral">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPelvis" class="col-sm-2 col-form-label">PELVIS</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPelvis">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPlintiran" class="col-sm-2 col-form-label">PLINTIRAN</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPlintiran">
                            </div></div>
                            <div class="form-group">
                                <label for="inputKompresi" class="col-sm-2 col-form-label">KOMPRESI</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputKompresi">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputtype_veterbra" class="col-sm-2 col-form-label">TYPE VETERBRA</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputType_veterbra">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputType_thorax" class="col-sm-2 col-form-label">TYPE THORX</label>
                                <div class="col-sm-10">
                                <input type="test" class="form-control" id="inputType_thorax">
                                </div>
                            </div>
                            <div class="form-group">
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
            </div>
        </div>


    @endsection