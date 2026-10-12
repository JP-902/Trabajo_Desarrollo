<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;


class Detalle_Alquiler extends Model
{
    protected $fillable = [
        'alquiler_id',
        'equipo_id',
        'Cantidad',
        'Precio_Alquiler'
    ];

    public function alquiler(): belongsTo
    {
        return $this->belongsTo(Alquiler::class, 'alquiler_id');
    }

    public function equipo(): belongsTo
    {
        return $this->belongsTo(Equipo::class, 'equipo_id');
    }
}
