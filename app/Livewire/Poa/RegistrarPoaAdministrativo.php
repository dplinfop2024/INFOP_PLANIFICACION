<?php

namespace App\Livewire\Poa;

use App\Livewire\Forms\PoaAdminForm;
use Livewire\Attributes\Title;
use App\Models\Poa;
use App\Models\User;
use App\Models\MetaAdministrativa;
use Livewire\Component;
use App\Models\Componente;
use App\Models\LineaEstrategica;
use Carbon\Carbon;

#[Title('Registrar POA')]

class RegistrarPoaAdministrativo extends Component
{
    
    public PoaAdminForm $poaForm;
    public $componentes;
    public $lineasEstrategicas = [];

    //public $componente = "descripcion componente";
    //public $lineaEstrategica = "descripcion linea estrategica";
    public $idUsuario = 10;
    public $currentYear; //anio actual
    public $componenteSeleccionado;
    public $estado = 'nuevo';
   

    public $activeTabIndex = 0;

    public function mount() {
        $this->componentes = Componente::all();
        //$this->lineas_estrategicas = LineaEstrategica::all();
        $this->currentYear = Carbon::now()->year; //para obtener el año actual
        // Obtiene el año actual
        $currentYear = Carbon::now()->year;
        //instancia de Carbon para el año actual y sumar un año
        $nextYear = Carbon::create($currentYear, 1, 1)->addYear()->year;
        // Asignar el nuevo año 
        $this->currentYear = $nextYear;
    }
   

    
 
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

    //metodo para listar las lineas estrategicas segun el componente seleccionado
    public function actualizarLineasEstrategicas() { 
        if ($this->componenteSeleccionado) {
            $this->lineasEstrategicas = LineaEstrategica::where('id_componente', $this->componenteSeleccionado)->get();
        } else {
            $this->lineasEstrategicas = [];
        }
    }
     // Método que se llama cuando cambia la selección de la línea estratégica y mostrar descripcion
    public function mostrarDescripcionLinea($index)
    {
        // Busca la línea estratégica seleccionada en lineasEstrategicas
        $lineaSeleccionada = collect($this->lineasEstrategicas)
            ->firstWhere('id', $this->listaMetas[$index]['numLinea']);
        // Si se encuentra la línea, actualiza la descripción en listaMetas[$index]['descripcionLinea']
        $this->listaMetas[$index]['descripcionLinea'] = $lineaSeleccionada ? $lineaSeleccionada['descripcion'] : '';
    }

    public function save(){
        $this->dispatch('log', $this->listaMetas);
       /* if (!$this->componenteSeleccionado) {// Verifica si se ha seleccionado un componente antes REGISTAR
            session()->flash('warning', 'Debe seleccionar un componente antes de registrar.');
            return; 
        }
    
        // Crea un nuevo registro en la tabla `poas` 
       $poa = Poa::create([
            'id_usuario' => $this->idUsuario,
            'anio' => $this->currentYear, 
            'id_componente' => $this->componenteSeleccionado, // ID del componente seleccionado
            'estado' => $this->estado, 
        ]);
    
        // Obtiene el ID del nuevo POA creado para RELACIONARLO con las metas administrativas
        $newPoaId = $poa->id;
    
        // Recorre cada meta en la lista de metas
        foreach ($this->listaMetas as $meta) {
            // Verifica que se seleccione el id de numero de linea
            if (empty($meta['numLinea']) || !is_numeric($meta['numLinea'])) {

                $this->dispatch('log', 'Debe SELECIONAR UNA LINEA ESTRATEGICA');
                return; 
            }
    
            // Crea un nuevo registro en la tabla `metas_administrativas` con los datos de cada meta
            MetaAdministrativa::create([
                'id_poa' => $newPoaId, 
                'id_linea' => $meta['numLinea'], 
                'descripcion' => $meta['descripcion'], 
                'unidad_medida' => $meta['unidadMedida'], 
                'programacion_anual' => $meta['anual'], 
                'presupuesto_meta' => 0,
                'codigo_meta' => $meta['codigo'],
            ]);
        }
    
        // Mensaje de éxito para indicar que el POA ha sido registrado correctamente
        session()->flash('success', 'POA registrado exitosamente.');
        $this->dispatch('log', $this->listaMetas);*/
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
