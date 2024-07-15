<?php

namespace App\Livewire\Unidad\Presupuesto;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Registrar Presupuesto')]

class VerPresupuesto extends Component
{
    public function render()
    {
        return view('livewire.unidad.presupuesto.ver-presupuesto');
    }
}
