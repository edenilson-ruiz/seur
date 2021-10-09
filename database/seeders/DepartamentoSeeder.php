<?php

namespace Database\Seeders;

use App\Models\Departamento;
use Illuminate\Database\Seeder;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departamento::create([
        	'departamento_nombre' => 'Ahuachapán',
	        'departamento_orden' => 1
        ]);

        Departamento::create([
        	'departamento_nombre' => 'Santa Ana',
	        'departamento_orden' => 12
        ]);

        Departamento::create([
        	'departamento_nombre' => 'Sonsonate',
	        'departamento_orden' => 13
        ]);

        Departamento::create([
        	'departamento_nombre' => 'Chalatenango',
	        'departamento_orden' => 3
        ]);

        Departamento::create([
        	'departamento_nombre' => 'La Libertad',
	        'departamento_orden' => 5
        ]);

        Departamento::create([
        	'departamento_nombre' => 'San Salvador',
	        'departamento_orden' => 10
        ]);

        Departamento::create([
        	'departamento_nombre' => 'Cuscatlán',
	        'departamento_orden' => 4
        ]);

        Departamento::create([
        	'departamento_nombre' => 'La Paz',
	        'departamento_orden' => 6
        ]);

        Departamento::create([
        	'departamento_nombre' => 'Cabañas',
	        'departamento_orden' => 2
        ]);

        Departamento::create([
        	'departamento_nombre' => 'San Vicente',
	        'departamento_orden' => 11
        ]);

        Departamento::create([
        	'departamento_nombre' => 'Usulután',
	        'departamento_orden' => 14
        ]);

        Departamento::create([
        	'departamento_nombre' => 'San Miguel',
	        'departamento_orden' => 9
        ]);

        Departamento::create([
        	'departamento_nombre' => 'Morazán',
	        'departamento_orden' => 8
        ]);

        Departamento::create([
        	'departamento_nombre' => 'La Unión',
	        'departamento_orden' => 7
        ]);

        Departamento::create([
        	'departamento_nombre' => 'Guatemala',
	        'departamento_orden' => 15
        ]);

        Departamento::create([
        	'departamento_nombre' => 'Honduras',
	        'departamento_orden' => 16
        ]);

        Departamento::create([
        	'departamento_nombre' => 'Nicaragua',
	        'departamento_orden' => 17
        ]);

    }
}
