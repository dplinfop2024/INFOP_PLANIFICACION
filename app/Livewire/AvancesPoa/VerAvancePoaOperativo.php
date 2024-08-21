<?php

namespace App\Livewire\AvancesPoa;

use App\Models\Cargo;
use App\Models\MetaOperativa;
use App\Models\Poa;
use App\Models\ProgramacionOperativa;
use App\Models\ReportePoa;
use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;




#[Title('Avances POA Operativo')]
class VerAvancePoaOperativo extends Component
{
    public $poa;

    public $reportepoa;

    public $user;

    public $metaoperativa;

    public $sumaTrimestral;
//public $sumaTrimestralpar;
    
   

    public function mount(){
        $this->poa = Poa::find(118);
        $this->reportepoa = ReportePoa::find(5);

        $this->user = User::find($this->poa->id_usuario);
        $this->metaoperativa = MetaOperativa::find(1);


        $this->calcularSumaTrimestral();
        //$this->calcularSumaTrimestralpar();
    }

    public function calcularSumaTrimestral()
    {
        // Buscar el registro con el id_meta de la metaoperativa
        $registro = ProgramacionOperativa::where('id_meta', $this->metaoperativa->id)->first();

        if ($registro) {
            // Calcular la suma de los primeros tres meses
            $this->sumaTrimestral = $registro->ene + $registro->feb + $registro->mar;
        } else {
            $this->sumaTrimestral = null; // Manejar el caso cuando no se encuentra el registro
        }
    }


    /*funcio calcular la suma trimestral de participantes
    public function calcularSumaTrimestralpar()
    {
        // Buscar el registro con el id_meta de la metaoperativa
        $registro = ProgramacionOperativa::where('id_meta', $this->metaoperativa->id)->Second();

        if ($registro) {
            // Calcular la suma de los primeros tres meses
            $this->sumaTrimestralpar = $registro->ene + $registro->feb + $registro->mar;
        } else {
            $this->sumaTrimestralpar = null; // Manejar el caso cuando no se encuentra el registro
        }
    }*/

    public function render()
    {
        return view('livewire.avances-poa.ver-avance-poa-operativo');
    }
}
