<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetaOperativa extends Model
{
    use HasFactory;

    protected $table = 'metas_operativas';

    public function descripcion_linea_Op(){
        $linea = LineaEstrategica::find($this->id_linea);
        return $linea->descripcion;
    }

    public function numero_linea_Op(){
        $linea = LineaEstrategica::find($this->id_linea);
        return $linea->numero;
    }

    public function programacion_Op(){
        $programacion = ProgramacionOperativa::where('id_meta', $this->id)->get();
        return $programacion;
    }

}
