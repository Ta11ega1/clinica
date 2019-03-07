<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cita extends Model
{
    protected $fillable = [
    	'fecha', 'hora', 'paciente', 'medico', 'estado',
    ];

}
