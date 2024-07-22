<?php

namespace App\Livewire\Proveduria;

use Livewire\Component;
use Livewire\Attributes\Title;

//Pasar titulo de pagina a layout
#[Title('Menú Principal Planificacion')]


class ProveduriaHome extends Component
{
    public function render()
    {
        return view('livewire.proveduria.proveduria-home');
    }
}
