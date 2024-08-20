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
    public $currentYear; //anio actual
    public $lineasEstrategicas=[];

    public $componenteSeleccionado; 
    //public $descripcion_linea;
   
    public $descripcionLineaSeleccionada;
    public $unidad_medida;
     public $codigo_meta;
      public $descripcion;
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

    public function actualizarLineasEstrategicas() { //funcion para listar las lineas estrategicas segun el componente seleccionado
        if ($this->componenteSeleccionado) {
            $this->lineasEstrategicas = LineaEstrategica::where('id_componente', $this->componenteSeleccionado)->get();
        } else {
            $this->lineasEstrategicas = [];
        }
    }
    public function actualizarDescripcionLinea($index)
    {
        // Obtiene el ID de la línea estratégica seleccionada desde el array 'listaMetas' en la posición '$index'.
        // Si no existe un valor seleccionado, se asigna 'null'.
        $lineaSeleccionadaId = $this->listaMetas[$index]['numLinea'] ?? null;
    
        // Verifica si se ha seleccionado una línea estratégica.
        if ($lineaSeleccionadaId) {
            // Busca la línea estratégica en la base de datos utilizando su ID.
            $linea = LineaEstrategica::find($lineaSeleccionadaId);
        
            // Si se encuentra la línea estratégica, asigna su descripción a la propiedad 'descripcionLineaSeleccionada'.
            // Si no se encuentra la línea o no tiene descripción, se asigna un string vacío.
            $this->descripcionLineaSeleccionada = $linea->descripcion ?? '';
        } else {
            // Si no se ha seleccionado ninguna línea estratégica, se asigna un string vacío a la propiedad 'descripcionLineaSeleccionada'.
            $this->descripcionLineaSeleccionada = '';
        }
    }
    
    public function mount(){
        $usuario = User::find(9);
        $this -> poa = new Poa;
        $this -> poa -> id_usuario = 9;
        $this->componentes = Componente::all();
        $this->currentYear = Carbon::now()->year; //para obtener el año actual
        // Obtiene el año actual
        $currentYear = Carbon::now()->year;
        //instancia de Carbon para el año actual y sumar un año
        $nextYear = Carbon::create($currentYear, 1, 1)->addYear()->year;
        // Asignar el nuevo año 
        $this->currentYear = $nextYear;
        $this->lineasEstrategicas =null;
       
        //$this -> lineasEstrategicas = LineaEstrategica::all();
        
       // $this->dispatch('log', $usuario);
       // $this->dispatch('log', $this-> poa);
        //$this->dispatch('log', $this-> componentes);
       // $this->dispatch('log', $this-> lineas_estrategicas);


    }
   
    public function updated()
    {
        $this->programacion_curso = array_sum($this->cursos);
        $this->programacion_participantes = array_sum($this->participantes);
        $this->programacion_horas = array_sum($this->horas);
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
        $this->dispatch('log', $this->lineaEstrategiaSeleccionada);
        if (!$this->componenteSeleccionado) {// Verifica si se ha seleccionado un componente antes REGISTAR
            session()->flash('warning', 'Debe seleccionar un componente antes de registrar.');
            return; 
        }
        dd([
           
            'usuario' =>  $this->poa->id_usuario = 9,
            'poa' => $this->poa,
            'poa'=> $this -> poa-> currentYear = Carbon::now()->year,
            'componenteSeleccionado' => $this->componenteSeleccionado,
            'lineasEstrategicas'=>$this->lineasEstrategicas,
            'descripcionLineaSeleccionada'=>$this->descripcionLineaSeleccionada,
            'codigo_meta'=>$this->codigo_meta,
            'descripcion' => $this->descripcion,
            'unidad_medida' => $this->unidad_medida,

            'cursos' => $this->cursos,
            'participantes' => $this->participantes,
            'horas' => $this->horas,
            'programacion_curso' => $this->programacion_curso,
            'programacion_participantes' => $this->programacion_participantes,
            'programacion_horas' => $this->programacion_horas, 
        
            
        ]);

        //guardar poa
        $count = 0;
        foreach($this->listaMetas as $meta){
            //guardar meta
            //$meta = new MetaOperativa;

            //guardar programacion cursos

            //$progra_cursos = new ProgramacionOperativa;
            //$progra_cursos->id_meta = $meta->id;
            //$progra_cursos->tipo = 1;
            //$progra_cursos->ene = $this->cursos[$count]->m1;
            //$progra_cursos->feb = $this->cursos[$count]]->m2;
            //$progra_cursos->mar = $this->cursos[$count]]->m3;
            //$progra_cursos->abr = $this->cursos[$count]]->m4;
            //$progra_cursos->may = $this->cursos[$count]]->m5;
            //$progra_cursos->jun = $this->cursos[$count]]->m6;
            //$progra_cursos->jul = $this->cursos[$count]]->m7;
            //$progra_cursos->ago = $this->cursos[$count]]->m8;
            //$progra_cursos->sep = $this->cursos[$count]]->m9;
            //$progra_cursos->oct = $this->cursos[$count]]->m10;
            //$progra_cursos->nov = $this->cursos[$count]]->m11;
            //$progra_cursos->dic = $this->cursos[$count]]->m12;
            //$progra_cursos.save();

            //guardar programacion participantes

            //$progra_participantes = new ProgramacionOperativa;
            //$progra_participantes->id_meta = $meta->id;
            //$progra_participantes->tipo = 2;
            //$progra_participantes->ene = $this->cursos[$count]->m1;
            //$progra_participantes->feb = $this->cursos[$count]]->m2;
            //$progra_participantes->mar = $this->cursos[$count]]->m3;
            //$progra_participantes->abr = $this->cursos[$count]]->m4;
            //$progra_participantes->may = $this->cursos[$count]]->m5;
            //$progra_participantes->jun = $this->cursos[$count]]->m6;
            //$progra_participantes->jul = $this->cursos[$count]]->m7;
            //$progra_participantes->ago = $this->cursos[$count]]->m8;
            //$progra_participantes->sep = $this->cursos[$count]]->m9;
            //$progra_participantes->oct = $this->cursos[$count]]->m10;
            //$progra_participantes->nov = $this->cursos[$count]]->m11;
            //$progra_participantes->dic = $this->cursos[$count]]->m12;
            //$progra_participantes.save();
            
            //guardar programacion horas
            
            //$progra_horas = new ProgramacionOperativa;
            //$progra_horas->id_meta = $meta->id;
            //$progra_horas->tipo = 2;
            //$progra_horas->ene = $this->cursos[$count]->m1;
            //$progra_horas->feb = $this->cursos[$count]]->m2;
            //$progra_horas->mar = $this->cursos[$count]]->m3;
            //$progra_horas->abr = $this->cursos[$count]]->m4;
            //$progra_horas->may = $this->cursos[$count]]->m5;
            //$progra_horas->jun = $this->cursos[$count]]->m6;
            //$progra_horas->jul = $this->cursos[$count]]->m7;
            //$progra_horas->ago = $this->cursos[$count]]->m8;
            //$progra_horas->sep = $this->cursos[$count]]->m9;
            //$progra_horas->oct = $this->cursos[$count]]->m10;
            //$progra_horas->nov = $this->cursos[$count]]->m11;
            //$progra_horas->dic = $this->cursos[$count]]->m12;
            //$progra_participantes.save();
            


            //$count++;
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
