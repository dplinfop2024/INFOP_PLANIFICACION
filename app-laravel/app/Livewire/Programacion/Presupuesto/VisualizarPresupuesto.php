<?php

namespace App\Livewire\Programacion\Presupuesto;

use Livewire\Component;

class VisualizarPresupuesto extends Component
{

    public $renglones = array(
        array(
            'grupo'=>'10000', 'descripcion'=>'SERVICIOS PERSONALES', 'valor'=>'40,000.00'
        ),
        array(
            'grupo'=>'14100', 'descripcion'=>'Horas extraordinarias', 'valor'=>'40,000.00'
        ),
        array(
            'grupo'=>'15900', 'descripcion'=>'Otras Asistencias Social al Personal (Clasusula 61', 'valor'=>''
        ),
        array(
            'grupo'=>'20000', 'descripcion'=>'SERVICIOS NO PERSONALES', 'valor'=>'7,175,000.00'
        ),
        array(
            'grupo'=>'21110', 'descripcion'=>'Suministro de energía eléctrica', 'valor'=>'25,000.00'
        ),
        array(
            'grupo'=>'22210', 'descripcion'=>'Alquiler de Equipos de Transporte, tracción y Elevación', 'valor'=>'100,000.00'
        ),
        array(
            'grupo'=>'23100', 'descripcion'=>'Mantenimiento y Reparación de Equipos de Comunciación', 'valor'=>'50,000.00'
        ),
        array(
            'grupo'=>'', 'descripcion'=>'TOTAL', 'valor'=>'7,215,000.00'
        )
   
        );

    public function render()
    {
        return view('livewire.programacion.presupuesto.visualizar-presupuesto', ['renglones' => $this->renglones]);
    }
}
