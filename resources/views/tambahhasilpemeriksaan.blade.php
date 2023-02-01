@extends('layout.admin')

@section('content')
    <h1 class="text-center">Tambah hasil pemeriksaan</h1>
    <div class="container">
        <div class="row justify-content-center">
        <div class="call-8">
        <div class="card">
            <div class="card-body">
                <form action="/insertdatahasil" method="POST">
                    @csrf
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Hasil pemeriksaan 1</label>
                    <input type="teks" name="hasil_pemeriksaan_1" class="form-control" id="exampleInputnama1" >
                    <div id="namalHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputlamat1" class="form-label">Hasil pemeriksaan 2</label>
                    <input type="teks" name="hasil_pemeriksaan_2" class="form-control" id="exampleInputalamat1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputusia1" class="form-label">Hsil pemeriksaan 3</label>
                        <input type="teks" name="hasil_pemeriksaan_3" class="form-control" id="exampleInputusia1" >
                        <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Hasil pemeriksaan 4</label>
                            <input type="teks" name="hasil_pemeriksaan_4" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"></div>
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