<?php

namespace App\Livewire\Planificacion\Pacc;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Ver PACC')]
class VerPacc extends Component
{
    public function render()
    {
        return view('livewire.planificacion.pacc.ver-pacc');
    }
}
