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
            $table->string('correo')->unique();
            $table->integer('matricula');
            $table->string('CVU');
            $table->string('telefono');
            $table->string('corte');
            $table->string('director');
            $table->string('codirector');
            $table->string('campus');
            $table->string('carrera');
            $table->string('LGAC');
            $table->enum('grado', ['MI','MC','DI','DC']);
            $table->date('fecha_ingreso');
            $table->date('fecha_egreso');
            $table->date('fecha_ideal');
            $table->enum('estatus', ['Vigente', 'Bajo','Tesista']);
            $table->string('SAGCC');
            $table->binary('foto');
            // $table->boolean('verified')->default('false');
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
