<?php

namespace App\Livewire\Planificacion;

use Livewire\Component;
use Livewire\Attributes\Title;

//Pasar titulo de pagina a layout
#[Title('Menú Principal Planificacion')]


class PlanificacionHome extends Component
{
    public function render()
    {
        return view('livewire.planificacion.planificacion-home');
    }
}
