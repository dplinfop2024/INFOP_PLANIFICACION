<?php

namespace App\Livewire\Unidad;

use Livewire\Attributes\Title;
use Livewire\Component;

//Pasar titulo de pagina a layout
#[Title('Menu Unidad')]

class UnidadHome extends Component
{

    public $prueba = "Menu Unidad";

    public function mount(){
        //verifica si hay una sesion con un usuario activo
        $tipoUsuario = session('tipoUsuario');
        //si existe un usuario, lo redirije a su seccion correspondiente
        if($tipoUsuario != 'Unidad'){
            return redirect()->route('login');
        }
    }

    public function registro(){

        $this->prueba = "cambio";
    }
    public function render()
    {
        return view('livewire.unidad.unidad-home');
    }
}
