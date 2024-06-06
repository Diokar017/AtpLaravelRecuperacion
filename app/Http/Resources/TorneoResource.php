<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TorneoResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'ubicacion' => $this->ubicacion,
            'modo' => $this->modo,
            'categoria' => $this->categoria,
            'superficie' => $this->superficie,
            'entradas' => $this->entradas,
            'premio' => $this->premio,
            'imagen' => $this->imagen,
            'fechaInicio' => $this->fechaInicio,
            'fechaFinalizacion' => $this->fechaFinalizacion,
        ];
    }
}
