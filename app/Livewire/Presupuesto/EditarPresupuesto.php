<?php

namespace App\Livewire\Presupuesto;

use Livewire\Component;

class EditarPresupuesto extends Component
{
    public $renglones = array(
        array(
            'subgrupo'=>'14100', 'detalles'=>'Horas extraordinarias', 'valor'=>'393300'
        ),
        array(
            'subgrupo'=>'15900', 'detalles'=>'Otras asistencia social', 'valor'=>'40000'
        ),
        array(
            'subgrupo'=>'21110', 'detalles'=>'suministro de energia electrica', 'valor'=>'2500000'
        ),
        array(
            'subgrupo'=>'21200', 'detalles'=>'Agua', 'valor'=>'1200000'
        ),
        array(
            'subgrupo'=>'21420', 'detalles'=>'Telefonia fija', 'valor'=>'100000'
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
        return view('livewire.presupuesto.editar-presupuesto');
    }
}
