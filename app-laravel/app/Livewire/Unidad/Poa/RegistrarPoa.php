<?php

namespace App\Livewire\Unidad\Poa;

use App\Livewire\Forms\PoaAdminForm;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Registrar POA')]

class RegistrarPoa extends Component
{

    public PoaAdminForm $poaForm;

    public function save(){
        
    }

    public function render()
    {
        return view('livewire.unidad.poa.registrar-poa');
    }
}
