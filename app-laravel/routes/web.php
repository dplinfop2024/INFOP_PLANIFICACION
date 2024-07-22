<?php

use App\Livewire\Planificacion\AvancesPacc\VerAvancesPacc;
use App\Livewire\Planificacion\AvancesPoa\VerAvancesPoa;
use App\Livewire\Planificacion\PlanificacionHome;

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\Planificacion\Pacc\VerPacc as PaccVerPacc;
use App\Livewire\Planificacion\Poa\EditarPoa as PoaEditarPoa;
use App\Livewire\Planificacion\Poa\VerPoa as PoaVerPoa;
use App\Livewire\Planificacion\Presupuesto\VerPresupuesto as PresupuestoVerPresupuesto;
use App\Livewire\Programacion\Poa\VerListaPoa;
use App\Livewire\Programacion\ProgramacionHome;
use App\Livewire\Unidad\Pacc\RegistrarPacc;
use App\Livewire\Unidad\Pacc\VerPacc;
use App\Livewire\Unidad\Poa\RegistrarPoa;
use App\Livewire\Unidad\Poa\VerPoa;
use App\Livewire\Unidad\Presupuesto\RegistrarPresupuesto;
use App\Livewire\Unidad\Presupuesto\VerPresupuesto;
use App\Livewire\Unidad\UnidadHome;
use App\Livewire\Programacion\Poa\EditarPoa;
use App\Livewire\Programacion\Poa\VisualizarPoa;
use App\Livewire\Programacion\Presupuesto\EditarPresupuesto;
use App\Livewire\Programacion\Presupuesto\VerListaPresupuesto;
use App\Livewire\Programacion\Presupuesto\VisualizarPresupuesto;
use App\Livewire\Proveduria\Pacc\VerPacc as ProveduriaVerPacc;
use App\Livewire\Proveduria\ProveduriaHome;

//Ruta pagina principal
Route::get('/', Home::class)->name('welcome');
//Login
Route::get('/login', Login::class)->name('login');

//Route::get('/counter', Counter::class);


//----------RUTAS UNIDAD----------//
//Pagina principal Unidad
Route::get('/unidad', UnidadHome::class)->name('unidad.home');
//---Rutas Unidad-POA---//
Route::get('/unidad/registropoa', RegistrarPoa::class)->name('registro.poa');
Route::get('/unidad/verpoa', VerPoa::class)->name('unidad.poa');
//---Rutas Unidad-Presupuesto---//
Route::get('/unidad/registropresupuesto', RegistrarPresupuesto::class)->name('registro.presupuesto');
Route::get('/unidad/verpresupuesto', VerPresupuesto::class)->name('unidad.presupuesto');
//---Rutas Unidad-PACC---//
Route::get('/unidad/registropacc', RegistrarPacc::class)->name('registro.pacc');
Route::get('/unidad/verpacc', VerPacc::class)->name('unidad.pacc');

//----------RUTAS PROGRAMACION----------//
//Pagina principal Programación
Route::get('/programacion', ProgramacionHome::class)->name('programacion.home');
//---Rutas Programacion-POA---//
route::get('/programacion/editarpoa', EditarPoa::class)->name('programacion.editarpoa');
route::get('/programacion/verlistapoa', VerListaPoa::class)->name('programacion.listapoa');
route::get('/programacion/visualizarpoa', VisualizarPoa::class)->name('programacion.visualizarpoa');

//route::get('/programacion/editarlistapoa', EditarListaPoa::class)->name('programacion.edicionpoa');
//---Rutas Programacion-Presupuesto---//
route::get('/programacion/verlistapresupuesto', VerListaPresupuesto::class)->name('programacion.listapresupuesto');
route::get('/programacion/editarpresupuesto', EditarPresupuesto::class)->name('programacion.edicionpresupuesto');
route::get('/programacion/visualizarpresupuesto', VisualizarPresupuesto::class)->name('programacion.visualizarpresupuesto');

//----------RUTAS PLANIFICACION----------//

//Pagina principal Programación
Route::get('/planificiacion',PlanificacionHome::class)->name('planificacion.home');


//---Rutas Planificacion-POA---//
route::get('/planificacion/verpoa',PoaVerPoa::class)->name('planificacion.verpoa');
route::get('/planificacion/editarpoa',PoaEditarPoa::class)->name('planificacion.editarpoa');
route::get('/planificaicon/veravancespoa',VerAvancesPoa::class)->name('planificacion.veravancespacc');

//---Rutas Planificacion-Pacc---//
route::get('/planificacion/verpacc',PaccVerPacc::class)->name('planificacion.verpacc');
route::get('/planificacion/veravancespacc',VerAvancesPacc::class)->name('planificacion.veravancespacc');

//---Rutas Planificacion-Presupuesto---//
route::get('/planificacion/verpresupuesto',PresupuestoVerPresupuesto::class)->name('planificacion.verpresupuesto');

//----------RUTAS Proveduria----------//

//Pagina principal Proveduria
Route::get('/proveduria',ProveduriaHome::class)->name('proveduria.home');

//---Rutas Proveduria-Pacc---//
route::get('/proveduria/verpacc',ProveduriaVerPacc::class)->name('proveduria.verpacc');