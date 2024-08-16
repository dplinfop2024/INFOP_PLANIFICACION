<?php

namespace App\Livewire\Poa;

use App\Livewire\Forms\PoaAdminForm;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Componente;

#[Title('Registrar POA')]

class RegistrarPoaAdministrativo extends Component
{
    
    public PoaAdminForm $poaForm;
    public $componentes;

    public function mount() {
        $this->componentes = Componente::all();
      //  $this->dispatch('log',$this->componentes);
    }

    public $componente = "descripcion componente";
    public $lineaEstrategica = "descripcion linea estrategica";
    public $activeTabIndex = 0;
    public $listaMetas = array (
        array ('linea'=>'', 'numLinea'=>'', 'codigo'=> '', 'descripcion'=>'', 'unidadMedida'=>'', 
        'm1'=>'0', 'm2'=>'0', 'm3'=>'0', 'm4'=>'0', 'm5'=>'0', 'm6'=>'0', 
        'm7'=>'0', 'm8'=>'0', 'm9'=>'0', 'm10'=>'0', 'm11'=>'0', 'm12'=>'0', 'anual'=>'0')
    );

    public function agregarMeta(){
        array_push($this->listaMetas, array ('linea'=>'', 'numLinea'=>'', 'codigo'=> '', 'descripcion'=>'', 'unidadMedida'=>'', 
                                        'm1'=>'0', 'm2'=>'0', 'm3'=>'0', 'm4'=>'0', 'm5'=>'0', 'm6'=>'0', 
                                        'm7'=>'0', 'm8'=>'0', 'm9'=>'0', 'm10'=>'0', 'm11'=>'0', 'm12'=>'0', 'anual'=>'0'));
        // Actualiza el índice activo
    $this->activeTabIndex = count($this->listaMetas) - 1;
        
    }

    public function save(){
        $this->dispatch('log', $this->listaMetas);
    }

    public function delete($id){
        array_splice($this->listaMetas, $id, 1);
        $this->dispatch('log', "Borrar meta: $id");
    }
    public function render()
    {
        return view('livewire.poa.registrar-poa-administrativo');
    }
}
