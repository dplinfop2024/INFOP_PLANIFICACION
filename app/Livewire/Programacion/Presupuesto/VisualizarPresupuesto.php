<?php

namespace App\Livewire\Programacion\Presupuesto;

use App\Models\GastoPresupuesto;
//Modelo de Presupuesto para BD
use App\Models\Presupuesto;
use App\Models\SubgrupoPresupuesto;
use App\Models\User;
use Livewire\Component;

class VisualizarPresupuesto extends Component
{

    //creando objeto para guardar el presupuesto
    public $presupuesto;
    //creando un objeto para guardar al usuario del presupuesto
    public $usuario;

   //Creando un objeto para guardar los subgrupos fijos en el sistema
    public $subgrupos;
    public $gastospresupuestos;


    //función mount se accederá a  todos los datos de la bd cargarse la pagina
    public function mount(){
        //Buscando el Presupuesto con Id 1 y guardandolo en la objeto $presupuesto
        $this->presupuesto = Presupuesto::find(1);
        //buscando el usuario dueño del presupuesto con id 1
        $this->usuario = User::find($this->presupuesto->id_usuario);

        $this->subgrupos = SubgrupoPresupuesto::all();

        $this->gastospresupuestos = GastoPresupuesto::where("id_presupuesto", 1)->get();
        
        //mostrando usuario en consola
        $this->dispatch('log', $this->subgrupos);
        $this->dispatch('log', $this->gastospresupuestos);
    }
    
    


    public $renglones = array(
        array(
            'grupo'=>'10000', 'descripcion'=>'SERVICIOS PERSONALES', 'valor'=>'40,000.00'
        ),
        array(
            'grupo'=>'14100', 'descripcion'=>'Horas extraordinarias', 'valor'=>'40,000.00'
        ),
        array(
            'grupo'=>'15900', 'descripcion'=>'Otras Asistencias Social al Personal (Clasusula 61', 'valor'=>''
        ),
        array(
            'grupo'=>'20000', 'descripcion'=>'SERVICIOS NO PERSONALES', 'valor'=>'7,175,000.00'
        ),
        array(
            'grupo'=>'21110', 'descripcion'=>'Suministro de energía eléctrica', 'valor'=>'25,000.00'
        ),
        array(
            'grupo'=>'22210', 'descripcion'=>'Alquiler de Equipos de Transporte, tracción y Elevación', 'valor'=>'100,000.00'
        ),
        array(
            'grupo'=>'23100', 'descripcion'=>'Mantenimiento y Reparación de Equipos de Comunciación', 'valor'=>'50,000.00'
        )
   
        );

    public function render()
    {
        return view('livewire.programacion.presupuesto.visualizar-presupuesto', ['renglones' => $this->renglones]);
    }

};