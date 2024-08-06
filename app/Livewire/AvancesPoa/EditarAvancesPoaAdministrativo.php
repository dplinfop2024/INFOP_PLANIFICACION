<?php

namespace App\Livewire\AvancesPoa;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Editar Avances POA Administrativo')]
class EditarAvancesPoaAdministrativo extends Component
{
    public function render()
    {
        return view('livewire.avances-poa.editar-avances-poa-administrativo');
    }
}
