<?php

namespace App\Livewire\Poa;

use Illuminate\Support\Facades\DB; // manejo de errores
use App\Livewire\Forms\PoaAdminForm;
use Livewire\Attributes\Title;
use App\Models\Poa;
use App\Models\User;
use App\Models\MetaAdministrativa;
use Livewire\Component;
use App\Models\Componente;
use App\Models\LineaEstrategica;
use App\Models\ProgramacionAdministrativa;
use Carbon\Carbon;

#[Title('Registrar POA')]
class RegistrarPoaAdministrativo extends Component
{
    public PoaAdminForm $poaForm;
    public $componentes;
    public $lineasEstrategicas = [];
    public $idUsuario = 10;
    public $currentYear; // Año actual
    public $componenteSeleccionado;
    public $estado = 'nuevo';
    public $listaTotalAnual = []; //total para la suma de la programacion
    public $activeTabIndex = 0;

    public function mount() {
        //$this->componentes = Componente::all();
        $this->componentes = Componente::orderBy('numero', 'asc')->get();

        $this->currentYear = Carbon::now()->year;
        $nextYear = Carbon::create($this->currentYear, 1, 1)->addYear()->year;
        $this->currentYear = $nextYear;
        array_push($this->listaTotalAnual, 0);
    }

    public $listaMetas = [
        ['linea' => '', 'numLinea' => '', 'codigo' => '', 'descripcion' => '', 'unidadMedida' => '', 
        'm1' => 0 , 'm2' => 0, 'm3' => 0, 'm4' => 0, 'm5' => 0, 'm6' => 0, 
        'm7' => 0, 'm8' => 0, 'm9' => 0, 'm10' => 0, 'm11' => 0, 'm12' => 0, 'anual' => '0']
    ];

    

    public function agregarMeta(){
        $this->listaMetas[] = [
            'linea' => '', 'numLinea' => '', 'codigo' => '', 'descripcion' => '', 'unidadMedida' => '', 
            'm1' => 0 , 'm2' => 0, 'm3' => 0, 'm4' => 0, 'm5' => 0, 'm6' => 0, 
            'm7' => 0, 'm8' => 0, 'm9' => 0, 'm10' => 0, 'm11' => 0, 'm12' => 0, 'anual' => '0'
        ];
        array_push($this->listaTotalAnual, 0);
        $this->activeTabIndex = count($this->listaMetas) - 1;
    }



    public function actualizarLineasEstrategicas() { 
        if ($this->componenteSeleccionado) {
            $this->lineasEstrategicas = LineaEstrategica::where('id_componente', $this->componenteSeleccionado)->orderby('numero', 'asc')->get();

        } else {
            $this->lineasEstrategicas = [];
        }
    }

    public function programacionAnual($index) { //funcion para sumar la programacion
        $total = 0;
        
        // Suma los valores de los 12 meses
        for ($i = 1; $i <= 12; $i++) {
            $valor = $this->listaMetas[$index]['m' . $i]; //numero de mes
            $total += is_numeric($valor) ? (float)$valor : 0; //si el valor es null le asigna un 0
        }
    
        // SE ASIGNA EL TOTAL DE LA SUMA DE CADA MES
        $this->listaTotalAnual[$index] = $total;
        //AISGNA EL TOTAL AL CAMPO ANUAL  de la listaMetas
        $this->listaMetas[$index]['anual'] = $total;
    }
    
    public function mostrarDescripcionLinea($index)
    {
        $lineaSeleccionada = collect($this->lineasEstrategicas)
            ->firstWhere('id', $this->listaMetas[$index]['numLinea']);
        $this->listaMetas[$index]['descripcionLinea'] = $lineaSeleccionada ? $lineaSeleccionada['descripcion'] : '';
    }

    public function save() {
       // $this->dispatch('log', $this->listaMetas);
        
        if (!$this->componenteSeleccionado) {
            session()->flash('warning', 'Debe seleccionar un componente antes de registrar.');
            return;
        }
    
        DB::beginTransaction();
        try { 
            $poa = new Poa();
            $poa->id_usuario = $this->idUsuario;
            $poa->anio = $this->currentYear; 
            $poa->id_componente = $this->componenteSeleccionado; 
            $poa->estado = $this->estado;
            $poa->save();

            foreach ($this->listaMetas as $index => $meta) {
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
                if (empty($meta['unidadMedida'])) {
                    $errorMessage = "Debe ingresar la unidad de medida de la meta: $indexMeta";
                    session()->flash('warning', $errorMessage);
                    DB::rollBack();
                    return;
                }
                

                $metaAdministrativa = new MetaAdministrativa();
                $metaAdministrativa->id_poa = $poa->id;
                $metaAdministrativa->id_linea = $meta['numLinea'];
                $metaAdministrativa->descripcion = $meta['descripcion'];
                $metaAdministrativa->unidad_medida = $meta['unidadMedida'];
                $metaAdministrativa->programacion_anual = $meta['anual'];
                $metaAdministrativa->presupuesto_meta = 0;
                $metaAdministrativa->codigo_meta = $meta['codigo'];
                $metaAdministrativa->save();//guarda las metas administrativas

                $programacion = new ProgramacionAdministrativa();
                $programacion->id_meta = $metaAdministrativa->id; //id de la meta registrada
                $programacion->ene = (int)($meta['m1'] ?? 0);
                $programacion->feb = (int)($meta['m2'] ?? 0);
                $programacion->mar = (int)($meta['m3'] ?? 0);
                $programacion->abr = (int)($meta['m4'] ?? 0);
                $programacion->may = (int)($meta['m5'] ?? 0);
                $programacion->jun = (int)($meta['m6'] ?? 0);
                $programacion->jul = (int)($meta['m7'] ?? 0);
                $programacion->ago = (int)($meta['m8'] ?? 0);
                $programacion->sep = (int)($meta['m9'] ?? 0);
                $programacion->oct = (int)($meta['m10'] ?? 0);
                $programacion->nov = (int)($meta['m11'] ?? 0);
                $programacion->dic = (int)($meta['m12'] ?? 0);
                $programacion->save(); //guarda la programacion
            }

            DB::commit(); //realiza el commit en la BD
            session()->flash('success', 'POA registrado exitosamente.');
        } catch (\Exception $e) {
            DB::rollBack(); //Log::error("Error en RegistrarPoaAdministrativo: " . $e->getMessage());
            session()->flash('error', 'Ocurrió un error al registrar el POA '); 
        
        }
    }

    public function delete($id){
        array_splice($this->listaMetas, $id, 1);
        array_splice($this->listaTotalAnual, $id, 1);
       $this->activeTabIndex = 0; //al eliminar metas redirige a las pestaña de meta 1
    }

    public function render()
    {
        return view('livewire.poa.registrar-poa-administrativo');
    }
}
