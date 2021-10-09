<?php

namespace Database\Seeders;

use App\Models\AreaAtencion;
use Illuminate\Database\Seeder;

class AreaAtencionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $areasAtencion = [
            'Electrofisiologicos',
            'Instructoria Vocacional',
            'Medicina De Especialidad',
            'Medicina General',
            'Rehabilitacion Funcional',
            'Servicios De Apoyo',
            'Terapia Fisica',
            'Otros Servicios Medicos',
            'Terapia De Lenguaje',
            'Terapia Educativa'
        ];

        foreach($areasAtencion as $area) {
            AreaAtencion::create([
                'area_atencion_nombre' => $area
            ]);
        }

    }
}
