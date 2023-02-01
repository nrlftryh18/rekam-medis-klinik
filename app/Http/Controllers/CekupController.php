<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Cekup;
use Illuminate\Http\Request;


class CekupController extends Controller
{
    public function index(){
        $data = Cekup::all();
        //return $data=Cekup;
        return view('cekup',compact('data'));
    }

    public function tambahcekup(){
        $pasiens = Pasien::all();
        return view('tambahcekup', compact('pasiens'));
    }

    public function insertdatacekup(Request $request){
        // $data=$request->all();
        // die(json_encode($data));
        Cekup::create($request->all());
        return redirect()->route('cekup');
        // $pasiens = Pasien::all();
        // return view('cekup.create', compact('pasiens'));
        
    }

        public function tampilkancekup($id){

            
            $data = Cekup:: find($id);
            //dd($data);
            return view('tampilkancekup',compact('data'));
        }

    public function updatedatacekup(Request $request, $id){
        $data = Cekup:: find($id);
        $data-> updatedatacekup($request->all());
        return redirect()->route('update');
    }

   // public function tampilkancekup($id){

     //   return view('tampilkancekup');
    //}

}
