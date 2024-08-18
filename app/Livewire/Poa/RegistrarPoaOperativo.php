<?php

namespace App\Livewire\Poa;

use App\Livewire\Forms\PoaAdminForm;
use App\Models\Componente;
use App\Models\LineaEstrategica;
use App\Models\Poa;
use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Registrar POA')]

class RegistrarPoaOperativo extends Component
{
    public PoaAdminForm $poaForm;
    
    public $usuario;
    public $poa;
    public $componentes;
    public $lineas_estrategicas;
    public $descripcion;
    public $activeTabIndex = 0;

    public function mount(){
        $usuario = User::find(9);
        $this -> poa = new Poa;
        $this -> poa -> id_usuario = 9;
        $this -> poa -> anio ="2025";
        $this -> componentes = Componente::all();
        $this -> lineas_estrategicas = LineaEstrategica::all();

        $this->dispatch('log', $usuario);
        $this->dispatch('log', $this-> poa);
        $this->dispatch('log', $this-> componentes);
        $this->dispatch('log', $this-> lineas_estrategicas);


    }

    public $listaMetas = array (
        array ('linea'=>'', 'numLinea'=>'', 'codigo'=> '', 'descripcion'=>'', 'unidadMedida'=>'', 
        'h1'=>'0', 'h2'=>'0', 'h3'=>'0', 'h4'=>'0', 'h5'=>'0', 'h6'=>'0', 'h7'=>'0', 'h8'=>'0', 'h9'=>'0', 'h10'=>'0', 'h11'=>'0', 'h12'=>'0', 'hanual'=>'0',
        'c1'=>'0', 'c2'=>'0', 'c3'=>'0', 'c4'=>'0', 'c5'=>'0', 'c6'=>'0', 'c7'=>'0', 'c8'=>'0', 'c9'=>'0', 'c10'=>'0', 'c11'=>'0', 'c12'=>'0', 'canual'=>'0',
        'p1'=>'0', 'p2'=>'0', 'p3'=>'0', 'p4'=>'0', 'p5'=>'0', 'p6'=>'0', 'p7'=>'0', 'p8'=>'0', 'p9'=>'0', 'p10'=>'0', 'p11'=>'0', 'p12'=>'0', 'panual'=>'0')
    );

    public function agregarMeta(){
        array_push($this->listaMetas, array ('linea'=>'', 'numLinea'=>'', 'codigo'=> '', 'descripcion'=>'', 'unidadMedida'=>'', 
        'h1'=>'0', 'h2'=>'0', 'h3'=>'0', 'h4'=>'0', 'h5'=>'0', 'h6'=>'0', 'h7'=>'0', 'h8'=>'0', 'h9'=>'0', 'h10'=>'0', 'h11'=>'0', 'h12'=>'0', 'hanual'=>'0',
        'c1'=>'0', 'c2'=>'0', 'c3'=>'0', 'c4'=>'0', 'c5'=>'0', 'c6'=>'0', 'c7'=>'0', 'c8'=>'0', 'c9'=>'0', 'c10'=>'0', 'c11'=>'0', 'c12'=>'0', 'canual'=>'0',
        'p1'=>'0', 'p2'=>'0', 'p3'=>'0', 'p4'=>'0', 'p5'=>'0', 'p6'=>'0', 'p7'=>'0', 'p8'=>'0', 'p9'=>'0', 'p10'=>'0', 'p11'=>'0', 'p12'=>'0', 'panual'=>'0'));  
        
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
        return view('livewire.poa.registrar-poa-operativo');
    }
}
