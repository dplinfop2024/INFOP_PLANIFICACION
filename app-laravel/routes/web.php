<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Unidad\UnidadHome;
use App\Http\Controllers\PlanController;




Route::get('/', function () {
   return view('welcome');
});

Route::get('/counter', Counter::class);

Route::get('/unidad', UnidadHome::class);

Route::get('/planificacion', [PlanController::class, ]);


