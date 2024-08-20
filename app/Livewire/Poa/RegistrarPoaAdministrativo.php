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
    public $activeTabIndex = 0;

    public function mount() {
        $this->componentes = Componente::all();
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

    public $listaTotalAnual = [];

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
            $this->lineasEstrategicas = LineaEstrategica::where('id_componente', $this->componenteSeleccionado)->get();
        } else {
            $this->lineasEstrategicas = [];
        }
    }

    public function programacionAnual($index){
        $total = 0;
        $total = $this->listaMetas[$index]['m1']+$this->listaMetas[$index]['m2']
        +$this->listaMetas[$index]['m3']+$this->listaMetas[$index]['m4']
        +$this->listaMetas[$index]['m5']+$this->listaMetas[$index]['m6']
        +$this->listaMetas[$index]['m7']+$this->listaMetas[$index]['m8']
        +$this->listaMetas[$index]['m9']+$this->listaMetas[$index]['m10']
        +$this->listaMetas[$index]['m11']+$this->listaMetas[$index]['m12'];
        //dd($total);
        $this->listaTotalAnual[$index]=$total;
    }

    public function mostrarDescripcionLinea($index)
    {
        $lineaSeleccionada = collect($this->lineasEstrategicas)
            ->firstWhere('id', $this->listaMetas[$index]['numLinea']);
        $this->listaMetas[$index]['descripcionLinea'] = $lineaSeleccionada ? $lineaSeleccionada['descripcion'] : '';
    }

    public function save() {

        
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
                $programacion->ene = $meta['m1'];
                $programacion->feb = $meta['m2'];
                $programacion->mar = $meta['m3'];
                $programacion->abr = $meta['m4'];
                $programacion->may = $meta['m5'];
                $programacion->jun = $meta['m6'];
                $programacion->jul = $meta['m7'];
                $programacion->ago = $meta['m8'];
                $programacion->sep = $meta['m9'];
                $programacion->oct = $meta['m10'];
                $programacion->nov = $meta['m11'];
                $programacion->dic = $meta['m12'];
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
        $this->dispatch('log', "Borrar meta: $id");
    }

    public function render()
    {
        return view('livewire.poa.registrar-poa-administrativo');
    }
}
