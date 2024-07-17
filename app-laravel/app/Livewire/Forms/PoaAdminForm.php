<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PoaAdminForm extends Form
{
    #[Rule('required')]
    public $actividad;
    public $nombreUnidad;
    public $responsable;
    public $cargoResponsable;
    public $anio;
    public $componente;
    public $metas = [];
}
