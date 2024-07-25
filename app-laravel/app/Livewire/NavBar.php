<?php

namespace App\Livewire;

use Livewire\Component;

class NavBar extends Component
{

    public $tipoUsuario = '';
    //variable que define si la barra se oculta o no
    public $hidden = '';


    //--------------------RUTAS UNIDAD NAVBAR--------------------//

    public $menuUnidadPOA = [
        ['opcion'=> 'Registro POA', 'link'=>'registro.poa'],
        ['opcion'=> 'Editar POA', 'link'=>'unidad.editarpoa'],
        ['opcion'=> 'Ver POA Ejecución', 'link'=>'unidad.poa'],
        ['opcion'=> 'Ver POA Programación', 'link'=>'unidad.poa'],
        ['opcion'=> 'Ver Avances POA', 'link'=>'unidad.home'],
        ['opcion'=> 'Editar Avances POA', 'link'=>'unidad.home']
    ];

    public $menuUnidadPresupuesto = [
        ['opcion'=> 'Registrar Presupuesto', 'link'=>'registro.presupuesto'],
        ['opcion'=> 'Editar Presupuesto', 'link'=>'unidad.presupuesto'],
        ['opcion'=> 'Ver Presupuesto', 'link'=>'unidad.presupuesto'],
        ['opcion'=> 'Ver Presupuesto en ejecución', 'link'=>'unidad.presupuesto']
    ];

    public $menuUnidadPACC = [
        ['opcion'=> 'Registrar PACC', 'link'=>'registro.pacc'],
        ['opcion'=> 'Editar PACC', 'link'=>'unidad.pacc'],
        ['opcion'=> 'Ver PACC', 'link'=>'unidad.pacc'],
        ['opcion'=> 'Ver Avances de PACC', 'link'=>'unidad.pacc'],
        ['opcion'=> 'Editar Avances de PACC', 'link'=>'unidad.pacc']
    ];

    //--------------------RUTAS PLANIFICACION NAVBAR--------------------//

    public $menuPlanificacionPOA = [
        ['opcion'=> 'Ver POA', 'link'=>'planificacion.verpoa'],
        ['opcion'=> 'Editar POA', 'link'=>'planificacion.editarpoa'],
        ['opcion'=> 'Ver Avances POA', 'link'=>'planificacion.veravancespoa']
    ];

    public $menuPlanificacionPresupuesto = [
        ['opcion'=> 'Ver Presupuesto', 'link'=>'planificacion.verpresupuesto'] 
    ];

    public $menuPlanificacionPACC = [
        ['opcion'=> 'Ver PACC', 'link'=>'planificacion.verpacc'],
        ['opcion'=> 'Ver Avances de PACC', 'link'=>'planificacion.veravancespacc']
    ];

    //--------------------RUTAS PROVEEDURIA NAVBAR--------------------//

    public $menuProveduriaPACC = [
        ['opcion'=> 'Ver PACC', 'link'=>'planificacion.verpacc'],
    ];




    //funcion que se llama al cargar la pagina
    public function mount(){
        //verifica si existe un usuario en la sesion
        $this->tipoUsuario = session('tipoUsuario');
        //si no existe el usuario la barra se ocultara
        if($this->tipoUsuario == ''){
            $this->hidden = 'hidden';
        }
    }

    //cerrar sesion para usuario
    public function logout(){
        //borra el usuario de la sesion
        session(['tipoUsuario' => '']);
        //redirige a la pagina de home
        return redirect()->route('welcome');
    }

    public function render()
    {
        return view('livewire.nav-bar');
    }
}
