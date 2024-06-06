<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TenistaResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'ranking' => $this->ranking,
            'pais' => $this->pais,
            'edad' => $this->edad,
            'altura' => $this->altura,
            'peso' => $this->peso,
            'profesionalDesde' => $this->profesionalDesde,
            'mano' => $this->mano,
            'reves' => $this->reves,
            'entrenador' => $this->entrenador,
            'dineroGanado' => $this->dineroGanado,
            'bestRanking' => $this->bestRanking,
            'winRate' => $this->winRate,
            'imagen' => $this->imagen,
        ];
    }
}
