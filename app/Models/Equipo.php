<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;
use Illuminate\Database\Eloquent\Relations\hasMany;

class Equipo extends Model
{
    protected $fillable = [
        'Nombre',
        'Descripcion',
        'Precio_Compra',
        'Precio_Alquiler',
        'Estado',
        'categoria_id'
    ];

    public function categoria(): belongsTo
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');

    }

    public function detalle_alquilers(): hasMany
    {
        return $this->hasMany(Detalle_Alquiler::class, 'equipo_id');
    }
}
