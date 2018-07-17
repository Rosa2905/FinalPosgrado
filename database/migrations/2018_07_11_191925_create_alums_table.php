<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alums', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('correo');
            $table->string('matricula');
            $table->string('CVU');
            $table->string('telefono');
            $table->string('corte');
            $table->string('director');
            $table->string('codirector');
            $table->string('campus');
            $table->string('carrera');
            $table->string('LGAC');
            $table->string('grado');
            $table->string('fecha_ingreso');
            $table->string('fecha_egreso');
            $table->string('fecha_ideal');
            $table->string('estatus');
            $table->string('SAGCC');
            $table->string('foto');
            $table->timestamps();
            
        //     'Matricula',
        // 'CVU',
        // 'Nombre',
        // 'ApellidoP',
        // 'ApellidoM',
        // 'Correo',
        // 'Telefono',
        // 'Corte',
        // 'Director',
        // 'Codirector',
        // 'Campus',
        // 'Carrera',
        // 'LGAC',
        // 'Grado',
        // 'FechaIn',
        // 'Estatus',
        // 'SAGCC',
        // 'Foto'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alums');
    }
}
