<?php

namespace App\Http\Livewire;

use App\Models\Usuario;
use Livewire\Component;
use Livewire\WithPagination;

/* use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column; */

//class UsuariosComponent extends DataTableComponent
class UsuariosComponent extends Component
{
    /* public function columns(): array
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
    } */

    use WithPagination;

    public $sortBy = 'usuario_nombre_1';

    public $sortDirection = 'asc';

    public $perPage = '10';

    public $search = '';

    public function render()
    {
        $usuarios = Usuario::query()
            ->search($this->search)
            ->orderBy($this->sortBy, $this->sortDirection)
            ->paginate($this->perPage);

        return view('livewire.usuarios.index', [
            'usuarios' => $usuarios
        ]);
    }

    public function sortBy($field)
    {
        if ($this->sortDirection == 'asc') {
            $this->sortDirection = 'desc';
        } else {
            $this->sortDirection = 'asc';
        }

        return $this->sortBy = $field;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingPerPage()
    {
        $this->resetPage();
    }

}
