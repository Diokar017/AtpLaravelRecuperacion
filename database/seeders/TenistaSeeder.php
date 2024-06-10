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

        Tenista::create([
            'nombre' => 'Roger Federer',
            'ranking' => 5,
            'pais' => 'Suiza',
            'edad' => 39,
            'altura' => 185,
            'peso' => 85,
            'profesionalDesde' => '1998-01-01',
            'mano' => 'Derecha',
            'reves' => 'Una mano',
            'entrenador' => 'Ivan Ljubicic',
            'dineroGanado' => 12945678.90,
            'bestRanking' => 1,
            'winRate' => 85.5,
            'imagen' => 'RogerFederer.png',
            'victorias' => 1030,
            'derrotas' => 250,
        ]);

        Tenista::create([
            'nombre' => 'Novak Djokovic',
            'ranking' => 1,
            'pais' => 'Serbia',
            'edad' => 33,
            'altura' => 188,
            'peso' => 80,
            'profesionalDesde' => '2003-01-01',
            'mano' => 'Derecha',
            'reves' => 'Dos manos',
            'entrenador' => 'Marian Vajda',
            'dineroGanado' => 13045678.90,
            'bestRanking' => 1,
            'winRate' => 87.5,
            'imagen' => 'NovakDjokovic.png',
            'victorias' => 1050,
            'derrotas' => 200,
        ]);

        Tenista::create([
            'nombre' => 'Andy Murray',
            'ranking' => 123,
            'pais' => 'Reino Unido',
            'edad' => 33,
            'altura' => 190,
            'peso' => 84,
            'profesionalDesde' => '2005-01-01',
            'mano' => 'Derecha',
            'reves' => 'Dos manos',
            'entrenador' => 'Jamie Delgado',
            'dineroGanado' => 10045678.90,
            'bestRanking' => 1,
            'winRate' => 80.5,
            'imagen' => 'AndyMurray.png',
            'victorias' => 990,
            'derrotas' => 250,
        ]);

        Tenista::create([
            'nombre' => 'Stan Wawrinka',
            'ranking' => 17,
            'pais' => 'Suiza',
            'edad' => 35,
            'altura' => 183,
            'peso' => 81,
            'profesionalDesde' => '2002-01-01',
            'mano' => 'Derecha',
            'reves' => 'Una mano',
            'entrenador' => 'Magnus Norman',
            'dineroGanado' => 80045678.90,
            'bestRanking' => 3,
            'winRate' => 75.5,
            'imagen' => 'StanWawrinka.png',
            'victorias' => 500,
            'derrotas' => 150,
        ]);

        Tenista::create([
            'nombre' => 'Dominic Thiem',
            'ranking' => 3,
            'pais' => 'Austria',
            'edad' => 27,
            'altura' => 185,
            'peso' => 79,
            'profesionalDesde' => '2011-01-01',
            'mano' => 'Derecha',
            'reves' => 'Una mano',
            'entrenador' => 'Nicolas Massu',
            'dineroGanado' => 90045678.90,
            'bestRanking' => 3,
            'winRate' => 80.5,
            'imagen' => 'DominicThiem.png',
            'victorias' => 600,
            'derrotas' => 150,
        ]);

        Tenista::create([
            'nombre' => 'Alexander Zverev',
            'ranking' => 7,
            'pais' => 'Alemania',
            'edad' => 23,
            'altura' => 198,
            'peso' => 90,
            'profesionalDesde' => '2013-01-01',
            'mano' => 'Derecha',
            'reves' => 'Dos manos',
            'entrenador' => 'David Ferrer',
            'dineroGanado' => 70045678.90,
            'bestRanking' => 3,
            'winRate' => 75.5,
            'imagen' => 'AlexanderZverev.png',
            'victorias' => 400,
            'derrotas' => 150,
        ]);

        Tenista::create([
            'nombre' => 'Daniil Medvedev',
            'ranking' => 4,
            'pais' => 'Rusia',
            'edad' => 24,
            'altura' => 198,
            'peso' => 83,
            'profesionalDesde' => '2014-01-01',
            'mano' => 'Derecha',
            'reves' => 'Dos manos',
            'entrenador' => 'Gilles Cervara',
            'dineroGanado' => 60045678.90,
            'bestRanking' => 4,
            'winRate' => 75.5,
            'imagen' => 'DaniilMedvedev.png',
            'victorias' => 400,
            'derrotas' => 150,
        ]);




    }
}
