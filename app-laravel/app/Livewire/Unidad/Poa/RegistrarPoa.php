<?php

namespace App\Livewire\Unidad\Poa;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Registrar POA')]

class RegistrarPoa extends Component
{
    public function render()
    {
        return view('livewire.unidad.poa.registrar-poa');
    }
}
