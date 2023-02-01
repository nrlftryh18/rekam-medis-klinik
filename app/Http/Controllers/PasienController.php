<?php

namespace App\Http\Controllers;
use App\Models\Cekup;
use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = pasien::Where('nama','LIKE','%'. $request->search.'%')->paginate(10);
        }else{
            $data = pasien::paginate(10);
        } 
        return view('datapasien',compact('data'));
    }

    public function tambahdata(){
        return view('tambahdata');
    }

    public function insertdata(Request $request){
        Pasien::create($request->all());
        return redirect()->route('pasien');
    }

    public function tampilkandata($id){

        // $data = Pasien:: find($id);
        // //dd($data);
        // return view('tampildata', compact('data'));
        $data = Pasien::find($id);
        $cekup = Cekup::all();
        return view('tampildata', compact('data', 'cekup'));
    }

    public function updatedata(Request $request,$id){
        $data = Pasien:: find($id);
        $data->update($request->all());
        return redirect()->route('pasien');
    }

}