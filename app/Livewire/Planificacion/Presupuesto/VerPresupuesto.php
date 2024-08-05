<?php

namespace App\Livewire\Planificacion\Presupuesto;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Ver Presupuesto')]
class VerPresupuesto extends Component
{
    public function render()
    {
        return view('livewire.planificacion.presupuesto.ver-presupuesto');
    }
}
