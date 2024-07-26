<?php

namespace App\Livewire\Evaluacion\Presupuesto;

use Livewire\Component;

class ListaPresupuestoEjecucion extends Component
{
    public $renglones = array(
        array(
            'codigo'=>'1005', 'nombreU'=>'UNIDAD DE INGENIERIA Y MANTENIMIENTO', 'anio'=>'2019', 'fecha'=>'10/10/2018'
        ),
        array(
            'codigo'=>'1006', 'nombreU'=>'UNIDAD DE FORMACION SECRETARIA', 'anio'=>'2020', 'fecha'=>'09/09/2019'
        ),
        array(
            'codigo'=>'1007', 'nombreU'=>'DVISION DE PLANIFICACIÓN', 'anio'=>'2021', 'fecha'=>'15/09/2020'
        ),
        array(
            'codigo'=>'1008', 'nombreU'=>'DEPARTAMENTO DE PROGRAMACIÓN', 'anio'=>'2022', 'fecha'=>'06/10/2021'
        ),
        array(
            'codigo'=>'1009', 'nombreU'=>'NOMBRE DE LA UNIDAD', 'anio'=>'2023', 'fecha'=>'06/06/2022'
        ),
        array(
            'codigo'=>'1010', 'nombreU'=>'UNIDAD DE INGENIERIA Y MANTENIMIENTO', 'anio'=>'2019', 'fecha'=>'10/10/2018'
        ),
        array(
            'codigo'=>'1011', 'nombreU'=>'UNIDAD DE FORMACION SECRETARIA', 'anio'=>'2020', 'fecha'=>'09/09/2019'
        ),
        array(
            'codigo'=>'1012', 'nombreU'=>'DVISION DE PLANIFICACIÓN', 'anio'=>'2021', 'fecha'=>'15/09/2020'
        ),
        array(
            'codigo'=>'1013', 'nombreU'=>'DEPARTAMENTO DE PROGRAMACIÓN', 'anio'=>'2022', 'fecha'=>'06/10/2021'
        ),
        array(
            'codigo'=>'1014', 'nombreU'=>'NOMBRE DE LA UNIDAD', 'anio'=>'2023', 'fecha'=>'06/06/2022'
        ),
        array(
            'codigo'=>'1015', 'nombreU'=>'UNIDAD DE INGENIERIA Y MANTENIMIENTO', 'anio'=>'2019', 'fecha'=>'10/10/2018'
        ),
        array(
            'codigo'=>'1016', 'nombreU'=>'UNIDAD DE FORMACION SECRETARIA', 'anio'=>'2020', 'fecha'=>'09/09/2019'
        )
    );

    public function render()
    {
        return view('livewire.evaluacion.presupuesto.lista-presupuesto-ejecucion', [
            'renglones' => $this->renglones
        ]);

    }
}
