<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Administrador extends Eloquent
{
    protected $collection = 'administradores'; // Nombre de la colección en MongoDB
    protected $fillable = ['nombre', 'rut', 'email']; // Campos que se pueden llenar masivamente
}
