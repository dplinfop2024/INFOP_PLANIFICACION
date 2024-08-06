<div class="container">

    <div class="d-grid gap-2 col-6 mx-auto">
    
        
        <h3 class="text-center">POA</h3>

        <button class="btn btn-primary" type="button" href="{{route('poa.lista')}}" wire:navigate>Ver Lista de POA</button>
        <button class="btn btn-primary" type="button" href="{{route('poa.avances.lista')}}" wire:navigate>Ver Lista Avance de POA</button>
        
        <h3 class="text-center">PACC</h3>

        <button class="btn btn-primary" type="button" href="{{route('pacc.lista')}}" wire:navigate>Ver Lista de PACC</button>
        <button class="btn btn-primary" type="button" href="{{route('pacc.avances.lista')}}" wire:navigate>Ver Lista de PACC</button>
    
        <h3 class="text-center">Presupuesto</h3>
        <button class="btn btn-primary" type="button" href="{{route('presupuesto.lista')}}" wire:navigate>Ver Listado de Presupuesto</button>
   
    </div>
</div>