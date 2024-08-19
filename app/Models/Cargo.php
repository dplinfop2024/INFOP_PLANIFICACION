<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    public function get_cargo(){
        $cargo = Cargo::find($this->id_cargo);
        return $cargo->nombre;
    }




}
