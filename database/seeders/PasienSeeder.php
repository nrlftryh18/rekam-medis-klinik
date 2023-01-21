<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pasiens')->insert([
            'nama'=>'noval', 
            'alamat'=>'cilacaap',
            'usia'=>'14',
            'no_hp'=>'098787878798',
            'riwayat_medis'=>'sakit tulang',
            'keluhan'=>'pegel linu',
        ]);
    }
}
