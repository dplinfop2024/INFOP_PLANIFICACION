<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetaAdministrativa extends Model
{
    use HasFactory;
    
    protected $table = 'metas_administrativas';
    //atributos que se pueden asignar en masa
    protected $fillable = [
        'id_poa',
        'id_linea',
        'descripcion',
        'unidad_medida',
        'programacion_anual',
        'presupuesto_meta',
        'codigo_meta',
    ];
    
    //funciones para obtener datos de la linea estrategica de la meta
    public function descripcion_linea(){
        $linea = LineaEstrategica::find($this->id_linea);
        return $linea->descripcion;
    }

    public function numero_linea(){
        $linea = LineaEstrategica::find($this->id_linea);
        return $linea->numero;
    }

    public function programacion(){
        $programacion = ProgramacionAdministrativa::where('id_meta', $this->id)->get();
        return $programacion;
    }
}
