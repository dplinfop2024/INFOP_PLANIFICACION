<?php

namespace App\Livewire\AvancesPoa;

use Livewire\Attributes\Title;
use Livewire\Component;




#[Title('Avances POA Operativo')]
class VerAvancePoaOperativo extends Component
{
    public $idpoa;

    public $numerotrimestre;
    public function render()
    {
        return view('livewire.avances-poa.ver-avance-poa-operativo');
    }
}
