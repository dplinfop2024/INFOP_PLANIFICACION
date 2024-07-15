<?php

namespace App\Livewire;

use Livewire\Component;

class NavBar extends Component
{

    public $tipoUsuario = '';
    public $hidden = '';

    public function mount(){
        $this->tipoUsuario = session('tipoUsuario');
        if($this->tipoUsuario == ''){
            $this->hidden = 'hidden';
        }
    }

    public function logout(){
        session(['tipoUsuario' => '']);
        return redirect()->route('welcome');
    }

    public function render()
    {
        return view('livewire.nav-bar');
    }
}
