<?php

namespace App\Http\Controllers;

use App\Models\Escolaridad;
use App\Models\Establecimiento;
use App\Models\EstadoCivil;
use App\Models\Genero;
use App\Models\MotivoAtencion;
use App\Models\Ocupacion;
use App\Models\Referencia;
use App\Models\TipoDocumento;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('usuarios.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoDocumentos = TipoDocumento::all();
        $referencias = Referencia::orderBy('referencia_nombre')->get();
        $establecimientos = Establecimiento::orderBy('establecimiento_nombre')->get();
        $motivosAtencion = MotivoAtencion::orderBy('motivo_atencion_nombre')->get();
        $generos = Genero::all();
        $estadosCivil = EstadoCivil::all();
        $escolaridades = Escolaridad::all();
        $ocupaciones = Ocupacion::all();
        return view('usuarios.create', compact(
            'tipoDocumentos',
            'referencias',
            'establecimientos',
            'motivosAtencion',
            'generos',
            'estadosCivil',
            'escolaridades',
            'ocupaciones'
            )
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
