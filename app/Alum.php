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
        'matricula',
        'telefono',
        'corte',
        'director',
        'cordirector',
        'campus',
        'carrera',
        'LGAC',
        'grado',
        'fecha_ingreso',
        'fecha_egreso',
        'fecha_ideal',
        'estatus',
        'SAGCC',
        'estatus',
        'foto'];
}
