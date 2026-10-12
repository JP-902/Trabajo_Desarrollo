<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;

class Categoria extends Model
{
    protected $fillable = [
        'Nombre',
        'Descripcion'
    ];

    public function equipos(): hasMany
    {
        return $this->hasMany(Equipo::class, 'categoria_id');
    }
}
