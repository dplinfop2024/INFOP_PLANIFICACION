
<div class="container-fluid" style="background-color:#">
    <style>
        

        .table-responsive {
        overflow-x: auto;
    }

    .table-info {
        background-color: #d5dce2;
    }

    .table-sm th, .table-sm td {
        padding: 0.3rem;
    }

    .table-group-divider {
        border-top: 2px solid #dee2e6;
    }
    .rz-card {
                background-color: #35d7f8;
                border: 1px solid #dee2e6;
                border-radius: 8px;
                padding: 20px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                transition: transform 0.2s;
    }
    .rz-card1 {
                background-color: #a6edfc;
                border: 1px solid #dee2e6;
                border-radius: 8px;
                padding: 20px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                transition: transform 0.2s;
    }


    </style>  
    <br>

   
        <!--Encabezado formulario POA-->
        <div class="text-center pt-3">
            <h2>Registrar POA Operativo</h2>
        </div>
        
        
        <!--Información general de POA-->
        <div class="d-flex justify-content-center">
            <div class="rz-card card" style="width: 85%" >
                <div class="row">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('warning'))
                        <div class="alert alert-warning">
                            {{ session('warning') }}
                        </div>
                    @endif
                    @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                     @endif
            
                    <div class="col-md-4">
                        <b>Nombre Unidad</b>
                        <input type="text" class="form-control" wire:model="poaForm.nombreUnidad" disabled>
                    </div>
                    <div class="col-md-4">
                        <b>Nombre Responsable</b>
                        <input type="email" class="form-control input-btn-border-width" wire:model="poaForm.responsable" disabled>
                    </div>
                    <div class="col-md-4">
                        <b>Cargo</b>
                        <input type="text" class="form-control" wire:model="poaForm.cargoResponsable" disabled>
                    </div>
                
                    <div class="col-md-4">
                        <b>Actividad</b>
                        <input type="text" class="form-control input-btn-border-width" wire:model="poaForm.actividad" disabled>
                    </div>
                    <div class="col-md-4">
                        <b>Año</label></b>
                        <input type="text" class="form-control input-btn-border-width" wire:model="currentYear" disabled>
                    </div>
                    <div class="col-md-4">
                        <b>Componente:</b>
                        <select class="form-select" wire:model="componenteSeleccionado" wire:change="actualizarLineasEstrategicas">
                                <option value="">Seleccione un componente</option>
                            @foreach($componentes as $componente)
                                <option value="{{ $componente->id }}">{{ $componente->id }}. {{ $componente->nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
            </div>
        </div>
        <!--Metas POA-->
        <div class="text-center pt-3">
            <h2>Metas</h2>
        </div>
        <div class="row">

        <div class="d-flex justify-content-center">
            <div class="rz-card1 card" style="width: 85%" >
                <!-- Navegación por pestañas -->
                <ul class="nav nav-tabs" id="metaTabs" role="tablist">
                    @foreach($listaMetas as $index => $meta)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link @if($index == $activeTabIndex) active @endif" id="tab{{$index}}" data-bs-toggle="tab" data-bs-target="#meta{{$index}}" type="button" role="tab" aria-controls="meta{{$index}}" aria-selected="@if($index == $activeTabIndex) true @else false @endif">Meta {{$index+1}}</button>
                    </li>
                    @endforeach
                </ul>

                <!-- Contenido de las pestañas -->
                <div class="tab-content" id="metaTabsContent">
                    @foreach($listaMetas as $index => $meta)
                    <div class="tab-pane fade @if($index == $activeTabIndex) show active @endif" id="meta{{$index}}" role="tabpanel" aria-labelledby="tab{{$index}}">
                    <div class="d-flex justify-content-center">
                        <div class="" >
                            <br> <!-- <h5>Meta {{$index+1}}</h5> -->
                                <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-2">
                                            <b>Número línea</b>
                                            <select class="form-select" wire:model="listaMetas.{{$index}}.numLinea" wire:change="actualizarDescripcionLinea({{ $index }})"><>
                                                <option value="">seleccione número de línea</option>
                                                @foreach($lineasEstrategicas as $linea)
                                                    <option value="{{ $linea->id }}">{{ $linea->numero }}</option>
                                                @endforeach
                                            </select>
                                            <br>
                                            <br>
                                            <b>Número Meta</b>
                                            <input type="text" class="form-control"  wire:model="listaMetas.{{$index}}.codigo">
                                        
                                        </div>
                                    
                                        <div class="col-md-5">
                                            <b>Descripción Linea Estrategica</b>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model.defer="descripcionLineaSeleccionada" disabled></textarea>
                                            <b>Descripción Meta</b>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  wire:model="listaMetas.{{$index}}.descripcion"></textarea>
                                        </div>
                                        <div class="col-md-2">
                                            <b>Unidad De Medida</b>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" wire:model="listaMetas.{{$index}}.unidadMedida"></textarea>
                                            <br>
                                            <b>Presupuesto De Meta</b>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" wire:model="listaMetas.{{$index}}.presupuestoMeta"></textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <!-- Programación de meta -->
                                    <div class="table-responsive">
                                        <table class="table-info table-sm">
                                            <thead>
                                                <tr class="text-center">

                                                    <th></th>
                                                    <th style="border-left: 2px solid black;" colspan="3">Trimestre 1</th>
                                                    <th style="border-left: 2px solid black;" colspan="3">Trimestre 2</th>
                                                    <th style="border-left: 2px solid black;" colspan="3">Trimestre 3</th>
                                                    <th style="border-left: 2px solid black;" colspan="3">Trimestre 4</th>
                                                    <th style="border-left: 2px solid black;" colspan="3">Programación</th>
                                                    <th></th>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <th style="border-left: 2px solid black;" class="text-center">Ene</th>
                                                    <th class="text-center">Feb</th>
                                                    <th class="text-center">Mar</th>
                                                    <th style="border-left: 2px solid black;" class="text-center">Abr</th>
                                                    <th class="text-center">May</th>
                                                    <th class="text-center">Jun</th>
                                                    <th style="border-left: 2px solid black;" class="text-center">Jul</th>
                                                    <th class="text-center">Ago</th>
                                                    <th class="text-center">Sep</th>
                                                    <th style="border-left: 2px solid black;" class="text-center">Oct</th>
                                                    <th class="text-center">Nov</th>
                                                    <th class="text-center">Dic</th>
                                                    <th style="border-left: 2px solid black;" class="text-center">Anual</th>
                                    
                                                </tr>
                                            </thead>
                                            <tbody class="table-group-divider">
                                                
                                                <tr>
                                                    <th scope="row">Cursos</th> 
                                                    <td style="border-left: 2px solid black;"><input type="number" min="0" max="50" class="form-control" wire:model="cursos.{{$index}}.m1"wire:keydown="progra_curso({{$index}})" wire:click="progra_curso({{$index}})"></td>
                                                    <td ><input type="number" min="0" max="50" class="form-control" wire:model="cursos.{{$index}}.m2"wire:keydown="progra_curso({{$index}})" wire:click="progra_curso({{$index}})"></td>
                                                    <td><input type="number" min="0" max="50" class="form-control" wire:model="cursos.{{$index}}.m3"wire:keydown="progra_curso({{$index}})" wire:click="progra_curso({{$index}})"></td>
                                                    <td style="border-left: 2px solid black;"><input type="number" min="0" max="50" class="form-control" wire:model="cursos.{{$index}}.m4"wire:keydown="progra_curso({{$index}})" wire:click="progra_curso({{$index}})"></td>
                                                    <td><input type="number" min="0" max="50" class="form-control" wire:model="cursos.{{$index}}.m5"wire:keydown="progra_curso({{$index}})" wire:click="progra_curso({{$index}})"></td>
                                                    <td><input type="number" min="0" max="50" class="form-control" wire:model="cursos.{{$index}}.m6"wire:keydown="progra_curso({{$index}})" wire:click="progra_curso({{$index}})"></td>
                                                    <td style="border-left: 2px solid black;"><input type="number" min="0" max="50" class="form-control" wire:model="cursos.{{$index}}.m7"wire:keydown="progra_curso({{$index}})" wire:click="progra_curso({{$index}})"></td>
                                                    <td><input type="number" min="0" max="50" class="form-control" wire:model="cursos.{{$index}}.m8"wire:keydown="progra_curso({{$index}})" wire:click="progra_curso({{$index}})"></td>
                                                    <td><input type="number" min="0" max="50" class="form-control" wire:model="cursos.{{$index}}.m9"wire:keydown="progra_curso({{$index}})" wire:click="progra_curso({{$index}})"></td>
                                                    <td style="border-left: 2px solid black;"><input type="number" min="0" max="50" class="form-control" wire:model="cursos.{{$index}}.m10"wire:keydown="progra_curso({{$index}})" wire:click="progra_curso({{$index}})"></td>
                                                    <td><input type="number" min="0" max="50" class="form-control" wire:model="cursos.{{$index}}.m11"wire:keydown="progra_curso({{$index}})" wire:click="progra_curso({{$index}})"></td>
                                                    <td><input type="number" min="0" max="50" class="form-control" wire:model="cursos.{{$index}}.m12"wire:keydown="progra_curso({{$index}})" wire:click="progra_curso({{$index}})"></td>
                                                    <td style="border-left: 2px solid black;"><input type="number" min="0" max="50" class="form-control" wire:model="listaTotal_curso.{{$index}}"disabled></td>
                    
                                                </tr>
                                                <!--Participantes-->
                                                <tr>
                                                    <th scope="row">Participantes</th>
                                                    <td style="border-left: 2px solid black;"><input type="number" min="0" max="50" class="form-control" wire:model="participantes.{{$index}}.m1"wire:keydown="progra_participantes({{$index}})" wire:click="progra_participantes({{$index}})"></td>
                                                    <td><input type="number" min="0" max="50" class="form-control" wire:model="participantes.{{$index}}.m2"wire:keydown="progra_participantes({{$index}})" wire:click="progra_participantes({{$index}})"></td>
                                                    <td><input type="number" min="0" max="50" class="form-control" wire:model="participantes.{{$index}}.m3"wire:keydown="progra_participantes({{$index}})" wire:click="progra_participantes({{$index}})"></td>
                                                    <td style="border-left: 2px solid black;"><input type="number" min="0" max="50" class="form-control" wire:model="participantes.{{$index}}.m4"wire:keydown="progra_participantes({{$index}})" wire:click="progra_participantes({{$index}})"></td>
                                                    <td><input type="number" min="0" max="50" class="form-control" wire:model="participantes.{{$index}}.m5"wire:keydown="progra_participantes({{$index}})" wire:click="progra_participantes({{$index}})"></td>
                                                    <td><input type="number" min="0" max="50" class="form-control" wire:model="participantes.{{$index}}.m6"wire:keydown="progra_participantes({{$index}})" wire:click="progra_participantes({{$index}})"></td>
                                                    <td style="border-left: 2px solid black;"><input type="number" min="0" max="50" class="form-control" wire:model="participantes.{{$index}}.m7"wire:keydown="progra_participantes({{$index}})" wire:click="progra_participantes({{$index}})"></td>
                                                    <td><input type="number" min="0" max="50" class="form-control" wire:model="participantes.{{$index}}.m8"wire:keydown="progra_participantes({{$index}})" wire:click="progra_participantes({{$index}})"></td>
                                                    <td><input type="number" min="0" max="50" class="form-control" wire:model="participantes.{{$index}}.m9"wire:keydown="progra_participantes({{$index}})" wire:click="progra_participantes({{$index}})"></td>
                                                    <td style="border-left: 2px solid black;"><input type="number" min="0" max="50" class="form-control" wire:model="participantes.{{$index}}.m10"wire:keydown="progra_participantes({{$index}})" wire:click="progra_participantes({{$index}})"></td>
                                                    <td><input type="number" min="0" max="50" class="form-control" wire:model="participantes.{{$index}}.m11"wire:keydown="progra_participantes({{$index}})" wire:click="progra_participantes({{$index}})"></td>
                                                    <td><input type="number" min="0" max="50" class="form-control" wire:model="participantes.{{$index}}.m12"wire:keydown="progra_participantes({{$index}})" wire:click="progra_participantes({{$index}})"></td>
                                                    <td style="border-left: 2px solid black;"><input type="number" min="0" max="50" class="form-control" wire:model="listaTotal_participantes.{{$index}}"disabled></td>
                                                    
                                                </tr>
                                                <!--Horas-->
                                                <tr>
                                                    <th scope="row">Horas</th>  
                                                    <td style="border-left: 2px solid black;"><input type="number" min="0" max="50" class="form-control" wire:model="horas.{{$index}}.m1"wire:keydown="progra_horas({{$index}})" wire:click="progra_horas({{$index}})"></td>
                                                    <td><input type="number" min="0" max="50" class="form-control" wire:model="horas.{{$index}}.m2"wire:keydown="progra_horas({{$index}})" wire:click="progra_horas({{$index}})"></td>
                                                    <td><input type="number" min="0" max="50" class="form-control" wire:model="horas.{{$index}}.m3"wire:keydown="progra_horas({{$index}})" wire:click="progra_horas({{$index}})"></td>
                                                    <td style="border-left: 2px solid black;"><input type="number" min="0" max="50" class="form-control" wire:model="horas.{{$index}}.m4"wire:keydown="progra_horas({{$index}})" wire:click="progra_horas({{$index}})"></td>
                                                    <td><input type="number" min="0" max="50" class="form-control" wire:model="horas.{{$index}}.m5"wire:keydown="progra_horas({{$index}})" wire:click="progra_horas({{$index}})"></td>
                                                    <td><input type="number" min="0" max="50" class="form-control" wire:model="horas.{{$index}}.m6"wire:keydown="progra_horas({{$index}})" wire:click="progra_horas({{$index}})"></td>
                                                    <td style="border-left: 2px solid black;"><input type="number" min="0" max="50" class="form-control" wire:model="horas.{{$index}}.m7"wire:keydown="progra_horas({{$index}})" wire:click="progra_horas({{$index}})"></td>
                                                    <td><input type="number" min="0" max="50" class="form-control" wire:model="horas.{{$index}}.m8"wire:keydown="progra_horas({{$index}})" wire:click="progra_horas({{$index}})"></td>
                                                    <td><input type="number" min="0" max="50" class="form-control" wire:model="horas.{{$index}}.m9"wire:keydown="progra_horas({{$index}})" wire:click="progra_horas({{$index}})"></td>
                                                    <td style="border-left: 2px solid black;"><input type="number" min="0" max="50" class="form-control" wire:model="horas.{{$index}}.m10"wire:keydown="progra_horas({{$index}})" wire:click="progra_horas({{$index}})"></td>
                                                    <td><input type="number" min="0" max="50" class="form-control" wire:model="horas.{{$index}}.m11"wire:keydown="progra_horas({{$index}})" wire:click="progra_horas({{$index}})"></td>
                                                    <td><input type="number" min="0" max="50" class="form-control" wire:model="horas.{{$index}}.m12"wire:keydown="progra_horas({{$index}})" wire:click="progra_horas({{$index}})"></td>
                                                    <td style="border-left: 2px solid black;"><input type="number" min="0" max="50" class="form-control"wire:model="listaTotal_horas.{{$index}}"disabled></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-grid pb-3 pt-3 col-2 mx-auto">
                                        <button class="btn bg-danger-subtle" wire:click="delete({{$index}})">Eliminar meta</button>
                                    </div>
                            
                            </div>

                        </div>
                    </div> <!-- d-flex justify-content-center -->
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Botones -->
        <div class="d-grid gap-3 pt-4 col-2 mx-auto">
            <button class="btn" style="background-color:#38D6EE" wire:click="agregarMeta()">Agregar meta</button>
            <button class="btn" style="background-color:#38D6EE" wire:click="save()">Registrar</button>
        </div>

        </div>

</div>
