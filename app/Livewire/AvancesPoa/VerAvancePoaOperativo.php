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


    public $sumaTrimestralCursos;
    public $sumaTrimestralParticipantes; //suma de participantes por trimestre
    public $sumaTrimestralHoras;
   

    
   

    public function mount(){
        $this->poa = Poa::find(118);
        $this->reportepoa = ReportePoa::find(5);

        $this->user = User::find($this->poa->id_usuario);
        $this->metaoperativa = MetaOperativa::find(1);


        $this->calcularSumaTrimestral();
        
    }

    public function calcularSumaTrimestral()
    {
        // Obtener la suma de participantes para el primer trimestre
        $programacionOperativaParticipantes = ProgramacionOperativa::where('id', 2)->first();
        $programacionOperativaHoras = ProgramacionOperativa::where('id', 3)->first();
        $programacionOperativaCursos = ProgramacionOperativa::where('id', 1)
                                         ->where('id_meta', 1)
                                         ->first();

        if ($programacionOperativaParticipantes) {
            $this->sumaTrimestralParticipantes = $programacionOperativaParticipantes->ene 
                                                + $programacionOperativaParticipantes->feb 
                                                + $programacionOperativaParticipantes->mar;
        } else {
            $this->sumaTrimestralParticipantes = null; // Manejar el caso cuando no se encuentra el registro
        }

        if ($programacionOperativaHoras) {
            $this->sumaTrimestralHoras = $programacionOperativaHoras->ene 
                                        + $programacionOperativaHoras->feb 
                                        + $programacionOperativaHoras->mar;
        } else {
            $this->sumaTrimestralHoras = null; // Manejar el caso cuando no se encuentra el registro
        }

        if ($programacionOperativaCursos) {
            $this->sumaTrimestralCursos = $programacionOperativaCursos->ene 
                                          + $programacionOperativaCursos->feb 
                                          + $programacionOperativaCursos->mar;
        } else {
            $this->sumaTrimestralCursos = null; // Manejar el caso cuando no se encuentra el registro
        }
    }

    public function render()
    {
        return view('livewire.avances-poa.ver-avance-poa-operativo');
    }
}
