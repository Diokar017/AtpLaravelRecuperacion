<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenista extends Model
{
    use HasFactory;

    public static mixed $IMAGE_DEFAULT;
    protected $table = 'tenistas';

    protected $fillable = [
        'nombre',
        'ranking',
        'pais',
        'edad',
        'altura',
        'peso',
        'profesionalDesde',
        'mano',
        'reves',
        'entrenador',
        'dineroGanado',
        'bestRanking',
        'winRate',
        'imagen',
        'victorias',
        'derrotas',
    ];

    protected $casts = [
        'edad' => 'integer',
        'altura' => 'float',
        'peso' => 'float',
        'profesionalDesde' => 'date',
        'dineroGanado' => 'float',
        'bestRanking' => 'integer',
        'winRate' => 'float',
        'victorias' => 'integer',
        'derrotas' => 'integer',
        'imagen' => 'string',

    ];

    // Definir una relación si hay alguna
    // public function torneos()
    // {
    //     return $this->belongsToMany(Torneo::class);
    // }

    /**
     * Obtener la URL de la imagen del tenista. Si no hay imagen, devolver una imagen por defecto.
     *
     * @return string
     */
    public function getImagenAttribute($value)
    {
        return $value ? asset('storage/' . $value) : asset('images/default-tenista.jpg');
    }

    /**
     * Buscar tenistas por nombre o país.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string|null $search
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearch($query, $search)
    {
        if ($search) {
            return $query->where('nombre', 'like', "%{$search}%")
                ->orWhere('pais', 'like', "%{$search}%");
        }

        return $query;
    }
}
