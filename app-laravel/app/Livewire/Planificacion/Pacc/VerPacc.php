<?php

namespace App\Livewire\Planificacion\Pacc;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Ver PACC')]
class VerPacc extends Component
{
    public $renglones = array(
        array(


           'id'=>'1', 'renglonPres'=>  '', 'descripcion'=>'50 Papel Bond tamaño carta base 20', 'unidad'=>'RESMA', 'montoEst'=>'3,700.00', 'fecha'=>'18/03/2024'
        ),
        array(
             'id'=>'2','renglonPres'=>  '', 'descripcion'=>'45 Papel Bond tamaño oficio base 20', 'unidad'=>'RESMA', 'montoEst'=>'3,999.00', 'fecha'=>'18/03/2024'
        ),
        array(
           'id'=>'3',  'renglonPres'=>  '', 'descripcion'=>'1000 Folder tamaño carta', 'unidad'=>'UNID', 'montoEst'=>'4,000.00', 'fecha'=>'18/03/2024'
       ), 
       array(
            'id'=>'4','renglonPres'=>  '', 'descripcion'=>'700 Papel Bond tamaño oficio', 'unidad'=>'UNID', 'montoEst'=>'4,000.00', 'fecha'=>'18/03/2024'
        ), 
        array(
            'id'=>'5','renglonPres'=>  '', 'descripcion'=>'1000 Bolsas Manila 13X10(grandes)', 'unidad'=>'UNID', 'montoEst'=>'18,000.00', 'fecha'=>'18/03/2024'
            ), 
        array(
            'id'=>'6','renglonPres'=>  '', 'descripcion'=>'08 Libretas de taquigrafia ', 'unidad'=>'UNID', 'montoEst'=>'240.00', 'fecha'=>'18/03/2024'
        ), 
        array(
            'id'=>'7','renglonPres'=>  '', 'descripcion'=>'08 Libretas Bond-rayadas ', 'unidad'=>'UNID', 'montoEst'=>'360.00', 'fecha'=>'18/03/2024'
            ), 

         array(
            'id'=>'8', 'renglonPres'=>  '', 'descripcion'=>'2 Cuadernos unicos tamaño oficio para correpondencia', 'unidad'=>'UNID', 'montoEst'=>'150.00', 'fecha'=>'18/03/2024'
         )
            
    );
    public function render()
    {
        return view('livewire.planificacion.pacc.ver-pacc');
    }
}
