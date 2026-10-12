<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;
use Illuminate\Database\Eloquent\Relations\hasMany;

class Alquiler extends Model
{
    protected $fillable = [
        'cliente_id',
        'fecha_inicio',
        'fecha_fin',
        'empleado_id',
        'estado'
    ];

    public function cliente(): belongsTo
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function detalle_alquilers(): hasMany
    {
        return $this->hasMany(Detalle_Alquiler::class, 'alquiler_id');
    }

    public function empleado(): belongsTo
    {
        return $this->belongsTo(Empleado::class, 'empleado_id');
    }
}
