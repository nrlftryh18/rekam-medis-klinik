<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CekupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cekups')->insert([
            'cervical'=>'coba',
            'thoraxal'=>'coba',
            'lumbar'=>'coba',
            'sacral'=>'coba',
            'pelvis'=>'coba',
            'plintiran'=>'coba',
            'kompresi'=>'coba',
            'type_veterbra'=>'coba',
            'type_thorax'=>'coba',
            'visual'=>'coba',
        ]);
        
    }
}
