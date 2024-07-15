<?php

namespace App\Livewire;

use Livewire\Component;

class Login extends Component
{

    public $usuario;

    public function login($tipoUsuario){
        session(['tipoUsuario' => $tipoUsuario]);
        if($tipoUsuario == 'Unidad'){
            return redirect()->route('unidad.home');
        }else if($tipoUsuario == 'Programacion'){
            return redirect()->route('programacion.home');
        }
        
    }
    public function render()
    {
        return view('livewire.login');
    }
}
