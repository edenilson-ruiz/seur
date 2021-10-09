<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class UsuariosComponent extends DataTableComponent
{
    public function columns(): array
    {
        return [
            Column::make('Name', 'name')
                ->sortable()
                ->searchable(),
            Column::make('E-mail', 'email')
                ->sortable()
                ->searchable(),
            Column::make('Verified', 'email_verified_at')
                ->sortable(),
            Column::make('Created At', 'created_at')
                ->sortable()
                ->searchable(),
        ];
    }

    public function query(): Builder
    {
        return User::query();
    }

    /* public function render()
    {
        $usuarios = User::all();

        return view('livewire.usuarios-component', compact('usuarios'));
    } */
}
