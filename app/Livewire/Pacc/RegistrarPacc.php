<?php

namespace App\Livewire\Pacc;

use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Registrar PACC')]
class RegistrarPacc extends Component
{

    public $renglones = array(
        array(
            'renglopresupuestario'=>'', 'descripciondecompra'=>'', 'unidad'=>'','montoestimadosegunpoa'=>'', 'fechaestimadapararecepciondelbien'=>''
        )
    );

    public function agregarRenglon(){
        array_push($this->renglones, 
            array(
                'renglopresupuestario'=>'', 'descripciondecompra'=>'', 'unidad'=>'', 'montoestimadosegunpoa'=>'', 'fechaestimadapararecepciondelbien'=>''
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
        return view('livewire.pacc.registrar-pacc');
    }
}
