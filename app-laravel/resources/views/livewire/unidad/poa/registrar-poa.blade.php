<div class="container">
    <div class="row g-3">
        <div class="col-md-3">
            <label for="actividad" class="form-label">Actividad</label>
            <input type="text" class="form-control input-btn-border-width" wire:model="poaForm.actividad" disabled>
        </div>
        <div class="col-md-3">
            <label for="nombreUnidad" class="form-label">Nombre Unidad</label>
            <input type="text" class="form-control" wire:model="poaForm.nombreUnidad" disabled>
        </div>
        <div class="col-md-3">
            <label for="responsable" class="form-label">Nombre Responsable</label>
            <input type="email" class="form-control input-btn-border-width" wire:model="poaForm.responsable" disabled>
        </div>
        <div class="col-md-3">
            <label for="cargo" class="form-label">Cargo</label>
            <input type="text" class="form-control" wire:model="poaForm.cargoResponsable" disabled>
        </div>
        <div class="col-md-1">
            <label for="anio" class="form-label">Año</label>
            <input type="text" class="form-control input-btn-border-width" wire:model="poaForm.anio" disabled>
        </div>
        <div class="col-md-2">
            <label for="numComp" class="form-label">Número Componente</label>
            <select class="form-select" wire:model.change="poaForm.numComponente">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
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
                        <select class="form-select" wire:model.change="listaMetas.{{$loop->index}}.numLinea">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="desLinea" class="form-label">Descripcion Linea Estrategica</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model="lineaEstrategica"></textarea>
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
                    <div class="col-sm-11">
                        <div class="row">
                            <div class="col-sm-1">
                                <label for="mes" class="form-label">Enero</label>
                                <input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.m1">
                            </div>
                            <div class="col-sm-1">
                                <label for="mes" class="form-label">Febrero</label>
                                <input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.m2">
                            </div>
                            <div class="col-sm-1">
                                <label for="mes" class="form-label">Marzo</label>
                                <input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.m3">
                            </div>
                            <div class="col-sm-1">
                                <label for="mes" class="form-label">abril</label>
                                <input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.m4">
                            </div>
                            <div class="col-sm-1">
                                <label for="mes" class="form-label">Mayo</label>
                                <input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.m5">
                            </div>
                            <div class="col-sm-1">
                                <label for="mes" class="form-label">Junio</label>
                                <input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.m6">
                            </div>
                            <div class="col-sm-1">
                                <label for="mes" class="form-label">Julio</label>
                                <input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.m7">
                            </div>
                            <div class="col-sm-1">
                                <label for="mes" class="form-label">Agosto</label>
                                <input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.m8">
                            </div>
                            <div class="col-sm-1">
                                <label for="mes" class="form-label">Septiembre</label>
                                <input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.m9">
                            </div>
                            <div class="col-sm-1">
                                <label for="mes" class="form-label">Octubre</label>
                                <input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.m10">
                            </div>
                            <div class="col-sm-1">
                                <label for="mes" class="form-label">Noviembre</label>
                                <input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.m11">
                            </div>
                            <div class="col-sm-1">
                                <label for="mes" class="form-label">Diciembre</label>
                                <input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.m12">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="col">
                            <label for="anual" class="form-label">Anual</label>
                            <input type="number" class="form-control" wire:model="listaMetas.{{$loop->index}}.anual" disabled>
                        </div>
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

