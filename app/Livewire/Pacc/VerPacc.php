<?php

namespace App\Livewire\Pacc;

use App\Models\Pacc;
use App\Models\User;
use App\Models\GastoPacc;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Pacc')]
class VerPacc extends Component
{

    public $pacc;
    public $user;
    public $gastopacc;
   
    public function mount (){
         $this->pacc=Pacc::find(1);
         $this->user=User::find($this->pacc->id_usuario);
         $this->gastopacc= GastoPacc::where('id_pacc', $this->pacc->id)->get();
         $this->dispatch('log', $this->gastopacc);
    }
    public function render()
    {
        return view('livewire.pacc.ver-pacc');
    }
}
