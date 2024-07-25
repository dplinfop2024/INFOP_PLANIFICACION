<div class="container">
    <div class="d-grid gap-2 col-6 mx-auto">
    
        <h3 class="text-center">POA</h3>

        <button class="btn btn-primary" type="button" href="{{route('registro.poa.administrativo')}}" wire:navigate>Registrar POA Administrativo</button>

        <button class="btn btn-primary" type="button" href="{{route('registro.poa.operativo')}}" wire:navigate>Registrar POA Operativo</button>
    
        <button class="btn btn-primary" type="button" href="{{route('unidad.editarpoa.operativo')}}" wire:navigate>Editar POA Operativo</button>

        <button class="btn btn-primary" type="button" href="{{route('unidad.editarpoa.administrativo')}}" wire:navigate>Editar POA Administrativo</button>

        <button class="btn btn-primary" type="button" href="" wire:navigate>Ver Avances POA</button>

        <button class="btn btn-primary" type="button" href="" wire:navigate>Editar Avances POA</button>
    
        <button class="btn btn-primary" type="button" href="{{route('unidad.poa')}}" wire:navigate>Ver POA en ejecucion</button>
    
        <button class="btn btn-primary" type="button" href="{{route('unidad.poa')}}" wire:navigate>Ver POA en programacion</button>
    
        <h3 class="text-center">Presupuesto</h3>

        <button class="btn btn-primary" type="button" href="{{route('registro.presupuesto')}}" wire:navigate>Registrar Presupuesto</button>
    
        <button class="btn btn-primary" type="button" href="{{route('unidad.presupuesto')}}" wire:navigate>Ver Presupuesto</button>

        <button class="btn btn-primary" type="button" href="{{route('unidad.presupuesto')}}" wire:navigate>Editar Presupuesto</button>
    
        <button class="btn btn-primary" type="button" href="{{route('unidad.presupuesto')}}" wire:navigate>Ver Presupuesto en ejecución</button>

        <h3 class="text-center">PACC</h3>

        <button class="btn btn-primary" type="button" href="{{route('registro.pacc')}}" wire:navigate>Registrar PACC</button>
    
        <button class="btn btn-primary" type="button" href="{{route('unidad.pacc')}}" wire:navigate>Ver PACC</button>

        <button class="btn btn-primary" type="button" href="{{route('unidad.pacc')}}" wire:navigate>Editar PACC</button>
    
        <button class="btn btn-primary" type="button" href="" wire:navigate>Ver Avances PACC</button>

        <button class="btn btn-primary" type="button" href="" wire:navigate>Editar Avances PACC</button>
    
    </div>
</div>
