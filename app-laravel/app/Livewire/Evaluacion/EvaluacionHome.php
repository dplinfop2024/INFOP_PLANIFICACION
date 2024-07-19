<?php

namespace App\Livewire\Evaluacion;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Menu Evaluacion')]
class EvaluacionHome extends Component
{
    public function render()
    {
        return view('livewire.evaluacion.evaluacion-home');
    }
}
