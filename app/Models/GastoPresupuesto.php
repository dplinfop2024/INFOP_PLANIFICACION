<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GastoPresupuesto extends Model
{
    use HasFactory;
    
   
     
    
        public function render()
        {
            return view('livewire.mi-componente');
        }
    }
     

