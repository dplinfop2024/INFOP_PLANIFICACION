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
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Registrar POA')]

class RegistrarPoaOperativo extends Component
{
    public PoaAdminForm $poaForm;
    
    public $usuario;
    public $idUsuario = 9;//add
    public $estado = 'nuevo';//add
    public $poa;
    public $componentes;
    public $currentYear; //anio actual
    public $lineasEstrategicas=[];
    public $lineaEstrategiaSeleccionado;
    public $componenteSeleccionado; 
    public $descripcionLineaSeleccionada;
    public $cursos = [
        array('m1'=>0, 'm2'=>0, 'm3'=>0, 'm4'=>0, 'm5'=>0, 'm6'=>0, 'm7'=>0, 'm8'=>0, 'm9'=>0, 'm10'=>0, 'm11'=>0, 'm12'=>0)
    ];
    public $participantes = [
        array('m1'=>'0', 'm2'=>'0', 'm3'=>'0', 'm4'=>'0', 'm5'=>'0', 'm6'=>'0', 'm7'=>'0', 'm8'=>'0', 'm9'=>'0', 'm10'=>'0', 'm11'=>'0', 'm12'=>'0')
    ];
    public $horas = [
        array('m1'=>'0', 'm2'=>'0', 'm3'=>'0', 'm4'=>'0', 'm5'=>'0', 'm6'=>'0', 'm7'=>'0', 'm8'=>'0', 'm9'=>'0', 'm10'=>'0', 'm11'=>'0', 'm12'=>'0')
    ];
    public $listaTotal_curso = [];
    //public $istaTotal_participantes=[];
    //public $istaTotal_horas=[];

    public $activeTabIndex = 0;

    public function mount(){
        //$usuario = User::find(9);
        $this -> poa = new Poa;
        $this -> poa -> id_usuario = 9;
        $this->componentes = Componente::all();
        $this->currentYear = Carbon::now()->year; //para obtener el año actual
        $currentYear = Carbon::now()->year;// Obtiene el año actual
        $nextYear = Carbon::create($currentYear, 1, 1)->addYear()->year;//instancia de Carbon para el año actual y sumar un año
        $this->currentYear = $nextYear;// Asignar el nuevo año 
    }
   
  //  public function updated()
    //{
      //  $this->programacion_curso = array_sum($this->cursos);
     //   $this->programacion_participantes = array_sum($this->participantes);
      //  $this->programacion_horas = array_sum($this->horas);
   // }
    public $listaMetas =[
        ['linea'=>'', 'numLinea'=>'', 'codigo'=> '', 'descripcion'=>'', 'unidadMedida'=>'']
    ];

    //public $listaTotalcurso=[];
    //public $listaTotalparticipacione=[];
    //public $listaTotalhoras=[];
    public function agregarMeta(){
        $this->listaMetas[] = ['linea'=>'', 'numLinea'=>'', 'codigo'=> '', 'descripcion'=>'', 'unidadMedida'=>''];
        
        array_push($this->cursos, array('m1'=>0, 'm2'=>0, 'm3'=>0, 'm4'=>0, 'm5'=>0, 'm6'=>0, 'm7'=>0, 'm8'=>0, 'm9'=>0, 'm10'=>0, 'm11'=>0, 'm12'=>0));
        //array_push($this->participantes, array('m1'=>'0', 'm2'=>'0', 'm3'=>'0', 'm4'=>'0', 'm5'=>'0', 'm6'=>'0', 'm7'=>'0', 'm8'=>'0', 'm9'=>'0', 'm10'=>'0', 'm11'=>'0', 'm12'=>'0'));
        //array_push($this->horas, array('m1'=>'0', 'm2'=>'0', 'm3'=>'0', 'm4'=>'0', 'm5'=>'0', 'm6'=>'0', 'm7'=>'0', 'm8'=>'0', 'm9'=>'0', 'm10'=>'0', 'm11'=>'0', 'm12'=>'0'));
        
        array_push($this->listaTotalcurso, 0);
        //array_push($this->listaTotalHoras, 0);
        //array_push($this->listaTotalParticipantes, 0);

        $this->activeTabIndex = count($this->listaMetas) - 1;
    }
    public function progra_curso($index) { //funcion para sumar la programacion
        $total = 0;
        
        // Suma los valores de los 12 meses
        for ($i = 1; $i <= 12; $i++) {
            $valor = $this->cursos[$index]['m' . $i]; //numero de mes
            $total += is_numeric($valor) ? (float)$valor : 0; //si el valor es null le asigna un 0
        }
    
        // SE ASIGNA EL TOTAL DE LA SUMA DE CADA MES
        $this->listaTotal_curso[$index] = $total;
        //AISGNA EL TOTAL AL CAMPO ANUAL  de la listaMetas
       // $this->listaMetas[$index]['anual'] = $total;
    }
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
        $lineaSeleccionadaId = $this->listaMetas[$index]['numLinea'] ?? null;// Si no existe un valor seleccionado, se asigna 'null'.
        if ($lineaSeleccionadaId) {  // Verifica si se ha seleccionado una línea estratégica.
            $linea = LineaEstrategica::find($lineaSeleccionadaId);// Busca la línea estratégica en la base de datos utilizando su ID.
            $this->descripcionLineaSeleccionada = $linea->descripcion ?? '';
        } else {
            $this->descripcionLineaSeleccionada = '';// Si no se ha seleccionado ninguna línea estratégica, se asigna un string vacío.
        }
    }
    
    public function save(){

        if (!$this->componenteSeleccionado) {
            session()->flash('warning', 'Debe seleccionar un componente antes de registrar.');
            return;
        }

        //iniciando insersion en la base de datos
        DB::beginTransaction();

        //trycatch captura errores durante la insersion en la base
        try { 


            $poa = new Poa();
            $poa->id_usuario = $this->idUsuario;
            $poa->anio = $this->currentYear; 
            $poa->id_componente = $this->componenteSeleccionado; 
            $poa->estado = $this->estado;
            $poa->save();
            $count = 0;

            //$this->dispatch('log', "POA guardado");

            foreach($this->listaMetas as $index => $meta){
            
                $indexMeta = $index + 1; //para mostrar el numero de meta no seleccionada
                if (empty($meta['numLinea'])) {
                    $errorMessage = "Debe seleccionar una línea estratégica para la meta: $indexMeta";
                    session()->flash('warning', $errorMessage);
                    DB::rollBack();
                    return;
                }
                if (empty($meta['codigo'])) {
                    $errorMessage = "Debe ingresar el Código de meta: $indexMeta";
                    session()->flash('warning', $errorMessage);
                    DB::rollBack();
                    return;
                }
                if (empty($meta['descripcion'])) {
                    $errorMessage = "Debe ingresar la Descripción de la meta: $indexMeta";
                    session()->flash('warning', $errorMessage);
                    DB::rollBack();
                    return;
                }
                
                //$this->dispatch('log', "datos validos");
                
                //Guardar meta
                $MetaOperativa = new MetaOperativa();
                $MetaOperativa->id_poa = $poa->id;
                $MetaOperativa->id_linea = $meta['numLinea'];
                $MetaOperativa->descripcion = $meta['descripcion'];
                $MetaOperativa->unidad_medida = $meta['unidadMedida'];
                $MetaOperativa->cursos= 0;
                $MetaOperativa->participantes= 0; 
                $MetaOperativa->horas= 0;
                $MetaOperativa->presupuesto_meta = 0;
                $MetaOperativa->codigo_meta = $meta['codigo'];
                $MetaOperativa->save();

                $this->dispatch('log', $MetaOperativa);
            
                //Guardar programacion cursos

                $programacion_curso = new ProgramacionOperativa;
                $programacion_curso ->id_meta = $MetaOperativa->id;
                $programacion_curso ->tipo = 1; // Tipo 1 para cursos
                $programacion_curso ->ene = $this->cursos[$count]['m1'];
                $programacion_curso ->feb = $this->cursos[$count]['m2'];
                $programacion_curso ->mar = $this->cursos[$count]['m3'];
                $programacion_curso ->abr = $this->cursos[$count]['m4'];
                $programacion_curso ->may = $this->cursos[$count]['m5'];
                $programacion_curso ->jun = $this->cursos[$count]['m6'];
                $programacion_curso ->jul = $this->cursos[$count]['m7'];
                $programacion_curso ->ago = $this->cursos[$count]['m8'];
                $programacion_curso ->sep = $this->cursos[$count]['m9'];
                $programacion_curso ->oct = $this->cursos[$count]['m10'];
                $programacion_curso ->nov = $this->cursos[$count]['m11'];
                $programacion_curso ->dic = $this->cursos[$count]['m12'];
                $programacion_curso->save();

                $this->dispatch('log', $programacion_curso);

                //Guardar programacion participantes

                $programacion_participantes= new ProgramacionOperativa;
                $programacion_participantes->id_meta = $MetaOperativa->id;
                $programacion_participantes->tipo = 2; // Tipo 2 para participantes
                $programacion_participantes->ene = $this->participantes[$count]['m1'];
                $programacion_participantes->feb = $this->participantes[$count]['m2'];
                $programacion_participantes->mar = $this->participantes[$count]['m3'];
                $programacion_participantes->abr = $this->participantes[$count]['m4'];
                $programacion_participantes->may = $this->participantes[$count]['m5'];
                $programacion_participantes->jun = $this->participantes[$count]['m6'];
                $programacion_participantes->jul = $this->participantes[$count]['m7'];
                $programacion_participantes->ago = $this->participantes[$count]['m8'];
                $programacion_participantes->sep = $this->participantes[$count]['m9'];
                $programacion_participantes->oct = $this->participantes[$count]['m10'];
                $programacion_participantes->nov = $this->participantes[$count]['m11'];
                $programacion_participantes->dic = $this->participantes[$count]['m12'];
                $programacion_participantes->save();
                $this->dispatch('log', $programacion_participantes);
            
                //Guardar programacion horas
                $programacion_horas = new ProgramacionOperativa;
                $programacion_horas->id_meta = $MetaOperativa->id;
                $programacion_horas->tipo = 3; // Tipo 3 para horas
                $programacion_horas->ene = $this->horas[$count]['m1'];
                $programacion_horas->feb = $this->horas[$count]['m2'];
                $programacion_horas->mar = $this->horas[$count]['m3'];
                $programacion_horas->abr = $this->horas[$count]['m4'];
                $programacion_horas->may = $this->horas[$count]['m5'];
                $programacion_horas->jun = $this->horas[$count]['m6'];
                $programacion_horas->jul = $this->horas[$count]['m7'];
                $programacion_horas->ago = $this->horas[$count]['m8'];
                $programacion_horas->sep = $this->horas[$count]['m9'];
                $programacion_horas->oct = $this->horas[$count]['m10'];
                $programacion_horas->nov = $this->horas[$count]['m11'];
                $programacion_horas->dic = $this->horas[$count]['m12'];
                //$this->dispatch('log', $programacion_horas);
                $programacion_horas->save();
                $this->dispatch('log', $programacion_horas);

                $count++;
            }

        $this->dispatch('log', 'metas guardadas correctamente'); 
        //si no ocurren errores se guardan los datos en la base
        DB::commit(); 
        $this->dispatch('log', 'POA registrado exitosamente');

        } catch (\Exception $e) {
            //si ocurre un error, se revierten los cambios en la base
            DB::rollBack();
            $this->dispatch('log', $e->getMessage());
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
