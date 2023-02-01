<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilpemeriksaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasilpemeriksaan', function (Blueprint $table) {
            $table->id();
            $table->string('hasil_pemeriksaan_1');
            $table->string('hasil_pemeriksaan_2');
            $table->string('hasil_pemeriksaan_3');
            $table->string('hasil_pemeriksaan_4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasilpemeriksaan');
    }
}
