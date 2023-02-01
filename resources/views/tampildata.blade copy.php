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
              <li class="breadcrumb-item"><a href="#"></a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <h1 class="text-center">Detail Data pasien</h1>
    <div class="container">
        
        
        <div class="row justify-content-center">
            <div class="col-sm-8">
              
        <div class="card">
            <div class="card-body">
                <form action="/updatedata/{{ $data-> id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">No. Pasien</label>
                      <input type="teks" name="id_pasien" class="form-control" id="exampleInputnama1" value="{{ $data->id_pasien }}" >
                      {{-- <div id="namalHelp" value="{{ $data->nama }}" class="form-text"></div> --}}
                      </div>
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="teks" name="nama" class="form-control" id="exampleInputnama1" value="{{ $data->nama }}" >
                    {{-- <div id="namalHelp" value="{{ $data->nama }}" class="form-text"></div> --}}
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputlamat1" class="form-label">Alamat</label>
                    <input type="alamat" name="alamat" class="form-control" id="exampleInputalamat1" value="{{ $data->alamat }}">
                    {{-- <div id="namalHelp" value="{{ $data->alamat }}" class="form-text"></div> --}}
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputusia1" class="form-label">Usia</label>
                        <input type="usia" name="usia" class="form-control" id="exampleInputusia1" value="{{ $data->usia }}">
                        {{-- <div id="emailHelp" value="{{ $data->usia }}" class="form-text"></div> --}}
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">No.hp</label>
                            <input type="no.hp" name="no_hp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->no_hp }}">
                            {{-- <div id="emailHelp" value="{{ $data->no_hp }}" class="form-text"></div> --}}
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Riwayat medis</label>
                                <input type="riwayat medis" name="riwayat_medis" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->riwayat_medis }}">
                                {{-- <div id="emailHelp" value="{{ $data->riwayat_medis }}" class="form-text"></div> --}}
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Keluhan</label>
                                    <input type="keluhan" name="keluhan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->keluhan }}">
                                    {{-- <div id="emailHelp" value="{{ $data->keluhan }}" class="form-text"></div> --}}
                                    </div>
                                    
                                <div class="mb-3">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
        </div>  
        </div>
    </div>


   @endsection