<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TenistaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre' => 'required|string|max:255',
            'ranking' => 'required|integer|min:1',
            'pais' => 'required|string|max:255',
            'edad' => 'required|integer|min:18|max:100',
            'altura' => 'required|integer|min:100|max:300',
            'peso' => 'required|integer|min:30|max:300',
            'profesionalDesde' => 'required|date',
            'mano' => 'required|string|max:255',
            'reves' => 'required|string|max:255',
            'entrenador' => 'required|string|max:255',
            'dineroGanado' => 'required|numeric|min:0',
            'bestRanking' => 'required|integer|min:1',
            'winRate' => 'required|numeric|min:0|max:100',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'victorias' => 'required|integer|min:0',
            'derrotas' => 'required|integer|min:0',
        ];
    }
}
