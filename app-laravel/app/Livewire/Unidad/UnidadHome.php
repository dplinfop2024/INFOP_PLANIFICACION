<?php

namespace App\Livewire\Unidad;

use Livewire\Attributes\Title;
use Livewire\Component;

//Pasar titulo de pagina a layout
#[Title('Menu Unidad')]

class UnidadHome extends Component
{

    public $prueba = "Menu Unidad";

    public function registro(){

        $this->prueba = "cambio";
    }
    public function render()
    {
        return view('livewire.unidad.unidad-home');
    }
}
