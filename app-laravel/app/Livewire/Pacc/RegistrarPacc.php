<?php

namespace App\Livewire\Pacc;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Livewire\Forms\PaccAdminForm;


#[Title('Ver POA')]
class RegistrarPacc extends Component
{

    public PaccAdminForm $paccForm;
    public $listaPresupuesto = array (
        array ('linea'=>'0', 'RenPres'=>'', 'descripcionC'=> '', 'unidad'=>'', 'MonEstCompra'=>'', 
        'FechaRecep'=>'0')
    );

    public function agregarPres(){
        array_push($this->listaPresupuesto, array ('linea'=>'0', 'RenPres'=>'', 'descripcionC'=> '', 'unidad'=>'', 'MonEstCompra'=>'', 
        'FechaRecep'=>'0'));
        
        
    }
    public function save(){
        $this->dispatch('log', $this->listaPresupuesto);


    }

    public function delete($id){
        array_splice($this->listaPresupuesto, $id, 1);
        $this->dispatch('log', "Borrar presupuesto: $id");
    }


    

    public function render()
    {
        return view('livewire.planificacion.poa.ver-poa');
    }
}
