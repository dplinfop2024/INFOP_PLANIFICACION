<?php

namespace App\Livewire\Programacion\Poa;

use Livewire\Component;

class VerListaPoa extends Component
{
    public $poas = [
        [
            'no_actividad' => '1',
            'nombre_unidad' => 'Desarrollo Empresarial',
            'tipo_unidad' => 'Unidad Operativa',
            'fecha' => '2025-01-01',
            'aceptado' => true,
            'aprobado' => false,
        ],
        [
            'no_actividad' => '2',
            'nombre_unidad' => 'Recursos Humanos',
            'tipo_unidad' => 'Unidad Operativa',
            'fecha' => '2025-02-01',
            'aceptado' => true,
            'aprobado' => true,
        ],
        // Agrega más POAs según sea necesario
    ];

    public function render()
    {
        return view('livewire.programacion.poa.ver-lista-poa', [
            'poas' => $this->poas,
        ]);
    }
}
