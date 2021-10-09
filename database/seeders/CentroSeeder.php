<?php

namespace Database\Seeders;

use App\Models\Centro;
use Illuminate\Database\Seeder;

class CentroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Centro::create([
        	'centro_nombre' => 'Instituto',
	        'centro_codigo' => 'ISRI'
        ]);

        Centro::create([
        	'centro_nombre' => 'Centro del Aparato Locomotor',
	        'centro_codigo' => 'CAL'
        ]);

        Centro::create([
        	'centro_nombre' => 'Centro de Atención a Ancianos Sara Zalvívar',
	        'centro_codigo' => 'ASILO'
        ]);

        Centro::create([
        	'centro_nombre' => 'Centro de Audicion y Lenguaje',
	        'centro_codigo' => 'CALE'
        ]);

        Centro::create([
        	'centro_nombre' => 'Centro de Rehabilitación Integral de Occidente',
	        'centro_codigo' => 'CRIO'
        ]);

        Centro::create([
        	'centro_nombre' => 'Centro de Rehabilitación Integral de Oriente',
	        'centro_codigo' => 'CRIOR'
        ]);

        Centro::create([
        	'centro_nombre' => 'Centro de Rehabilitación de Ciegos Eugenia de Dueñas',
	        'centro_codigo' => 'CIEGOS'
        ]);

        Centro::create([
        	'centro_nombre' => 'Centro de Rehabilitación Profesional',
	        'centro_codigo' => 'RP'
        ]);

        Centro::create([
        	'centro_nombre' => 'Consulta Externa y Geriátrica',
	        'centro_codigo' => 'C.EXT'
        ]);

        Centro::create([
        	'centro_nombre' => 'Centro de Rehabilitación Integral para la Niñez y la Adolescencia',
	        'centro_codigo' => 'CRINA'
        ]);

    }
}
