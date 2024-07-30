<?php

namespace App\Livewire\Evaluacion\Pacc;

use Livewire\Component;

class EditarPacc extends Component
{
    public $renglones = array(
        array(
            'renglopresupuestario'=>'426.00', 'descripciondecompra'=>'Data Show', 'unidad'=>'c/u','montoestimadosegunpoa'=>'20000.00', 'fechaestimadapararecepciondelbien'=>'2024-07-17'
        ),
        array(
            'renglopresupuestario'=>'426.00', 'descripciondecompra'=>'Computadora Portatil', 'unidad'=>'c/u','montoestimadosegunpoa'=>'24000.00', 'fechaestimadapararecepciondelbien'=>'2024-03-14'
        ),
        array(
            'renglopresupuestario'=>'426.00', 'descripciondecompra'=>'Computadora de Escritorio', 'unidad'=>'c/u','montoestimadosegunpoa'=>'12000.00', 'fechaestimadapararecepciondelbien'=>'2024-04-10'
        ),
        array(
            'renglopresupuestario'=>'426.00', 'descripciondecompra'=>'Impresora Multifuncional', 'unidad'=>'c/u','montoestimadosegunpoa'=>'9000.00', 'fechaestimadapararecepciondelbien'=>'2024-04-10'
        ),
        array(
            'renglopresupuestario'=>'421.10', 'descripciondecompra'=>'Fotocopiadora', 'unidad'=>'c/u','montoestimadosegunpoa'=>'15000.00', 'fechaestimadapararecepciondelbien'=>'2024-05-13'
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
        return view('livewire.evaluacion.pacc.editar-pacc');
    }
}
