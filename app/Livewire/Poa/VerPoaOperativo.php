<?php

namespace App\Livewire\Poa;


use App\Models\Cargo;
use App\Models\Componente;
use App\Models\MetaOperativa;
use App\Models\Poa;
use Illuminate\Support\Facades\DB;
use App\Models\User;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('POA')]
class VerPoaOperativo extends Component
{public $poa;
    public $componente;
    public $user;
    public $cargo;
    public $metas;
    public $programacion;

    public $programacion_curso;
    public $programacion_horas;
    public $programacion_participantes;

    public $verificador_Unidad_Medidad =null;

  


    public $meses_horas = array(
    );
    public $meses_cursos = array(
    );public $meses_participantes = array(
    );
    public $index = 0;

    public function mount(){



        
    
       
        /*

        //Prueba Joins Eloquent

        $prueba = DB::table('poas')
                ->join('metas_administrativas', 'poas.id', '=', 'metas_administrativas.id_poa')
                ->join('programaciones_administrativas', 'metas_administrativas.id', '=', 'programaciones_administrativas.id_meta')
                ->where('poas.id', '=', 4)->get();

        $this->dispatch('log', $prueba);
*/
        //Pruebas Joins Eloquent

        $this->poa = Poa::find(5);
        $this->user = User::find($this->poa->id_usuario);
        $this->cargo = Cargo::find($this->user->id_cargo);
        $this->componente = Componente::find($this->poa->id_componente);
        $this->metas = new MetaOperativa;
        $this->metas = MetaOperativa::where('id_poa', $this->poa->id)->orderBy('codigo_meta')->get();


        $this->cargar_programacion_cursos();

        $this->cargar_programacion_horas();
        
        $this->cargar_programacion_participantes();
        
        //$this->dispatch('log', $this->poa);
        //$this->dispatch('log', $this->user);
        //$this->dispatch('log', $this->cargo);
        //$this->dispatch('log', $this->meses);

        
    }

    

    public function cargar_programacion_cursos(){
        foreach($this->metas as $meta){
            $index = 0;
            $programacion = $meta->programacion_Op();
            $nueva_programacion = array ('1'=>0, '2'=>0, '3'=>0, '4'=>0, '5'=>0, '6'=>0, '7'=>0, '8'=>0, '9'=>0, '10'=>0, '11'=>0, '12'=>0);
            foreach($nueva_programacion as $mes){
                $index++;
                foreach($programacion as $progra){
                    if($progra->mes == $index){
                        $this->dispatch('log', $index);
                        $nueva_programacion[$index]=$progra->cursos;
                    }
                }
            }
            array_push($this->meses_cursos, $nueva_programacion);
        }
    }

    public function cargar_programacion_horas(){
        foreach($this->metas as $meta){
            $index = 0;
            $programacion = $meta->programacion_Op();
            $nueva_programacion = array ('1'=>0, '2'=>0, '3'=>0, '4'=>0, '5'=>0, '6'=>0, '7'=>0, '8'=>0, '9'=>0, '10'=>0, '11'=>0, '12'=>0);
            foreach($nueva_programacion as $mes){
                $index++;
                foreach($programacion as $progra){
                    if($progra->mes == $index){
                        $this->dispatch('log', $index);
                        $nueva_programacion[$index]=$progra->horas;
                    }
                }
            }
            array_push($this->meses_horas, $nueva_programacion);
        }
    }

    public function cargar_programacion_participantes(){
        foreach($this->metas as $meta){
            $index = 0;
            $programacion = $meta->programacion_Op();
            $nueva_programacion = array ('1'=>0, '2'=>0, '3'=>0, '4'=>0, '5'=>0, '6'=>0, '7'=>0, '8'=>0, '9'=>0, '10'=>0, '11'=>0, '12'=>0);
            foreach($nueva_programacion as $mes){
                $index++;
                foreach($programacion as $progra){
                    if($progra->mes == $index){
                        $this->dispatch('log', $index);
                        $nueva_programacion[$index]=$progra->participantes;
                    }
                }
            }
            array_push($this->meses_participantes, $nueva_programacion);
        }
    }
    public function render()
    {
        return view('livewire.poa.ver-poa-operativo');
    }
}
