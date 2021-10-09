<?php

namespace Database\Seeders;

use App\Models\Zona;
use Illuminate\Database\Seeder;

class ZonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Zona::create([
            'zona_nombre' => 'Urbana',
            'zona_codigo' => 'U'
        ]);

        Zona::create([
            'zona_nombre' => 'Rural',
            'zona_codigo' => 'R'
        ]);
    }
}
