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
                    <!--Nombre meses-->
                    <div class="row">
                        <div class="col-sm-3">
                            <br>
                        </div>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-1"><label for="mes" class="form-label">Ene</label></div>
                                <div class="col-sm-1"><label for="mes" class="form-label">Feb</label></div>
                                <div class="col-sm-1"><label for="mes" class="form-label">Mar</label></div>
                                <div class="col-sm-1"><label for="mes" class="form-label">Abr</label></div>
                                <div class="col-sm-1"><label for="mes" class="form-label">May</label></div>
                                <div class="col-sm-1"><label for="mes" class="form-label">Jun</label></div>
                                <div class="col-sm-1"><label for="mes" class="form-label">Jul</label></div>
                                <div class="col-sm-1"><label for="mes" class="form-label">Ago</label></div>
                                <div class="col-sm-1"><label for="mes" class="form-label">Sep</label></div>
                                <div class="col-sm-1"><label for="mes" class="form-label">Oct</label></div>
                                <div class="col-sm-1"><label for="mes" class="form-label">Nov</label></div>
                                <div class="col-sm-1"><label for="mes" class="form-label">Dic</label></div>
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="col"><label for="anual" class="form-label">Anual</label></div>
                        </div>  
                    </div>
                    <!--Cursos-->
                    <div class="row mb-1">
                        <div class="col-sm-3">
                            <h6>Cursos</h6>
                        </div>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c1"></div>
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c2"></div>
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c3"></div>
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c4"></div>
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c5"></div>
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c6"></div>
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c7"></div>
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c8"></div>
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c9"></div>
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c10"></div>
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c11"></div>
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c12"></div>
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="col"><input type="number" class="form-control" wire:model="listaMetas.{{$loop->index}}.canual" disabled></div>
                        </div>  
                    </div>
                    <!--Participantes-->
                    <div class="row mb-1">
                        <div class="col-sm-3">
                            <h6>Participantes</h6>
                        </div>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c1"></div>
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c2"></div>
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c3"></div>
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c4"></div>
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c5"></div>
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c6"></div>
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c7"></div>
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c8"></div>
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c9"></div>
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c10"></div>
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c11"></div>
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c12"></div>
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="col"><input type="number" class="form-control" wire:model="listaMetas.{{$loop->index}}.canual" disabled></div>
                        </div>  
                    </div>
                    <!--Horas-->
                    <div class="row">
                        <div class="col-sm-3">
                            <h6>Horas</h6>
                        </div>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c1"></div>
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c2"></div>
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c3"></div>
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c4"></div>
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c5"></div>
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c6"></div>
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c7"></div>
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c8"></div>
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c9"></div>
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c10"></div>
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c11"></div>
                                <div class="col-sm-1"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c12"></div>
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="col"><input type="number" class="form-control" wire:model="listaMetas.{{$loop->index}}.canual" disabled></div>
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

