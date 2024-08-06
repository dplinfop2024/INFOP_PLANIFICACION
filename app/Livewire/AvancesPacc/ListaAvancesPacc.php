<?php

namespace App\Livewire\AvancesPacc;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Lista Avances Pacc')]
class ListaAvancesPacc extends Component
{
    public function render()
    {
        return view('livewire.avances-pacc.lista-avances-pacc');
    }
}
