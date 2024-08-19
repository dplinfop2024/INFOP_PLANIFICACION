<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PoaAdminForm extends Form
{
    #[Rule('required')]
    public $actividad = '5100';
    public $nombreUnidad = 'Departamento de Programacion';
    public $responsable = 'Catalina Isabel Lopez Smith';
    public $cargoResponsable = 'Jefa Departamento Programacion';
    public $anio = '';
    public $componente;
    public $numComponente;
    public $metas = [['codigo'=> '1.1', 'descripcion'=>'']];
}
