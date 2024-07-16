<?php

namespace App\Livewire;

use Livewire\Component;

class NavBar extends Component
{

    public $tipoUsuario = '';
    //variable que define si la barra se oculta o no
    public $hidden = '';

    //funcion que se llama al cargar la pagina
    public function mount(){
        //verifica si existe un usuario en la sesion
        $this->tipoUsuario = session('tipoUsuario');
        //si no existe el usuario la barra se ocultara
        if($this->tipoUsuario == ''){
            $this->hidden = 'hidden';
        }
    }

    //cerrar sesion para usuario
    public function logout(){
        //borra el usuario de la sesion
        session(['tipoUsuario' => '']);
        //redirige a la pagina de home
        return redirect()->route('welcome');
    }

    public function render()
    {
        return view('livewire.nav-bar');
    }
}
