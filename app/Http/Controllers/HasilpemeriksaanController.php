<?php

namespace App\Http\Controllers;

use App\Models\hasil_pemeriksaan;
use App\Models\Hasilpemeriksaan;
use Database\Seeders\HasilpemeriksaanSeeder;
use Illuminate\Http\Request;

class HasilpemeriksaanController extends Controller
{
    public function index(){
        $data = Hasilpemeriksaan::all();
        return view('hasilpemeriksaan', compact('data'));
    }

    public function tambahhasilpemeriksaan(){
        return view('tambahhasilpemeriksaan');
    }

    public function insertdatahasil(Request $request){
        //dd($request->all());
        hasilpemeriksaan::create($request->all());
    }
}
