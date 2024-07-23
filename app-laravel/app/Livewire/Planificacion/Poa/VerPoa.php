<?php

namespace App\Livewire\Planificacion\Poa;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Ver POA')]
class VerPoa extends Component
{
    public function render()
    {
        return view('livewire.planificacion.poa.ver-poa');
    }
}
