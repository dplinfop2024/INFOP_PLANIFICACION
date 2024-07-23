<?php

namespace App\Livewire\Proveduria\Pacc;
use Livewire\Attributes\Title;

use Livewire\Component;

#[Title('Ver PACC')]
class VerPacc extends Component
{
    public function render()
    {
        return view('livewire.proveduria.pacc.ver-pacc');
    }
}
