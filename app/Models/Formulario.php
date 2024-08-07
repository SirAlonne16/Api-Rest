<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Formulario extends Eloquent
{
    protected $collection = 'formulario';

    protected $fillable = [
        'nombre', 'fecha_nacimiento', 'rut', 'email', 'telefono', 'edad', 'direccion', 'region', 'comuna', 'problemas_medicos', 'problema_medico', 'necesita_equipo', 'tiene_experiencia', 'genero', 'usuario'
    ];
}
