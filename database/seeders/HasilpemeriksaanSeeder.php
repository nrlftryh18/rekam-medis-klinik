<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HasilpemeriksaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hasil_pemeriksaan')->insert([
            'hasil_pemeriksaan_1'=>'coba', 
            'hasil_pemeriksaan_2'=>'coba',
            'hasil_pemeriksaan_3'=>'coba',
            'hasil_pemeriksaan_4'=>'coba',
        ]);
        
    }
}
