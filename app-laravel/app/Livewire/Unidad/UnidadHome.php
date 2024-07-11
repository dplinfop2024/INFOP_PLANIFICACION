<?php

namespace App\Livewire\Unidad;

use Livewire\Component;

class UnidadHome extends Component
{

    public $title = "Menu Unidad";
    public function render()
    {
        return view('livewire.unidad.unidad-home');
    }
}
