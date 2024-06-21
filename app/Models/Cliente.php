<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'rut',
        'email',
        'talla'
    ];

    protected $connection ='mongodb';
    protected $collection ='Clientes';
    /**
     * Get all of the equipos for the Cliente
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function equipos()
    {
        return $this->hasMany(Equipo::class);
    }
}
