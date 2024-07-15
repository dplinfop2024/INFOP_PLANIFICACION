<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Unidad\RegistroPoa;
use App\Livewire\Unidad\UnidadHome;




Route::get('/', function () {
   return view('welcome');
});

Route::get('/counter', Counter::class);

Route::get('/unidad', UnidadHome::class);

Route::get('/unidad/registropoa', RegistroPoa::class);


