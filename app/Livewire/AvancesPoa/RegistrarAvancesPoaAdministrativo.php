<?php

namespace App\Livewire\AvancesPoa;
use App\Models\Cargo;

use App\Models\ProgramacionAdministrativa;
use App\Models\Componente;
use App\Models\MetaAdministrativa;
use App\Models\Poa;
use Illuminate\Support\Facades\DB;
use App\Models\User;

use Livewire\Attributes\Title;
use Livewire\Component;


class RegistrarAvancesPoaAdministrativo extends Component
{
     //id poa = 4
     public $poa;
     public $componente;
     public $user;
     public $cargo;
     public $metas;
     public $programacion;
 
     public $meses = array(
     );
 
     public $index = 0;
 
     public function mount(){
 
         //Prueba Joins Eloquent
 
         $prueba = DB::table('poas')
                 ->join('metas_administrativas', 'poas.id', '=', 'metas_administrativas.id_poa')
                 ->join('programaciones_administrativas', 'metas_administrativas.id', '=', 'programaciones_administrativas.id_meta')
                 ->where('poas.id', '=', 4)->get();
 
         $this->dispatch('log', $prueba);
 
         //Pruebas Joins Eloquent
 
         $this->poa = Poa::find(4);
         $this->user = User::find($this->poa->id_usuario);
         $this->cargo = Cargo::find($this->user->id_cargo);
         $this->componente = Componente::find($this->poa->id_componente);
         $this->metas = new MetaAdministrativa;
         $this->metas = MetaAdministrativa::where('id_poa', $this->poa->id)->orderBy('codigo_meta')->get();
 
 
    
     }
 
    
 
         public $poas;
 
    public function render()
    {
        return view('livewire.avances-poa.registrar-avances-poa-administrativo');
    }
}
