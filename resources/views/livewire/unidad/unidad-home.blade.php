<div class="container">
    <div class="d-grid gap-2 col-6 mx-auto">
    
        <h3 class="text-center">POA</h3>

        <button class="btn btn-primary" type="button" href="{{route('registro.poa.administrativo')}}" wire:navigate>Registrar POA Administrativo</button>

        <button class="btn btn-primary" type="button" href="{{route('registro.poa.operativo')}}" wire:navigate>Registrar POA Operativo</button>
    
        <button class="btn btn-primary" type="button" href="{{route('poa.editar.operativo')}}" wire:navigate>Editar POA Operativo</button>

        <button class="btn btn-primary" type="button" href="{{route('poa.editar.administrativo')}}" wire:navigate>Editar POA Administrativo</button>

        <button class="btn btn-primary" type="button" href="{{route('poa.avances.ver.operativo')}}" wire:navigate>Ver Avances POA</button>

        {{-- Registrar avances POA Administrativo no se encuentra entre las funciones originales de UNIDAD. 
        Temporalmente aqui, para realizar el codigo.                       --}}
        <button class="btn btn-primary" type="button" href="{{route('poa.avances.registrar.administrativo')}}" wire:navigate>Registrar Avances POA Administrativo</button>
    

        <button class="btn btn-primary" type="button" href="{{route('poa.avances.editar.operativo')}}" wire:navigate>Editar Avances POA Operativo</button>
    
        <button class="btn btn-primary" type="button" href="{{route('poa.avances.editar.operativo')}}" wire:navigate>Editar Avances POA Administrativo</button>
        
        <button class="btn btn-primary" type="button" href="{{route('poa.ver.administrativo')}}" wire:navigate>Ver POA en ejecucion</button>
    
        <button class="btn btn-primary" type="button" href="{{route('poa.ver.operativo')}}" wire:navigate>Ver POA en programacion</button>
    
        <h3 class="text-center">Presupuesto</h3>

        <button class="btn btn-primary" type="button" href="{{route('unidad.registro.presupuesto')}}" wire:navigate>Registrar Presupuesto</button>
    
        <button class="btn btn-primary" type="button" href="{{route('presupuesto.ver')}}" wire:navigate>Ver Presupuesto</button>

        <button class="btn btn-primary" type="button" href="{{route('presupuesto.editar')}}" wire:navigate>Editar Presupuesto</button>
    
        <button class="btn btn-primary" type="button" href="{{route('presupuesto.ver')}}" wire:navigate>Ver Presupuesto en ejecución</button>

        <h3 class="text-center">PACC</h3>

        <button class="btn btn-primary" type="button" href="{{route('unidad.registro.pacc')}}" wire:navigate>Registrar PACC</button>
    
        <button class="btn btn-primary" type="button" href="{{route('pacc.ver')}}" wire:navigate>Ver PACC</button>

        <button class="btn btn-primary" type="button" href="{{route('pacc.editar')}}" wire:navigate>Editar PACC</button>
    
        <button class="btn btn-primary" type="button" href="" wire:navigate>Ver Avances PACC</button>

        <button class="btn btn-primary" type="button" href="" wire:navigate>Editar Avances PACC</button>
    
    </div>
</div>
