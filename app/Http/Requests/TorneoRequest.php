<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TorneoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ubicacion' => 'required|string|max:255',
            'modo' => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
            'superficie' => 'required|string|max:255',
            'entradas' => 'required|integer',
            'premio' => 'required|numeric',
            'imagen' => 'required|string|max:255',
            'fechaInicio' => 'required|date',
            'fechaFinalizacion' => 'required|date|after_or_equal:fechaInicio',
        ];
    }
}
