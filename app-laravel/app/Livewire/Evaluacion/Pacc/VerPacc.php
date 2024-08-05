<?php

namespace App\Livewire\Evaluacion\Pacc;
use App\Models\Pacc;
use App\Models\User;
use APP\Models\GastoPacc;
use App\Models\Prueba;
use Livewire\Component;

class VerPacc extends Component
{

    public $pacc;
    public $user;
    public $gastopacc;
   
    public function mount (){
         $this->pacc=Pacc::find(1);
         $this->user=User::find($this->pacc->id_usuario);
         $this->gastopacc= Prueba::where('id_pacc', $this->pacc->id)->get();
         $this->dispatch('log', $this->gastopacc);
}
    public function render()
    {
        
        return view('livewire.evaluacion.pacc.ver-pacc');
    }
}
