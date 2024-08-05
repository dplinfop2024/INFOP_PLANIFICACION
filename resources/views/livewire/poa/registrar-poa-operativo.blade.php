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
                <div class="card text-bg-info col-md-12 mt-3">
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
                    <!--Programación de meta-->
                    <div class="table-responsive">
                        <table class="table-info table-sm">
                            <thead>
                                <tr class="text-center">
                                    <th width="25%"></th>
                                    <th colspan="3">Trimestre 1</th>
                                    <th colspan="3">Trimestre 2</th>
                                    <th colspan="3">trimestre 3</th>
                                    <th colspan="3">trimestre 4</th>
                                    <th> </th>
                                  </tr>
                                <tr>
                                  <th class="th-sm"></th>
                                  <th class="text-center">Ene</th>
                                  <th class="text-center">Feb</th>
                                  <th class="text-center">Mar</th>
                                  <th class="text-center">Abr</th>
                                  <th class="text-center">May</th>
                                  <th class="text-center">Jun</th>
                                  <th class="text-center">Jul</th>
                                  <th class="text-center">Ago</th>
                                  <th class="text-center">Sep</th>
                                  <th class="text-center">Oct</th>
                                  <th class="text-center">Nov</th>
                                  <th class="text-center">Dic</th>
                                  <th class="text-center">Anual</th>
                                </tr>
                              </thead>
                              <tbody class="table-group-divider">
                                <tr>
                                  <th scope="row">Cursos</th>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c1"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c2"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c3"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c4"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c5"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c6"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c7"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c8"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c9"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c10"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c11"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.c12"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.canual" disabled></td>
                                </tr>
                                <tr>
                                  <th scope="row">Participantes</th>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.p1"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.p2"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.p3"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.p4"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.p5"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.p6"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.p7"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.p8"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.p9"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.p10"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.p11"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.p12"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.panual" disabled></td>
                                </tr>
                                <tr>
                                  <th scope="row">Horas</th>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.h1"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.h2"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.h3"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.h4"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.h5"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.h6"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.h7"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.h8"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.h9"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.h10"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.h11"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.h12"></td>
                                  <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$loop->index}}.hanual" disabled></td>
                                </tr>
                              </tbody>
                        </table>
                    </div>
                    <div class="d-grid pb-3 pt-3 col-2 mx-auto">
                        <button class="btn bg-danger-subtle" wire:click="delete({{$loop->index}})">Eliminar meta</button>
                    </div>
                </div>
                @endforeach
            </div>
            <!--Botones-->
            <div class="d-grid gap-3 pt-4 col-2 mx-auto">
                <button class="btn bg-info-subtle" wire:click="agregarMeta()">Agregar meta</button>
                <button class="btn bg-info" wire:click="save()">Registrar</button>
            </div>
        </div>




    </div>
    <br>

    
</div>
