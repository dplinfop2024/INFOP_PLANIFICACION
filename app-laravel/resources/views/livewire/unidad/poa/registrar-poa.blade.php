<div class="container">
    <div class="row g-3">
        <div class="col-md-3">
            <label for="actividad" class="form-label">Actividad</label>
            <input type="email" class="form-control input-btn-border-width" wire:model="poaForm.actividad">
        </div>
        <div class="col-md-3">
            <label for="nombreUnidad" class="form-label">Nombre Unidad</label>
            <input type="text" class="form-control" wire:model="poaForm.nombreUnidad">
        </div>
        <div class="col-md-3">
            <label for="responsable" class="form-label">Nombre Responsable</label>
            <input type="email" class="form-control input-btn-border-width" wire:model="poaForm.responsable">
        </div>
        <div class="col-md-3">
            <label for="cargo" class="form-label">Cargo</label>
            <input type="text" class="form-control" wire:model="poaForm.cargoResponsable">
        </div>
        <div class="col-md-1">
            <label for="anio" class="form-label">Año</label>
            <input type="text" class="form-control input-btn-border-width" wire:model="poaForm.anio">
        </div>
        <div class="col-md-2">
            <label for="numComp" class="form-label">Número Componente</label>
            <input type="text" class="form-control input-btn-border-width" wire:model="poaForm.numComponente">
        </div>
        <div class="col-md-9">
            <label for="componente" class="form-label">Componente</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model="poaForm.componente"></textarea>
        </div>
        
        @foreach($listaMetas as $meta)
            <div class="col-md-12 bg-primary-subtle">
                <br>
                <div class="row">
                    <div class="col-md-2">
                        <label for="numLinea" class="form-label">Número linea</label>
                        <input type="text" class="form-control" wire:model="listaMetas.{{$loop->index}}.numLinea">
                    </div>
                    <div class="col-md-4">
                        <label for="desLinea" class="form-label">Descripcion Linea Estrategica</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model="listaMetas.{{$loop->index}}.linea"></textarea>
                    </div>
                    <div class="col-md-2">
                        <label for="numMeta" class="form-label">Número Meta</label>
                        <input type="text" class="form-control" wire:model="listaMetas.{{$loop->index}}.codigo">
                    </div>
                    <div class="col-md-4">
                        <label for="desMeta" class="form-label">Descripcion Meta</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model="listaMetas.{{$loop->index}}.descripcion"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                        <label for="mes" class="form-label">Enero</label>
                        <input type="number" class="form-control" wire:model="listaMetas.{{$loop->index}}.m1">
                    </div>
                    <div class="col-md-1">
                        <label for="mes" class="form-label">Febrero</label>
                        <input type="number" class="form-control" wire:model="listaMetas.{{$loop->index}}.m2">
                    </div>
                    <div class="col-md-1">
                        <label for="mes" class="form-label">Marzo</label>
                        <input type="number" class="form-control" wire:model="listaMetas.{{$loop->index}}.m3">
                    </div>
                    <div class="col-md-1">
                        <label for="mes" class="form-label">abril</label>
                        <input type="number" class="form-control" wire:model="listaMetas.{{$loop->index}}.m4">
                    </div>
                    <div class="col-md-1">
                        <label for="mes" class="form-label">Mayo</label>
                        <input type="number" class="form-control" wire:model="listaMetas.{{$loop->index}}.m5">
                    </div>
                    <div class="col-md-1">
                        <label for="mes" class="form-label">Junio</label>
                        <input type="number" class="form-control" wire:model="listaMetas.{{$loop->index}}.m6">
                    </div>
                    <div class="col-md-1">
                        <label for="mes" class="form-label">Julio</label>
                        <input type="number" class="form-control" wire:model="listaMetas.{{$loop->index}}.m7">
                    </div>
                    <div class="col-md-1">
                        <label for="mes" class="form-label">Agosto</label>
                        <input type="number" class="form-control" wire:model="listaMetas.{{$loop->index}}.m8">
                    </div>
                    <div class="col-md-1">
                        <label for="mes" class="form-label">Septiembre</label>
                        <input type="number" class="form-control" wire:model="listaMetas.{{$loop->index}}.m9">
                    </div>
                    <div class="col-md-1">
                        <label for="mes" class="form-label">Octubre</label>
                        <input type="number" class="form-control" wire:model="listaMetas.{{$loop->index}}.m10">
                    </div>
                    <div class="col-md-1">
                        <label for="mes" class="form-label">Noviembre</label>
                        <input type="number" class="form-control" wire:model="listaMetas.{{$loop->index}}.m11">
                    </div>
                    <div class="col-md-1">
                        <label for="mes" class="form-label">Diciembre</label>
                        <input type="number" class="form-control" wire:model="listaMetas.{{$loop->index}}.m12">
                    </div>
                </div>
                <br>
            </div>
            <br>
        @endforeach

        <button class="btn btn-primary" wire:click="agregarMeta()">Agregar meta</button>
        <button class="btn btn-primary" wire:click="save()">Registrar</button>
      </div>
</div>

