<?php

namespace App\Livewire\Poa;

use App\Livewire\Forms\PoaAdminForm;
use App\Models\Componente;
use App\Models\LineaEstrategica;
use App\Models\Poa;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Registrar POA')]

class RegistrarPoaOperativo extends Component
{
    public PoaAdminForm $poaForm;
    
    public $usuario;
    public $poa;
    public $componentes;
    public $id_componente="";
    public $lineas_estrategicas;
    public $id_linea="";
    public $descripcion_linea;
    public $codigo_meta;
    public $descripcion_meta;
    public $unidad_medida;
    
    public $cursos = [];
    public $participantes = [];
    public $horas = [];

    public $programacion_curso;
    public $programacion_participantes;
    public $programacion_horas;
   
    

    public $activeTabIndex = 0;
    public function updated()
    {
        $this->programacion_curso = array_sum($this->cursos);
        $this->programacion_participantes = array_sum($this->participantes);
        $this->programacion_horas = array_sum($this->horas);
    }

    public function mount(){
        $usuario = User::find(9);
        $this -> poa = new Poa;
        $this -> poa -> id_usuario = 9;
        $this -> poa -> anio=Carbon::now()->year;// Obtener el año actual dinámicamente
        $this -> componentes = Componente::all();
        $this -> lineas_estrategicas = LineaEstrategica::all();
        
       // $this->dispatch('log', $usuario);
       // $this->dispatch('log', $this-> poa);
        //$this->dispatch('log', $this-> componentes);
       // $this->dispatch('log', $this-> lineas_estrategicas);


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
        //$this->dispatch('log', $this->listaMetas);
        dd([
           
            'usuario' =>  $this->poa->id_usuario = 9,
            'poa' => $this->poa,
            'poa'=> $this -> poa -> anio=Carbon::now()->year,
            'id_componente' => $this->id_componente,
            'id_linea' => $this->id_linea,
            'descripcion_linea'=>$this->descripcion_linea,
            'codigo_meta'=>$this->codigo_meta,
            'descripcion_meta' => $this->descripcion_meta,
            'unidad_medida' => $this->unidad_medida,

        'cursos' => $this->cursos,
        'participantes' => $this->participantes,
        'horas' => $this->horas,
        'programacion_curso' => $this->programacion_curso,
        'programacion_participantes' => $this->programacion_participantes,
        'programacion_horas' => $this->programacion_horas,
            
        ]);
        
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
