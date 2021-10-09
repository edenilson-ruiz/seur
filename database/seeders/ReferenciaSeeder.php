<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Referencia;

class ReferenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Referencia::create(['referencia_nombre' => 'No Referido', 'referencia_codigo' => 1 ]);
        Referencia::create(['referencia_nombre' => 'Hospital Mispas', 'referencia_codigo' => 51 ]);
        Referencia::create(['referencia_nombre' => 'ISSS', 'referencia_codigo' => 52 ]);
        Referencia::create(['referencia_nombre' => 'Hospital Militar (FA o FP)', 'referencia_codigo' => 53 ]);
        Referencia::create(['referencia_nombre' => 'Clinica', 'referencia_codigo' => 54 ]);
        Referencia::create(['referencia_nombre' => 'Hospital Privado (Policlínico)', 'referencia_codigo' => 55 ]);
        Referencia::create(['referencia_nombre' => 'Colegio', 'referencia_codigo' => 56 ]);
        Referencia::create(['referencia_nombre' => 'Unidades de Salud', 'referencia_codigo' => 57 ]);
        Referencia::create(['referencia_nombre' => 'Casas de Salud', 'referencia_codigo' => 58 ]);
        Referencia::create(['referencia_nombre' => 'Médico Particular', 'referencia_codigo' => 60 ]);
        Referencia::create(['referencia_nombre' => 'Promotores de Comunidad', 'referencia_codigo' => 62 ]);
        Referencia::create(['referencia_nombre' => 'Organizaciones Comunales', 'referencia_codigo' => 63 ]);
        Referencia::create(['referencia_nombre' => 'Despistaje (Campañas Salud)', 'referencia_codigo' => 64 ]);
        Referencia::create(['referencia_nombre' => 'O.N.G.', 'referencia_codigo' => 65 ]);
        Referencia::create(['referencia_nombre' => 'ISRI', 'referencia_codigo' => 99 ]);
        Referencia::create(['referencia_nombre' => 'Bienestar Magisterial', 'referencia_codigo' => 100 ]);
        Referencia::create(['referencia_nombre' => 'ISNA', 'referencia_codigo' => 101 ]);
        Referencia::create(['referencia_nombre' => 'Otra Entidad Externa', 'referencia_codigo' => 102 ]);

    }
}
