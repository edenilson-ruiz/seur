<?php

namespace App\Http\Livewire;

use App\Models\Departamento;
use App\Models\Municipio;
use Livewire\Component;

class DropdownMunicipios extends Component
{

    public $municipios = null;

    public $departamento = null;


    public function mount()
    {
        $this->departamentos = Departamento::all();
        $this->departamento = null;
    }

    public function render()
    {
        return view('livewire.dropdown-municipios');
    }

    public function updatedDepartamento($departamento_id)
    {

        $this->municipios = Municipio::where('departamento_id', $departamento_id)->get();

    }
}
