<?php

namespace App\Livewire;

use App\Models\Cargo;
use App\Models\TipoUsuario;
use App\Models\User;
use Livewire\Component;

class PerfilUsuario extends Component
{

    //creando objeto para guardar el perfil de usuario
    public $usuario;
    public $tipousuario;
    public $cargo;

    //función mount se accederá a todos los datos de la bd al cargarse la página
    public function mount (){
        //buscando el usuario 
        $this->usuario = User::find(9);
       
        //mostrando usuario en consola
        $this->dispatch('log', $this->usuario);
        
        //buscando el tipo usuario que esta guardado en la variable usuario, usuario->id_tipo_usuario
        $this->tipousuario = TipoUsuario::find($this->usuario->id_tipo_usuario);
        
        //mostrando el tipo usuario en consola
        $this->dispatch('log', $this->usuario->tipousuario);
       
        //buscando el cargo
        $this->cargo = Cargo::find ($this->usuario->id_cargo);
        
        //mostrando el cargo de un usuario en consola
        $this->dispatch('log', $this->cargo);
        
    }
    //buscando
    public function render()
    {
        return view('livewire.perfil-usuario');
    }
}
