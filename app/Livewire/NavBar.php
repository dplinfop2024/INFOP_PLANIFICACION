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
        ['opcion'=> 'Registro POA Operativo', 'link'=>'registro.poa.operativo'],
        ['opcion'=> 'Registro POA Administrativo', 'link'=>'registro.poa.administrativo'],
        ['opcion'=> 'Editar POA Operativo', 'link'=>'poa.editar.operativo'],
        ['opcion'=> 'Editar POA administrativo', 'link'=>'poa.editar.administrativo'],
        ['opcion'=> 'Ver POA Ejecución', 'link'=>'poa.ver.operativo'],
        ['opcion'=> 'Ver POA Programación', 'link'=>'poa.ver.administrativo'],
        ['opcion'=> 'Ver Avances POA', 'link'=>'poa.avances.ver.operativo'],
        ['opcion'=> 'Editar Avances POA Operativo', 'link'=>'poa.avances.editar.operativo'],
        ['opcion'=> 'Editar Avances POA Administrativo', 'link'=>'poa.avances.editar.administrativo']
    ];

    public $menuUnidadPresupuesto = [
        ['opcion'=> 'Registrar Presupuesto', 'link'=>'unidad.registro.presupuesto'],
        ['opcion'=> 'Editar Presupuesto', 'link'=>'presupuesto.editar'],
        ['opcion'=> 'Ver Presupuesto', 'link'=>'presupuesto.ver'],
        ['opcion'=> 'Ver Presupuesto en ejecución', 'link'=>'presupuesto.ver']
    ];

    public $menuUnidadPACC = [
        ['opcion'=> 'Registrar PACC', 'link'=>'unidad.registro.pacc'],
        ['opcion'=> 'Editar PACC', 'link'=>'pacc.editar'],
        ['opcion'=> 'Ver PACC', 'link'=>'pacc.ver'],
        ['opcion'=> 'Ver Avances de PACC', 'link'=>'pacc.ver']
    ];

    //--------------------RUTAS PLANIFICACION NAVBAR--------------------//

    public $menuPlanificacionPOA = [
        ['opcion'=> 'Ver Lista POA', 'link'=>'poa.lista']
    ];

    public $menuPlanificacionPresupuesto = [
        ['opcion'=> 'Ver Lista Presupuesto', 'link'=>'presupuesto.lista'] 
    ];

    public $menuPlanificacionPACC = [
        ['opcion'=> 'Ver Lista PACC', 'link'=>'pacc.lista']
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
