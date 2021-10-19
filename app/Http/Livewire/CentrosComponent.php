<?php

namespace App\Http\Livewire;

use App\Models\Centro;
use Livewire\Component;
use Livewire\WithPagination;

class CentrosComponent extends Component
{
    use WithPagination;

    public $sortBy = 'centro_nombre';

    public $sortDirection = 'asc';

    public $perPage = '10';

    public $search = '';

    public function render()
    {
        $centros = Centro::query()
            ->search($this->search)
            ->orderBy($this->sortBy, $this->sortDirection)
            ->paginate($this->perPage);

        return view('livewire.centros.centros-component',[
            'centros' => $centros
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
