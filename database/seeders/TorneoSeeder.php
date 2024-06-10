<?php

namespace Database\Seeders;

use App\Models\Torneo;
use Illuminate\Database\Seeder;

class TorneoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Torneo::create([
            'ubicacion' => 'Ubicación del torneo 1',
            'modo' => 'individual',
            'categoria' => 'Individual',
            'superficie' => 'Tierra Batida',
            'entradas' => 100,
            'premio' => '500000',
            'fechaInicio' => now(),
            'fechaFinalizacion' => now()->addDays(7),
        ]);

    }
}

