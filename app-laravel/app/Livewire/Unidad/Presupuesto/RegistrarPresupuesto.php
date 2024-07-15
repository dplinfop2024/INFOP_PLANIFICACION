<?php

namespace App\Livewire\Unidad\Presupuesto;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Presupuesto')]

class RegistrarPresupuesto extends Component
{
    public function render()
    {
        return view('livewire.unidad.presupuesto.registrar-presupuesto');
    }
}
