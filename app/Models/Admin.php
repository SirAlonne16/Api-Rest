<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Administrador extends Model
{    
    protected $connection ='mongodb';
    protected $collection ='Administrador';
    use HasFactory;
    protected $fillable=[
        'name',
        'rut',
        'email'
    ];
}
