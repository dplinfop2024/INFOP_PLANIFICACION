<?php

namespace App\Livewire\Unidad\Pacc;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('PACC')]

class VerPacc extends Component
{
    public function render()
    {
        return view('livewire.unidad.pacc.ver-pacc');
    }
}
