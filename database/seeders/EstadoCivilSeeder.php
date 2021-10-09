<?php

namespace Database\Seeders;

use App\Models\EstadoCivil;
use Illuminate\Database\Seeder;

class EstadoCivilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estados = [
            'Soltero',
            'Casado',
            'Acompañado',
            'Divorciado',
            'Viudo',
        ];

        foreach($estados as $estadoNombre) {
            EstadoCivil::create([
                'estado_civil_nombre' => $estadoNombre
            ]);
        }
    }
}
