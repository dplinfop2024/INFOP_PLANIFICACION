<?php

namespace App\Livewire\Planificacion\Poa;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Editar POA')]
class EditarPoa extends Component
{
    public function render()
    {
        return view('livewire.planificacion.poa.editar-poa');
    }
}
