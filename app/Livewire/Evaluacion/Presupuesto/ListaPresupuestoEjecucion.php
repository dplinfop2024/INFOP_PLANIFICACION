<?php

namespace App\Livewire\Evaluacion\Presupuesto;
use App\Models\Presupuesto;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Listado Presupuesto')]

class ListaPresupuestoEjecucion extends Component
{
    public $presupuestos;

    function mount(){

        $this->presupuestos = Presupuesto::all();
        //mostrar poas en consola
        $this->dispatch('log', $this->presupuestos);

    }
   

    public function render()
    {
        return view('livewire.evaluacion.presupuesto.lista-presupuesto-ejecucion');

    }
}
