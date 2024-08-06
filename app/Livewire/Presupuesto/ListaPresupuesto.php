<?php

namespace App\Livewire\Presupuesto;

use App\Models\Presupuesto;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Listado Presupuesto')]

class ListaPresupuesto extends Component
{

    public $presupuestos;

    function mount(){

        $this->presupuestos = Presupuesto::all();
        //mostrar poas en consola
        $this->dispatch('log', $this->presupuestos);

    }
    public function render()
    {
        return view('livewire.presupuesto.lista-presupuesto');
    }
}
