<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Profesor extends Eloquent
{
    protected $collection = 'Profesores'; // Nombre de la colección en MongoDB, asegúrate de que coincida
    protected $fillable = ['nombre', 'rut', 'email'];
}
