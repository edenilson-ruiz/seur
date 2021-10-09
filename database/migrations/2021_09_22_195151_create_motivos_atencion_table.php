<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotivosAtencionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motivos_atencion', function (Blueprint $table) {
            $table->id();
            $table->string('motivo_atencion_nombre');
            $table->unsignedBigInteger('area_atencion_id');
            $table->foreign('area_atencion_id')->references('id')->on('areas_atencion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motivos_atencion');
    }
}
