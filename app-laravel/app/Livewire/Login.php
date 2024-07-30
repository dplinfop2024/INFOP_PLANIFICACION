<?php

namespace App\Livewire;

use App\Models\MetaAdministrativa;
use App\Models\Poa;
use App\Models\ProgramacionAdministrativa;
use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Iniciar Sesion')]

class Login extends Component
{

    public $usuario;

    //funcion que se llama al cargar la pagina
    public function mount(){
        /*Pruebas usuarios base

        $user = new User;

        $user->id_unidad = 1600;
        $user->id_tipo_usuario = 5;
        $user->id_tipo_unidad = 1;
        $user->nombre_unidad = 'Departamento Planificacion';
        $user->nombre = 'prueba';
        $user->id_cargo = 1;
        $user->password = '12345';
        $user->email = 'prueba@planificacion.com';

        $user->save();

        Pruebas usuarios base*/

        /*prueba ver usuario base
        $user = User::where('id_unidad' , '1200')->get();
        $this->dispatch('log', $user);
        prueba ver usuario base*/

        /*Pruebas POA

        $poa = new Poa;

        $poa->id_usuario = 9;
        $poa->anio = '2025';
        $poa->id_componente = 1;
        $poa->aceptado = 0;
        $poa->aprobado = 0;

        $poa->save();

        //Pruebas POA*/

        /*crear metas administrativas
        $meta1 = new MetaAdministrativa;
        $meta1->id_poa = 4;
        $meta1->id_linea = 8;
        $meta1->descripcion = 'Ajustes realizados en la reprogramacion y cuadros de salida Plan Operativo Anual, asi como modificacion de Cadena de Valor y Plataforma SIAFI ejercicio fiscal 2024 e ingresados al sistema';
        $meta1->unidad_medida = 'Metas Revisadas y Entregadas';
        $meta1->numero = 1;
        $meta1->programacion_anual = 1;

        $meta1->save();
        //crear administrativas*/

        /*Pruebas metas

        $programacion1 = new ProgramacionAdministrativa;

        $programacion1->id_meta = 7;
        $programacion1->mes = 1;
        $programacion1->programacion = 1;
        $programacion1->save();

        //pruebas metas*/

        //verifica si hay una sesion con un usuario activo
        $tipoUsuario = session('tipoUsuario');
        //si existe un usuario, lo redirije a su seccion correspondiente
        if($tipoUsuario == 'Unidad'){
            return redirect()->route('unidad.home');
        }else if($tipoUsuario == 'Programacion'){
            return redirect()->route('programacion.home');
        }else if ($tipoUsuario =='Planificacion') {
            return redirect()->route('planificacion.home');
        }else if ($tipoUsuario =='Proveduria') {
            return redirect()->route('proveduria.home');
        }else if ($tipoUsuario =='Evaluacion') {
            return redirect()->route('evaluacion.home');
        } 
    }

    public function login($tipoUsuario){
        //guarda el tipo de usuario en la sesion
        session(['tipoUsuario' => $tipoUsuario]);
        //redirige a la seccion correspondiente
        if($tipoUsuario == 'Unidad'){
            return redirect()->route('unidad.home');
        }else if($tipoUsuario == 'Programacion'){
            return redirect()->route('programacion.home');
        }else if ($tipoUsuario =='Planificacion') {
            return redirect()->route('planificacion.home');
        }else if ($tipoUsuario =='Proveduria') {
            return redirect()->route('proveduria.home');
        }else if ($tipoUsuario =='Evaluacion') {
            return redirect()->route('evaluacion.home');
        } 
        
    }
    public function render()
    {
        return view('livewire.login');
    }
}
