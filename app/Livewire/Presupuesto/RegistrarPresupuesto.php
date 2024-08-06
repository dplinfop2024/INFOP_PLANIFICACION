<?php

namespace App\Livewire\Presupuesto;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Registrar Presupuesto')]
class RegistrarPresupuesto extends Component
{

    public $renglones = array(
        array(
            'subgrupo'=>'', 'detalles'=>'', 'valor'=>''
        )
    );

    public function agregarRenglon(){
        array_push($this->renglones, 
            array(
                'subgrupo'=>'', 'detalles'=>'', 'valor'=>''
            ));
    }

    public function borrarRenglon($id){
        array_splice($this->renglones, $id, 1);
        $this->dispatch('log', "Borrar renglon: $id");
    }

    public function registrarPresupuesto(){
        $this->dispatch('log', $this->renglones);
    }

    public function render()
    {
        return view('livewire.presupuesto.registrar-presupuesto');
    }
}
