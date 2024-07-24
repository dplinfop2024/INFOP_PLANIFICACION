<div class="container-fluid" style="background-color:#343A40">
    
    <br>

    <div class="card border-info">
        <!--Encabezado formulario POA-->
        <div class="text-center pt-3">
            <h2>Registrar nuevo POA</h2>
        </div>
        <div class="card-body">
            <!--Información general de POA-->
            <div class="row">
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
                <div class="col-md-3">
                    <label for="actividad" class="form-label">Actividad</label>
                    <input type="text" class="form-control input-btn-border-width" wire:model="poaForm.actividad" disabled>
                </div>
                
                <div class="col-md-9">
                    <label for="componente" class="form-label">Componente</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model="poaForm.componente"></textarea>
                </div>
            </div>
            <!--Metas POA-->
            <div class="text-center pt-3">
                <h2>Metas</h2>
            </div>
            <div class="row">
                @foreach($listaMetas as $meta)
                <div class="card col-md-12 mt-3" style="background-color:#38D6EE">
                    <h5>Meta {{$loop->index+1}}</h5>
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
                    <br>
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
                @endforeach
            </div>
            <!--Botones-->
            <div class="d-grid gap-3 pt-4 col-2 mx-auto">
                <button class="btn" style="background-color:#38D6EE" wire:click="agregarMeta()">Agregar meta</button>
                <button class="btn" style="background-color:#38D6EE" wire:click="save()">Registrar</button>
            </div>
        </div>




    </div>
    <br>

    
</div>

