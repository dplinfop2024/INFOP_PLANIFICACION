<?php

namespace App\Livewire\Evaluacion\Pacc;
use App\Models\Pacc;
use Livewire\Component;

class ListaPacc extends Component
{
    public $paccs;
    function mount(){
        $this->paccs = Pacc::all();
        //mostrar poas en consola
        $this->dispatch('log', $this->paccs);
    }
    public function render()
    {
        return view('livewire.evaluacion.pacc.lista-pacc');
    }
}
