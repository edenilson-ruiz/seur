<?php

namespace App\Http\Livewire;

use App\Models\Usuario;
use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class UsuariosComponent extends DataTableComponent
{
    public function columns(): array
    {
        return [
            Column::make('Primer Nombre', 'usuario_nombre_1')
                ->sortable()
                ->searchable(),
            Column::make('E-mail', 'usuario_email')
                ->sortable()
                ->searchable(),
            Column::make('Expediente', 'expediente_num')
                ->sortable(),
            Column::make('Created At', 'created_at')
                ->sortable()
                ->searchable(),
            Column::make('Accciones')
                ->sortable()
                ->format(function($value, $column, $row) {
                    return view('usuarios.acciones')->withUsuario($row);
                }),
        ];
    }

    public function query(): Builder
    {
        return Usuario::query();
    }

}
