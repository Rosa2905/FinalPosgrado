<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alum extends Model
{
      protected $table = 'alums';
    protected $fillable = [
        'id',
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'correo',
        'CVU',
        'Beca',
        'matricula',
        'telefono',
        'corte',
        'director',
        'cordirector',
        'LGAC',
        'grado',
        'fecha_ingreso',
        'fecha_egreso',
        'fecha_ideal',
        'fecha_titulacion',
        'estatus',
        'SAGCC',
        'estatus',
        'Modalidad',
        'Conocimiento'];
        // 'foto'];

    
}
