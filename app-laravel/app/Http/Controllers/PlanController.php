<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanController extends Controller
{
   public function planificacion(){
    return view('planificacion');

              
   }


   public function plan(){
    return "testeo";

              
   }
}
