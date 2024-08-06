<?php

namespace App\Livewire\AvancesPoa;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Avances POA Administrativo')]
class VerAvancePoaAdministrativo extends Component
{
    public function render()
    {
        return view('livewire.avances-poa.ver-avance-poa-administrativo');
    }
}
