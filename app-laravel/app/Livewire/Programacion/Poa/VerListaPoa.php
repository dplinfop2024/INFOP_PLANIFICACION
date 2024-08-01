<?php

namespace App\Livewire\Programacion\Poa;

use App\Models\Poa;
use Livewire\Component;

class VerListaPoa extends Component
{

    public $poas;

    function mount(){

        $this->poas = Poa::all();
        //mostrar poas en consola
        $this->dispatch('log', $this->poas);

    }

    public function render()
    {

        return view('livewire.programacion.poa.ver-lista-poa');
           
       
    }
}
