<?php

namespace App\Livewire\Unidad\Poa;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('POA')]

class VerPoa extends Component
{
    public function render()
    {
        return view('livewire.unidad.poa.ver-poa');
    }
}
