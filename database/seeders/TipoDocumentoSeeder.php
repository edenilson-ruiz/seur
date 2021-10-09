<?php

namespace Database\Seeders;

use App\Models\TipoDocumento;
use Illuminate\Database\Seeder;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipoDocumentos = [
            'Partida de Nacimiento',
            'DUI',
            'Pasaporte'
        ];

        foreach($tipoDocumentos as $doc) {
            TipoDocumento::create([
                'tipo_documento_nombre' => $doc
            ]);
        }
    }
}
