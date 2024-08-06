<?php

namespace App\Livewire\Poa;

use App\Models\Poa;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Lista POA')]
class ListaPoa extends Component
{

    public $poas;

    function mount(){

        $this->poas = Poa::all();
        //mostrar poas en consola
        $this->dispatch('log', $this->poas);

    }
    public function render()
    {
        return view('livewire.poa.lista-poa');
    }
}
