<?php

namespace App\Livewire\Presupuesto;

use App\Models\GastoPresupuesto;
//Modelo de Presupuesto para BD
use App\Models\Presupuesto;
use App\Models\SubgrupoPresupuesto;
use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Presupuesto')]
class VerPresupuesto extends Component
{

    //creando objeto para guardar el presupuesto
    public $presupuesto;
    //creando un objeto para guardar al usuario del presupuesto
    public $usuario;

   //Creando un objeto para guardar los subgrupos fijos en el sistema
    public $subgrupos;
    public $gastospresupuestos;


    //función mount se accederá a  todos los datos de la bd cargarse la pagina
    public function mount(){
        //Buscando el Presupuesto con Id 1 y guardandolo en la objeto $presupuesto
        $this->presupuesto = Presupuesto::find(1);
        //buscando el usuario dueño del presupuesto con id 1
        $this->usuario = User::find($this->presupuesto->id_usuario);

        $this->subgrupos = SubgrupoPresupuesto::all();

        $this->gastospresupuestos = GastoPresupuesto::where("id_presupuesto", 1)->get();
        
        //mostrando usuario en consola
        $this->dispatch('log', $this->subgrupos);
        $this->dispatch('log', $this->gastospresupuestos);
    }
    public function render()
    {
        return view('livewire.presupuesto.ver-presupuesto');
    }
}
