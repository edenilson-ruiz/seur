<?php

namespace Database\Seeders;

use App\Models\Genero;
use Illuminate\Database\Seeder;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genero::create([
            'id' => 'M',
        	'genero_nombre' => 'Masculino',
        ]);

        Genero::create([
            'id' => 'F',
        	'genero_nombre' => 'Femenino'
        ]);
    }
}
