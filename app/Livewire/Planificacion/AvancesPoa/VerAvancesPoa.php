<?php

namespace App\Livewire\Planificacion\AvancesPoa;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Avances POA')]

class VerAvancesPoa extends Component
{
    public function render()
    {
        return view('livewire.planificacion.avances-poa.ver-avances-poa');
    }
}
