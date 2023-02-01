@extends('layout.admin')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Hasil pemeriksaan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Hasil pemeriksaan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
<div class="container">
          
  <a href="/tambahhasilpemeriksaan" type="button" class="btn btn-info">+ Tambah</a>
  <div class="row g-3 align-items-center mt-2">
        <div class="col-auto">
          <form action="/hasilpemeriksaan" method="GET">
          
          </form>
        </div>
      </div>
    <div class="row">
      <div class="call-8">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Hasil Pemeriksaan 1</th>
                <th scope="col">Hasil Pemeriksaan 2</th>
                <th scope="col">Hasil Pemeriksaan 3</th>
                <th scope="col">Hasil Pemeriksaan 4</th>
                
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
              <td>{{  $row-> hasil_pemeriksaan_1 }}</td>
              <td>{{  $row-> hasil_pemeriksaan_2 }}</td>
              <td>{{  $row-> hasil_pemeriksaan_3 }}</td>
              <td>{{  $row-> hasil_pemeriksaan_4 }}</td>
            
          
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>    
  </div>

</div>
    
  </div>
































@endsection