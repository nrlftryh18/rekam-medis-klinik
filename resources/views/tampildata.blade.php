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
            <div class="row">
                <div class="call-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        
                        <th scope="row">No. Pasien</th>
                        <th scope="row">Nama</th>
                        <th scope="row">Alamat</th>
                        <th scope="row">Usia</th>
                        <th scope="row">No.hp</th>
                        <th scope="row">Riwayat Medis</th>
                        <th scope="row">Keluhan</th>
                        </tr>
                        <tr>
                        
                            <td>{{$data->id_pasien}}</td>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->alamat}}</td>
                            <td>{{$data->usia}}</td>
                            <td>{{$data->no_hp}}</td>
                            <td>{{$data->riwayat_medis}}</td>
                            <td>{{$data->keluhan}}</td>
    

        <a href="{{route('tambahcekup')}}" class="btn btn-primary mb-2">
            Tambah
        </a>
        
    
        
            


    @endsection