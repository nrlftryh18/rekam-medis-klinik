<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCekupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cekups', function (Blueprint $table) {
            $table->id();
            $table->string('cervical');
            $table->string('thoraxal');
            $table->string('lumbar');
            $table->string('sacral');
            $table->string('pelvis');
            $table->string('plintiran');
            $table->string('kompresi');
            $table->string('type_veterbra');
            $table->string('type_thorax');
            $table->string('visual');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cekups');
    }
}
