<?php

namespace App\Livewire\Unidad\Pacc;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Registrar PACC')]

class RegistrarPacc extends Component
{
    public function render()
    {
        return view('livewire.unidad.pacc.registrar-pacc');
    }
}
