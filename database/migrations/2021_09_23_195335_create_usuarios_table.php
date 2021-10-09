<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('expediente_num', 20)->nullable();
            $table->string('expediente_ant', 20)->nullable();
            $table->string('usuario_nombre_1', 50);
            $table->string('usuario_nombre_2', 50);
            $table->string('usuario_nombre_3', 50);
            $table->string('usuario_apellido_1', 50);
            $table->string('usuario_apellido_2', 50);
            $table->string('usuario_apellido_3', 50);
            $table->string('usuario_direccion_calle_avenida');
            $table->string('usuario_direccion_casa_edificio_apto');
            $table->string('usuario_direccion_colonia_barrio');
            $table->date('usuario_fecha_nacimiento');
            $table->date('usuario_fecha_apertura_exp');
            $table->string('usuario_tel_fijo');
            $table->string('usuario_tel_celular');
            $table->string('usuario_email');
            $table->unsignedBigInteger('usuario_tipo_documento_id')->nullable();
            $table->foreign('usuario_tipo_documento_id')->references('id')->on('tipo_documentos');
            $table->string('usuario_numero_doc',50)->nullable();
            $table->unsignedBigInteger('usuario_doc_ext_muni_id');
            $table->foreign('usuario_doc_ext_muni_id')->references('id')->on('municipios')->nullable();
            $table->unsignedBigInteger('referencia_id');
            $table->foreign('referencia_id')->references('id')->on('referencias');
            $table->unsignedBigInteger('establecimiento_id');
            $table->foreign('establecimiento_id')->references('id')->on('establecimientos');
            $table->unsignedBigInteger('motivo_atencion_id');
            $table->foreign('motivo_atencion_id')->references('id')->on('motivos_atencion');
            $table->unsignedBigInteger('departamento_id');
            $table->foreign('departamento_id')->references('id')->on('departamentos');
            $table->unsignedBigInteger('municipio_id');
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->unsignedBigInteger('genero_id');
            $table->foreign('genero_id')->references('id')->on('generos');
            $table->unsignedBigInteger('estado_civil_id');
            $table->foreign('estado_civil_id')->references('id')->on('estados_civil');
            $table->unsignedBigInteger('escolaridad_id');
            $table->foreign('escolaridad_id')->references('id')->on('escolaridades');
            $table->unsignedBigInteger('ocupacion_id');
            $table->foreign('ocupacion_id')->references('id')->on('ocupaciones');
            $table->string('nombre_padre')->nullable();
            $table->string('nombre_madre')->nullable();
            $table->string('nombre_conyugue')->nullable();
            $table->string('responsable_nombre')->nullable();
            $table->string('responsable_direccion')->nullable();
            $table->string('responsable_telefono')->nullable();
            $table->string('informante_nombre')->nullable();
            $table->string('informante_parentesco')->nullable();
            $table->unsignedBigInteger('informante_tipo_documento_id')->nullable();
            $table->foreign('informante_tipo_documento_id')->references('id')->on('tipo_documentos');
            $table->string('informante_numero_doc',50)->nullable();
            $table->string('informante_telefono',50)->nullable();
            $table->string('informante_direccion',100)->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('usuarios');
    }
}
