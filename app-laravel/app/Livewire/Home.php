<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('LOGIN')]

class Home extends Component
{

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

    public function render()
    {
        return view('livewire.home');
    }
}
