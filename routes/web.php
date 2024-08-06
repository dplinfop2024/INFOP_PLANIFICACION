<?php

use App\Livewire\AvancesPoa\VerAvancePoaAdministrativo;
use Illuminate\Support\Facades\Route;

use App\Livewire\AvancesPacc\ListaAvancesPacc;
use App\Livewire\AvancesPoa\EditarAvancesPoaAdministrativo;
use App\Livewire\AvancesPoa\EditarAvancesPoaOperativo;
use App\Livewire\AvancesPoa\ListaAvancesPoa;
use App\Livewire\AvancesPoa\VerAvancePoaOperativo;
use App\Livewire\Pacc\RegistrarPacc;
use App\Livewire\Planificacion\PlanificacionHome;
use App\Livewire\Poa\ListaPoa;
use App\Livewire\Presupuesto\RegistrarPresupuesto;
use App\Livewire\Evaluacion\EvaluacionHome;
use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\Poa\EditarPoaAdministrativo;
use App\Livewire\Poa\EditarPoaOperativo;
use App\Livewire\Poa\RegistrarPoaAdministrativo;
use App\Livewire\Poa\RegistrarPoaOperativo;
use App\Livewire\Poa\VerPoaOperativo;
use App\Livewire\Presupuesto\EditarPresupuesto;
use App\Livewire\Programacion\ProgramacionHome;
use App\Livewire\Unidad\UnidadHome;
use App\Livewire\Mantenimiento\Usuario\EditarPerfil;
use App\Livewire\Pacc\EditarPacc;
use App\Livewire\Pacc\ListaPacc;
use App\Livewire\Pacc\VerPacc;
use App\Livewire\Poa\VerPoaAdministrativo;
use App\Livewire\Presupuesto\ListaPresupuesto;
use App\Livewire\Presupuesto\VerPresupuesto;
use App\Livewire\Proveeduria\ProveeduriaHome;

//Ruta pagina principal
Route::get('/', Home::class)->name('welcome');
//Login
Route::get('/login', Login::class)->name('login');

//Route::get('/counter', Counter::class);


//----------RUTAS UNIDAD----------//
//Pagina principal Unidad
Route::get('/unidad', UnidadHome::class)->name('unidad.home');
//---Rutas Unidad-POA---//
Route::get('/unidad/registro/poa/administrativo', RegistrarPoaAdministrativo::class)->name('registro.poa.administrativo');
Route::get('/unidad/registro/poa/operativo', RegistrarPoaOperativo::class)->name('registro.poa.operativo');

//---Rutas Unidad-Presupuesto---//
Route::get('/unidad/registro/presupuesto', RegistrarPresupuesto::class)->name('unidad.registro.presupuesto');

//---Rutas Unidad-PACC---//
Route::get('/unidad/registro/pacc', RegistrarPacc::class)->name('unidad.registro.pacc');



//----------RUTAS PROGRAMACION----------//
//Pagina principal Programación
Route::get('/programacion', ProgramacionHome::class)->name('programacion.home');


//----------RUTAS PLANIFICACION----------//
//Pagina principal Planificacion
Route::get('/planificiacion',PlanificacionHome::class)->name('planificacion.home');


//----------RUTAS Proveduria----------//

//Pagina principal Proveduria
Route::get('/proveduria', ProveeduriaHome::class)->name('proveduria.home');


//----------RUTAS EVALUACION----------//

//---RUTA PRINCIPAL DE EVALUACION---// 
route::get('/evaluacion',EvaluacionHome::class)->name('evaluacion.home');



//------------------------ RUTAS GENERALES - PACC ------------------------//
route::get('/pacc/lista', ListaPacc::class)->name('pacc.lista');
route::get('/pacc/ver', VerPacc::class)->name('pacc.ver');
route::get('/pacc/editar', EditarPacc::class)->name('pacc.editar');


//---------------------RUTAS GENERALES - AVANCES PACC ---------------------//
route::get('/avance/pacc/lista', ListaAvancesPacc::class)->name('pacc.avances.lista');


//-------------------------RUTAS GENERALES - POA -------------------------//
route::get('/poa/lista', ListaPoa::class)->name('poa.lista');
route::get('/poa/ver/administrativo', VerPoaAdministrativo::class)->name('poa.ver.administrativo');
route::get('/poa/ver/operativo', VerPoaOperativo::class)->name('poa.ver.operativo');
route::get('/poa/editar/administrativo', EditarPoaAdministrativo::class)->name('poa.editar.administrativo');
route::get('/poa/editar/operativo', EditarPoaOperativo::class)->name('poa.editar.operativo');


//---------------------RUTAS GENERALES - AVANCES POA ---------------------//
route::get('/poa/avances/lista', ListaAvancesPoa::class)->name('poa.avances.lista');
route::get('/poa/avances/ver/administrativo', VerAvancePoaAdministrativo::class)->name('poa.avances.ver.administrativo');
route::get('/poa/avances/ver/operativo', VerAvancePoaOperativo::class)->name('poa.avances.ver.operativo');
route::get('/poa/avances/editar/administrativo', EditarAvancesPoaAdministrativo::class)->name('poa.avances.editar.administrativo');
route::get('/poa/avances/editar/operativo', EditarAvancesPoaOperativo::class)->name('poa.avances.editar.operativo');


//---------------------RUTAS GENERALES - PRESUPUESTO ---------------------//
route::get('/presupuesto/lista', ListaPresupuesto::class)->name('presupuesto.lista');
route::get('/presupuesto/ver', VerPresupuesto::class)->name('presupuesto.ver');
route::get('/presupuesto/editar', EditarPresupuesto::class)->name('presupuesto.editar');


//------------------------- RUTAS MANTENIMIENTO --------------------------//
route::get('/mantenimiento/editarperfil',EditarPerfil::class)->name('mantenimiento.editarperfil');
