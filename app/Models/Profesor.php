<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Profesor extends Eloquent
{
    protected $collection = 'Profesores'; // Nombre de la colección en MongoDB
    protected $fillable = ['nombre', 'rut', 'email']; // Campos que se pueden llenar masivamente
}
