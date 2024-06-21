<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    protected $fillable=[

    ];

    /**
     * Get the user that owns the Equipo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function clientes()
    {
        return $this->belongsTo(Cliente::class);
    }
}
