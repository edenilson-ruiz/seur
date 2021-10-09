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
        	'genero_nombre' => 'Masculino',
	        'genero_clave' => 'M'
        ]);

        Genero::create([
        	'genero_nombre' => 'Femenino',
	        'genero_clave' => 'F'
        ]);
    }
}
