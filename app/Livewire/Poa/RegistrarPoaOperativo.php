<?php

namespace App\Livewire\Poa;

use App\Livewire\Forms\PoaAdminForm;
use App\Models\Componente;
use App\Models\LineaEstrategica;
use App\Models\MetaOperativa;
use App\Models\Poa;
use App\Models\ProgramacionOperativa;
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
    
    public $cursos = [
        array('m1'=>'0', 'm2'=>'0', 'm3'=>'0', 'm4'=>'0', 'm5'=>'0', 'm6'=>'0', 'm7'=>'0', 'm8'=>'0', 'm9'=>'0', 'm10'=>'0', 'm11'=>'0', 'm12'=>'0')
    ];
    public $participantes = [
        array('m1'=>'0', 'm2'=>'0', 'm3'=>'0', 'm4'=>'0', 'm5'=>'0', 'm6'=>'0', 'm7'=>'0', 'm8'=>'0', 'm9'=>'0', 'm10'=>'0', 'm11'=>'0', 'm12'=>'0')
    ];
    public $horas = [
        array('m1'=>'0', 'm2'=>'0', 'm3'=>'0', 'm4'=>'0', 'm5'=>'0', 'm6'=>'0', 'm7'=>'0', 'm8'=>'0', 'm9'=>'0', 'm10'=>'0', 'm11'=>'0', 'm12'=>'0')
    ];

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
        array ('linea'=>'', 'numLinea'=>'', 'codigo'=> '', 'descripcion'=>'', 'unidadMedida'=>'')
    );

    public function agregarMeta(){
        array_push($this->listaMetas, array ('linea'=>'', 'numLinea'=>'', 'codigo'=> '', 'descripcion'=>'', 'unidadMedida'=>''));
        array_push($this->cursos, array('m1'=>'0', 'm2'=>'0', 'm3'=>'0', 'm4'=>'0', 'm5'=>'0', 'm6'=>'0', 'm7'=>'0', 'm8'=>'0', 'm9'=>'0', 'm10'=>'0', 'm11'=>'0', 'm12'=>'0'));
        array_push($this->participantes, array('m1'=>'0', 'm2'=>'0', 'm3'=>'0', 'm4'=>'0', 'm5'=>'0', 'm6'=>'0', 'm7'=>'0', 'm8'=>'0', 'm9'=>'0', 'm10'=>'0', 'm11'=>'0', 'm12'=>'0'));
        array_push($this->horas, array('m1'=>'0', 'm2'=>'0', 'm3'=>'0', 'm4'=>'0', 'm5'=>'0', 'm6'=>'0', 'm7'=>'0', 'm8'=>'0', 'm9'=>'0', 'm10'=>'0', 'm11'=>'0', 'm12'=>'0'));
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

        //guardar poa

        foreach($this->listaMetas as $meta){
            //guardar meta
            //$meta = new MetaOperativa;

            //guardar programacion cursos
            //$progra_cursos = new ProgramacionOperativa;
            //$progra_cursos->id_meta = $meta->id;
            //$progra_cursos->tipo = 1;
            //$progra_cursos->ene = 

            //guardar programacion participantes

            //guardar programacion horas
        }
        
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
