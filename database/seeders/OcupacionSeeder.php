<?php

namespace Database\Seeders;

use App\Models\Ocupacion;
use Illuminate\Database\Seeder;

class OcupacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ocupaciones = [
            'No Corresponde',
            'Ama de Casa',
            'Estudiante',
            'Profesionales/Técnicos',
            'Directores/Funcionarios Públicos',
            'Personal Administrativo',
            'Comerciantes y Vendedores',
            'Trabajadores de los Servicios',
            'Trabajadores Agrícolas, Forestales',
            'Obreros No Agrícolas',
            'Conductores Maquinas/Vehiculos Transporte',
            'Otros',
            'Ninguna Actividad'
        ];

        foreach($ocupaciones as $ocupacionNombre) {
            $ocupacion = Ocupacion::create([
                'ocupacion_nombre' => $ocupacionNombre
            ]);
        }
    }
}
