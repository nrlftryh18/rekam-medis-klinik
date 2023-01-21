@extends('layout.admin')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Klinik</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Klinik</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
<div class="container">
          
  <a href="/tambahdata" type="button" class="btn btn-info">+ Tambah</a>
  <div class="row g-3 align-items-center mt-2">
        <div class="col-auto">
          <form action="/pasien" method="GET">
          <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelpInline">
          </form>
        </div>
      </div>
    <div class="row">
      <div class="call-8">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Aksi</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Usia</th>
                <th scope="col">No.hp</th>
                <th scope="col">Riwayat Medis</th>
                <th scope="col">Keluhan</th>
              </tr>
          </thead>
          <tbody>
            @php
              $no = 0;
            @endphp
            @foreach ($data as $row)
            <tr>
              <th scope="row">{{ ++ $no }}</th>
              {{-- <th scope="row">{{ $row-> id }}</th> --}}
              <td>
              <a href="/tampilkandata/{{ $row-> id }}" class="btn btn-success">Detail</a>
              <td>{{  $row-> nama }}</td>
              <td>{{  $row-> alamat }}</td>
              <td>{{  $row-> usia }}</td>
              <td>{{  $row-> no_hp }}</td>
              <td>{{  $row-> riwayat_medis }}</td>
              <td>{{  $row-> keluhan }}</td>
          
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>    
  </div>

</div>
    
  </div>
































@endsection