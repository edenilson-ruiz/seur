<?php

namespace Database\Seeders;

use App\Models\Escolaridad;
use Illuminate\Database\Seeder;

class EscolaridadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $escolaridades = [
            'No corresponde (< 3 años)',
            'Educación Inicial',
            'Primaria Completa',
            'Primaria Incompleta',
            'Educación Especial',
            'Secundaria Completa',
            'Secundaria Incompleta',
            'Superior Técnico Completo',
            'Superior Técnico Incompleto',
            'Bachillerato Completo',
            'Bachillerato Incompleto',
            'Universidad Completa',
            'Universidad Incompleta',
            'Sin Instruc. pero Lee/Escribe',
            'Sin Instrucción',
            'Sin Información'
        ];

        foreach($escolaridades as $escolaridadNombre) {
            Escolaridad::create([
                'escolaridad_nombre' => $escolaridadNombre
            ]);
        }
    }
}
