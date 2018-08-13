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
            $table->string('Beca');
            $table->string('telefono');
            $table->string('corte');
            $table->string('director');
            $table->string('codirector');
            $table->string('LGAC');
            $table->enum('grado', ['MI','MC','DI','DC']);
            $table->date('fecha_ingreso');
            $table->date('fecha_egreso');
            $table->date('fecha_ideal');
            $table->date('fecha_titulacion');
            $table->enum('estatus', ['Vigente', 'Baja','Tesista','Extemporaneo']);
            $table->string('SAGCC');
            $table->enum('Modalidad', ['R.P','Beca Conacyt']);
            $table->enum('Conocimiento', ['Candidato','Nivel1']);

            // $table->binary('foto');
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
