<?php

namespace App\Livewire\Poa;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('POA')]
class VerPoaOperativo extends Component
{
    public function render()
    {
        return view('livewire.poa.ver-poa-operativo');
    }
}
