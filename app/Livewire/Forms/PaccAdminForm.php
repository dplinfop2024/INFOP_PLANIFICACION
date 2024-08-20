<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PaccAdminForm extends Form
{  #[Rule('required')]
   
    public $nombreUnidad = 'Departamento de Planificacion';
    public $responsable = 'Luis Alberto Lopez Smith';
    public $cargoResponsable = 'Jefa Departamento Planifcacion';
    public $anio = '';

    public $actividadPres = '6501';
    
    public $actividadEjec = 'Unidad de Formacion Secretarial';
    
   
}
