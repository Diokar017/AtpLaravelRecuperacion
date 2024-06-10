<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Torneo extends Model
{
    use HasFactory;

    protected $table = 'torneos';

    protected $fillable = [
        'ubicacion',
        'modo',
        'categoria',
        'superficie',
        'entradas',
        'premio',
        'imagen',
        'fechaInicio',
        'fechaFinalizacion',
    ];

    protected $casts = [
        'fechaInicio' => 'datetime',
        'fechaFinalizacion' => 'datetime',
    ];
    public function tenistas()
    {
        return $this->belongsToMany(Tenista::class, 'torneo_tenista');
    }
}
