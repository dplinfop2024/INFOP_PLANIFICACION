<?php

namespace App\Livewire\Pacc;

use App\Models\Pacc;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Lista PACC')]

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
        return view('livewire.pacc.lista-pacc');
    }
}
