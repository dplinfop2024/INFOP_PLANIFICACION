<?php

namespace App\Livewire\Mantenimiento\Usuario;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Editar Perfil')]

class EditarPerfil extends Component
{   /*
    public $name;
    public $email;
    public $password;

    public function mount()
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->email = $user->email;
    }
    public function updateProfile()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'nullable|string|min:8',
        ]);

        $user = Auth::user();
        $user->name = $this->name;
        $user->email = $this->email;

        if ($this->password) {
            $user->password = Hash::make($this->password);
        }

        $user->save();

        session()->flash('message', 'Perfil actualizado exitosamente.');
    }*/
    public function render()
    {
        return view('livewire.mantenimiento.usuario.editar-perfil');
    }
}