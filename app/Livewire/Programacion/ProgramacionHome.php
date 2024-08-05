<?php

namespace App\Livewire\Programacion;
use Livewire\Attributes\Title;
use Livewire\Component;
//Pasar titulo de pagina a layout
#[Title('Menú Principal Programación')]
class ProgramacionHome extends Component
{
   
    public function render()
    {
        return view('livewire.programacion.programacion-home');
    }
}
