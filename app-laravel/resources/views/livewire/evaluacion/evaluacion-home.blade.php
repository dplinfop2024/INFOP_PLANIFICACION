<div class="container">

    <div class="d-grid gap-2 col-6 mx-auto">
    
        
        <h3 class="text-center">POA</h3>

        <button class="btn btn-primary" type="button" href="{{route('evaluacion.listapoa')}}" wire:navigate>Ver Lista de POA</button>
        <button class="btn btn-primary" type="button" href="{{route('evaluacion.listaavancepoa')}}" wire:navigate>Ver Lista Avance de POA</button>
        
        <h3 class="text-center">PACC</h3>

        <button class="btn btn-primary" type="button" href="{{route('evaluacion.listapacc')}}" wire:navigate>Ver Lista de PACC</button>
        <button class="btn btn-primary" type="button" href="{{route('evaluacion.listaavancepacc')}}" wire:navigate>Ver Lista de PACC</button>
    
        <h3 class="text-center">Presupuesto</h3>
        <button class="btn btn-primary" type="button" href="{{route('evaluacion.listapresupuestoejecucion')}}" wire:navigate>Ver Lista de PACC</button>
   
    </div>
</div>