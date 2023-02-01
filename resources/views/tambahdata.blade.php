@extends('layout.admin')

@section('content')
                    <h1 class="text-center">Tambah Data pasien</h1>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="call-8">
                        <div class="card">
                            <div class="card-body">
                                <form action="/insertdata" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">No. Pasien</label>
                                        <input type="teks" name="id_pasien" class="form-control" id="exampleInputnama1" >
                                        <div id="namalHelp" class="form-text"></div>
                                        </div>
                                    <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                                    <input type="teks" name="nama" class="form-control" id="exampleInputnama1" >
                                    <div id="namalHelp" class="form-text"></div>
                                    </div>
                                    <div class="mb-3">
                                    <label for="exampleInputlamat1" class="form-label">Alamat</label>
                                    <input type="alamat" name="alamat" class="form-control" id="exampleInputalamat1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputusia1" class="form-label">Usia</label>
                                        <input type="usia" name="usia" class="form-control" id="exampleInputusia1" >
                                        <div id="emailHelp" class="form-text"></div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">No.hp</label>
                                            <input type="no.hp" name="no.hp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            <div id="emailHelp" class="form-text"></div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Riwayat medis</label>
                                                <input type="riwayat medis" name="riwayat medis" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                <div id="emailHelp" class="form-text"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Keluhan</label>
                                                    <input type="keluhan" name="keluhan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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