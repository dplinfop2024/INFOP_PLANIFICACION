<?php

namespace App\Livewire;

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

        $user->id_unidad = 1500;
        $user->tipo_usuario = 'Proveeduria';
        $user->tipo_unidad = 'Administrativo';
        $user->nombre_unidad = 'Unidad proveeduria';
        $user->nombre = 'prueba';
        $user->cargo = 'jefe';
        $user->password = '12345';
        $user->email = 'prueba@proveeduria.com';

        $user->save();

        Pruebas usuarios base*/

        /*prueba ver usuario base
        $user = User::where('id_unidad' , '1200')->get();
        $this->dispatch('log', $user);
        prueba ver usuario base*/

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
