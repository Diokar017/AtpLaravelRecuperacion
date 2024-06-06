<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tenista;

class TenistaSeeder extends Seeder
{
    public function run()
    {
        Tenista::create([
            'nombre' => 'Rafael Nadal',
            'ranking' => 2,
            'pais' => 'España',
            'edad' => 34,
            'altura' => 185,
            'peso' => 85,
            'profesionalDesde' => '2001-01-01',
            'mano' => 'Izquierda',
            'reves' => 'Dos manos',
            'entrenador' => 'Carlos Moyá',
            'dineroGanado' => 12345678.90,
            'bestRanking' => 1,
            'winRate' => 82.5,
            'imagen' => 'RafaNadal.png',
            'victorias' => 990,
            'derrotas' => 200,
        ]);


    }
}
