<?php

namespace App\Livewire\Planificacion\AvancesPacc;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Avances PACC')]

class VerAvancesPacc extends Component
{
    public function render()
    {
        return view('livewire.planificacion.avances-pacc.ver-avances-pacc');
    }
}
