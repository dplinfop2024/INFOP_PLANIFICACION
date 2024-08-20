<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetaOperativa extends Model
{
    use HasFactory;

    protected $table = 'metas_operativas';
    //Atributos para asiggnar en masa.
    protected $fillable =[
        'id_poa',
        'id_linea',
        'descripcion',
        'unidad_medida',
        'programacion_anual',
        'codigo_meta',
    ];

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
