@extends('layout.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>tambah cekup</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    {{-- <h1 class="text-center">Tambah Data Cek Up</h1> --}}
    {{-- <div class="container">
        <div class="mb-3 row"> 
        <div class="row justify-content-center">
            <div class="call-8"> --}}
        <div class="card">
                    <div class="card-body">
                
                <form action="/insertdatacekup" method="POST">
                    @csrf
                    <div class="row">
                    <div class="col-10">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="id_pasien">No. Pasien</label>
                                    <select class="form-select form-select-lg" name="id_pasien" id="id_pasien">
                                    <option selected>---Pilih Pasien---</option>
                                    @foreach ($pasiens as $item)
                                    <option value="{{$item->nama}}">{{$item->id }}</option>
                                    @endforeach
                                    </select>
                                </div>
                    <div class="form-group">
                        <label for="inputCervical" class="col-sm-3 col-form-label">CERVICAL</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputCervical" name="cervical">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputThoraxal" class="col-sm-3 col-form-label">THORAXAL</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputThoraxal" name="thoraxal">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputLumbar" class="col-sm-3 col-form-label">LUMBAR</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputLumbar" name="lumbar">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSacral" class="col-sm-3 col-form-label">SACRAL</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputSacral" name="sacral">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPelvis" class="col-sm-3 col-form-label">PELVIS</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPelvis" name="pelvis">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPlintiran" class="col-sm-3 col-form-label">PLINTIRAN</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPlintiran" name="plintiran">
                        </div></div>
                        <div class="form-group">
                            <label for="inputKompresi" class="col-sm-3 col-form-label">KOMPRESI</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputKompresi" name="kompresi">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputtype_veterbra" class="col-sm-3 col-form-label">TYPE VETERBRA</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputType_veterbra" name="type_veterbra">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputType_thorax" class="col-sm-3 col-form-label">TYPE THORX</label>
                            <div class="col-sm-10">
                            <input type="test" class="form-control" id="inputType_thorax" name="type_thorax">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputVisul" class="col-sm-3 col-form-label">VISUAL</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputVisual" name="visual">
                            </div>
                        </div>
                        
                    <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                    {{-- <ahref="/cekup"class="btnbtn-primary">Simpan</a> --}}
                </form>
            </div>
        </div>
        </div>
        </div>  
        </div>
        </div>
    </div>


  @endsection