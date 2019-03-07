<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medic extends Model
{
    protected $fillable = [
    	'rut', 'Nombre', 'especialidad', 'fecha_contratacion', 'valor_consulta',
    ];
}
