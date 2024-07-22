<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Iniciar Sesion')]

class Login extends Component
{

    public $usuario;

    //funcion que se llama al cargar la pagina
    public function mount(){
        //verifica si hay una sesion con un usuario activo
        $tipoUsuario = session('tipoUsuario');
        //si existe un usuario, lo redirije a su seccion correspondiente
        if($tipoUsuario == 'Unidad'){
            return redirect()->route('unidad.home');
        }else if($tipoUsuario == 'Programacion'){
            return redirect()->route('programacion.home');
        }else if ($tipoUsuario =='Planificacion') {
            return redirect()->route('planificacion.home');
        
        }else if ($tipoUsuario =='Proveduria') {
            return redirect()->route('proveduria.home');
        } 
    }

    public function login($tipoUsuario){
        //guarda el tipo de usuario en la sesion
        session(['tipoUsuario' => $tipoUsuario]);
        //redirige a la seccion correspondiente
        if($tipoUsuario == 'Unidad'){
            return redirect()->route('unidad.home');
        }else if($tipoUsuario == 'Programacion'){
            return redirect()->route('programacion.home');
        }
        else if ($tipoUsuario =='Planificacion') {
            return redirect()->route('planificacion.home');
        
        }else if ($tipoUsuario =='Proveduria') {
            return redirect()->route('proveduria.home');
        }
        
    }
    public function render()
    {
        return view('livewire.login');
    }
}
