<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Edenilson Ruiz',
            'email' => 'ruiz.edenilson@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('secret'),
            'remember_token' => null
        ]);

        \App\Models\User::factory(50)->create();

        $this->call([
            CentroSeeder::class,
            OcupacionSeeder::class,
            GeneroSeeder::class,
            EstadoCivilSeeder::class,
            EscolaridadSeeder::class,
            DepartamentoSeeder::class,
            MunicipioSeeder::class,
            ReferenciaSeeder::class,
            ZonaSeeder::class,
            AreaAtencionSeeder::class,
            MotivoAtencionSeeder::class,
            TipoDocumentoSeeder::class,
            EstablecimientoSeeder::class,
            UsuarioSeeder::class,
        ]);
    }
}
