<?php

namespace App\Livewire\AvancesPoa;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Lista POA')]
class ListaAvancesPoa extends Component
{
    public function render()
    {
        return view('livewire.avances-poa.lista-avances-poa');
    }
}
