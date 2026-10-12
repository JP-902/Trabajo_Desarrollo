<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;

class Cliente extends Model
{
    protected $fillable = [
        'Nombre',
        'Apellido',
        'Email',
        'Telefono'
    ];

    public function alquilers(): hasMany
    {
        return $this->hasMany(Alquiler::class, 'cliente_id');
    }
}
