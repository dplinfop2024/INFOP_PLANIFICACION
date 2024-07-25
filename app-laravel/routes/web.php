<?php

use App\Livewire\AvancesPoa\EditarAvancesPoaAdministrativo;
use App\Livewire\AvancesPoa\EditarAvancesPoaOperativo;
use App\Livewire\Planificacion\AvancesPacc\VerAvancesPacc;
use App\Livewire\Planificacion\AvancesPoa\VerAvancesPoa;
use App\Livewire\Planificacion\PlanificacionHome;

use App\Livewire\Presupuesto\RegistrarPresupuesto;
use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Evaluacion\AvancesPacc\EditarAvancePacc;
use App\Livewire\Evaluacion\AvancesPacc\ListaAvancePacc;
use App\Livewire\Evaluacion\AvancesPoa\EditarAvancePoa;
use App\Livewire\Evaluacion\AvancesPoa\ListaAvancePoa;
use App\Livewire\Evaluacion\AvancesPoa\ReporteAvancePoa;
use App\Livewire\Evaluacion\AvancesPoa\VerAvancePoa;
use App\Livewire\Evaluacion\EvaluacionHome;
use App\Livewire\Evaluacion\Pacc\EditarPacc;
use App\Livewire\Evaluacion\Pacc\ListaPacc;
use App\Livewire\Evaluacion\Pacc\VerPacc as EvaluacionPaccVerPacc;
use App\Livewire\Evaluacion\Poa\ListaPoa;
use App\Livewire\Evaluacion\Poa\ReportePoa;
use App\Livewire\Evaluacion\Poa\VerPoa as EvaluacionPoaVerPoa;
use App\Livewire\Evaluacion\Presupuesto\EditarPresupuestoEjecucion;
use App\Livewire\Evaluacion\Presupuesto\ListaPresupuestoEjecucion;
use App\Livewire\Evaluacion\Presupuesto\ReporteAnualPresupuestoEjecucion;
use App\Livewire\Evaluacion\Presupuesto\ReporteTrimestralPresupuestoEjecucion;
use App\Livewire\Evaluacion\Presupuesto\VerPresupuestoEjecucion;
use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\Planificacion\Pacc\VerPacc as PaccVerPacc;
use App\Livewire\Planificacion\Poa\EditarPoa as PoaEditarPoa;
use App\Livewire\Planificacion\Poa\VerPoa as PoaVerPoa;
use App\Livewire\Planificacion\Presupuesto\VerPresupuesto as PresupuestoVerPresupuesto;
use App\Livewire\Poa\EditarPoaAdministrativo;
use App\Livewire\Poa\EditarPoaOperativo;
use App\Livewire\Poa\RegistrarPoaAdministrativo;
use App\Livewire\Poa\RegistrarPoaOperativo;
use App\Livewire\Poa\VerPoaOperativo;
use App\Livewire\Presupuesto\EditarPresupuesto;
use App\Livewire\Programacion\Poa\VerListaPoa;
use App\Livewire\Programacion\ProgramacionHome;
use App\Livewire\Unidad\Presupuesto\VerPresupuesto;
use App\Livewire\Unidad\UnidadHome;
use App\Livewire\Programacion\Poa\EditarPoa;
use App\Livewire\Programacion\Poa\VisualizarPoa;
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
Route::get('/unidad/registropoa/administrativo', RegistrarPoaAdministrativo::class)->name('registro.poa.administrativo');
Route::get('/unidad/registropoa/operativo', RegistrarPoaOperativo::class)->name('registro.poa.operativo');
Route::get('/unidad/verpoa', VerPoaOperativo::class)->name('unidad.poa');
Route::get('/unidad/editarpoa/operativo', EditarPoaOperativo::class)->name('unidad.editarpoa.operativo');
Route::get('/unidad/editarpoa/administrativo', EditarPoaAdministrativo::class)->name('unidad.editarpoa.administrativo');
//---Rutas Unidad-AvancesPOA---//
Route::get('/unidad/poa/avances/editaroperativo', EditarAvancesPoaOperativo::class)->name('unidad.poa.editaravances.operativo');
Route::get('/unidad/poa/avances/editaradministrativo', EditarAvancesPoaAdministrativo::class)->name('unidad.poa.editaravances.administrativo');
//---Rutas Unidad-Presupuesto---//
Route::get('/unidad/registropresupuesto', RegistrarPresupuesto::class)->name('registro.presupuesto');
Route::get('unidad/editarpresupuesto', EditarPresupuesto::class)->name('unidad.editar.presupuesto');
Route::get('/unidad/verpresupuesto', VerPresupuesto::class)->name('unidad.presupuesto');
//---Rutas Unidad-PACC---//
Route::get('/unidad/registropacc', VerPoaOperativo::class)->name('registro.pacc');
Route::get('/unidad/verpacc', VerPoaOperativo::class)->name('unidad.pacc');



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

//Pagina principal Planificacion
Route::get('/planificiacion',PlanificacionHome::class)->name('planificacion.home');


//---Rutas Planificacion-POA---//
route::get('/planificacion/verpoa',PoaVerPoa::class)->name('planificacion.verpoa');
route::get('/planificacion/editarpoa',PoaEditarPoa::class)->name('planificacion.editarpoa');
route::get('/planificaicon/veravancespoa',VerAvancesPoa::class)->name('planificacion.veravancespoa');

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





//----------RUTAS EVALUACION----------//

//---RUTA PRINCIPAL DE EVALUACION---// 
route::get('/evaluacion',EvaluacionHome::class)->name('evaluacion.home');

//---Rutas Evaluacion Avances POA---//
route::get('/evaluacion/editaravancepoa',EditarAvancePoa::class)->name('evaluacion.edicionavancepoa');
route::get('/evaluacion/veravancepoa',VerAvancePoa::class)->name('evaluacion.visualizaravancepoa');
route::get('/evaluacion/listaavancepoa',ListaAvancePoa::class)->name('evaluacion.listaavancepoa');
route::get('/evaluacion/reporteavance',ReporteAvancePoa::class)->name('evaluacion.reporteavance');

//---Rutas Evaluacion Avances PACC---//
route::get('/evaluacion/listaavancepacc',ListaAvancePacc::class)->name('evaluacion.listaavancepacc');
route::get('/evaluacion/editaravancepacc',EditarAvancePacc::class)->name('evaluacion.editaravancepacc');
route::get('/evaluacion/veravancepacc',VerAvancePoa::class)->name('evaluacion.veravancepacc');

//---Rutas Evaluacion PACC---//
route::get('/evaluacion/editarpacc',EditarPacc::class)->name('evaluacion.edicionpacc');
route::get('/evaluacion/verpacc',EvaluacionPaccVerPacc::class)->name('evaluacion.visualizarpacc');
route::get('/evaluacion/listapacc',ListaPacc::class)->name('evaluacion.listapacc');


//---Rutas Evaluacion POA---//
route::get('/evaluacion/verpoa',EvaluacionPoaVerPoa::class)->name('evaluacion.visualizarpoa');
route::get('/evaluacion/reportepoa',ReportePoa::class)->name('evaluacion.repostepoa');
route::get('/evaluacion/listapoa',ListaPoa::class)->name('evaluacion.listapoa');

//---Rutas Evaluacion Presupuesto---//
route::get('/evaluacion/listapresupuestoejecucion',ListaPresupuestoEjecucion::class)->name('evaluacion.listapresupuestoejecucion');
route::get('/evaluacion/editarpresupuestoejecucion',EditarPresupuestoEjecucion::class)->name('evaluacion.edicionpresupuestoejecucion');
route::get('/evaluacion/verpresupuestoejecucion',VerPresupuestoEjecucion::class)->name('evaluacion.visualizarpresupuestoejecucion');
route::get('/evaluacion/resporteanualpresupuestoejecucion',ReporteAnualPresupuestoEjecucion::class)->name('evaluacion.resporteanualpresupuestoejecucion');
route::get('/evaluacion/resportetrimestralpresupuestoejecucion',ReporteTrimestralPresupuestoEjecucion::class)->name('evaluacion.resportetrimestralpresupuestoejecucion');