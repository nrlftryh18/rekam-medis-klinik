@extends('layout.admin')

@section('content')
    <h1 class="text-center">Tambah Data Cek Up</h1>
    <div class="container">
        <div class="mb-3 row"> 
        <div class="row justify-content-center">
            <div class="call-10">
        <div class="card">
            <div class="card-body">
                <form action="/updatedatacekup/{{ $data-> id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <a href="{{route('tambahcekup')}}" class="btn btn-primary mb-2">
                        Tambah
                        
                    </a>
                
                    <table class="table table-hover table-bordered table-stripped" id="id_pasien">
                    <thead>
                        <tr>
            
                            <th scope="row">tanggal</th>
                            <th scope="row">cervical</th>
                            <th scope="row">thoraxal</th>
                            <th scope="row">lumbar</th>
                            <th scope="row">sacral</th>
                            <th scope="row">pelvis</th>
                            <th scope="row">plintiran</th>
                            <th scope="row">kompresi</th>
                            <th scope="row">type_veterbra</th>
                            <th scope="row">type_thorax</th>
                            <th scope="row">visual</th>
                            <th scope="row">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cekup as $cekup)
                        <tr>
                            <td scope="row">{{$cekup->created_at}}</td>
                            <td scope="row">{{$cekup->cervical}}</td>
                            <td scope="row">{{$cekup->thoraxal}}</td>
                            <td scope="row">{{$cekup->lumbar}}</td>
                            <td scope="row">{{$cekup->sacral}}</td>
                            <td scope="row">{{$cekup->pelvis}}</td>
                            <td scope="row">{{$cekup->plintiran}}</td>
                            <td scope="row">{{$cekup->kompresi}}</td>
                            <td scope="row">{{$cekup->type_veterbra}}</td>
                            <td scope="row">{{$cekup->type_thorax}}</td>
                            <td scope="row">{{$cekup->visual}}</td>
                            <td scope="row">
                                <a href="" class="btn btn-primary btn-xs">
                                    Edit
                                </a>
                                <a href="" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
                                    Delete
                                </a>
                            </td>
                        </tr>
                        </div>
                    <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                    {{-- <a href="/cekup" class="btn btn-primary">Simpan</a> --}}
                </form>
            </div>
        </div>
        </div>  
        </div>
    </div>


    @endsection