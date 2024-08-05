<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poa extends Model
{

    use HasFactory;
    protected $table = 'poas';

    public function get_nombre_unidad(){
        $usuario = User::find($this->id_usuario);
        return $usuario->nombre_unidad;
    }

    public function get_numero_unidad(){
        $usuario = User::find($this->id_usuario);
        return $usuario->id_unidad;
    }

    public function get_tipo_unidad(){
        $usuario = User::find($this->id_usuario);
        return $usuario->get_tipo_unidad();
    }
    
}
