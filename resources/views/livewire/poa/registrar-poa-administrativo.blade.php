
<div class="container-fluid" style="background-color:#">
    <style>
        
    .rz-card {
                background-color: #35d7f8;
                border: 1px solid #dee2e6;
                border-radius: 8px;
                padding: 20px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                transition: transform 0.2s;
    }
    .rz-card1 {
                background-color: #a8e8f5;
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
            <h2>Registrar nuevo POA</h2>
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
                        <select class="form-select" wire:model="componenteSeleccionado"  wire:change="actualizarLineasEstrategicas">
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

        <div class="container-fluid d-flex justify-content-center">
            <div class="rz-card1 card" style="width: 85%;">
                <!-- Navegación por pestañas -->
                <ul class="nav nav-tabs" id="metaTabs" role="tablist">
                    @foreach($listaMetas as $index => $meta)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link @if($index == $activeTabIndex) active @endif" id="tab{{$index}}" data-bs-toggle="tab" data-bs-target="#meta{{$index}}" type="button" role="tab" aria-controls="meta{{$index}}" aria-selected="@if($index == $activeTabIndex) true @else false @endif">Meta {{$index+1}}</button>
                   <!-- Botones -->
        
                    </li>
                    @endforeach
                    <div class="ms-2">
                        <button type="button" class="btn btn-success me-2" wire:click="agregarMeta()">Agregar meta</button>
                        <button type="button" class="btn btn-warning" wire:click="save()">Registrar</button>
                    </div>
                </ul>

                <!-- Contenido de las pestañas -->
                <div class="tab-content" id="metaTabsContent">
                    @foreach($listaMetas as $index => $meta)
                    <div class="tab-pane fade @if($index == $activeTabIndex) show active @endif" id="meta{{$index}}" role="tabpanel" aria-labelledby="tab{{$index}}">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <b>Número línea</b>
                                    <select class="form-select" wire:model="listaMetas.{{$index}}.numLinea" wire:change="mostrarDescripcionLinea({{$index}})">
                                        <option value="">Seleccione el número de línea</option>
                                        @foreach($lineasEstrategicas as $linea)
                                        <option value="{{ $linea->id }}">{{ $linea->numero }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-7 col-sm-6">
                                    <b>Descripción Línea Estratégica:</b>
                                    <textarea class="form-control" rows="3" disabled>{{ $meta['descripcionLinea'] ?? '' }}</textarea>
                                </div>
                                <div class="col-md-3 col-sm-6 mt-2 mt-md-0">
                                    <b>Código Meta</b>
                                    <input type="text" class="form-control" wire:model="listaMetas.{{$index}}.codigo">
                                </div>
                                <div class="col-md-7 col-sm-6 mt-2 mt-md-0">
                                    <b>Descripción Meta</b>
                                    <textarea class="form-control" rows="3" wire:model="listaMetas.{{$index}}.descripcion"></textarea>
                                </div>
                            </div>

                            <!-- Programación de meta -->
                            <div class="table-responsive mt-3">
                                <table class="table table-striped table-bordered table-hover table-sm">
                                    <thead>
                                        <tr class="text-center">
                                            <th colspan="1"></th>
                                            <th style="border-left: 2px solid black;" colspan="3">Trimestre 1</th>
                                            <th style="border-left: 2px solid black;" colspan="3">Trimestre 2</th>
                                            <th style="border-left: 2px solid black;" colspan="3">Trimestre 3</th>
                                            <th style="border-left: 2px solid black;" colspan="3">Trimestre 4</th>
                                            <th style="border-left: 2px solid black;" colspan="3">Programación</th>
                                        </tr>
                                        <tr>
                                            <th class="text-center">Unidad Medida</th>
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
                                    <tbody>
                                        <tr>
                                            <td><textarea class="form-control" wire:model="listaMetas.{{$index}}.unidadMedida"></textarea></td>
                                            <td style="border-left: 2px solid black;"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$index}}.m1" wire:keydown="programacionAnual({{$index}})" wire:click="programacionAnual({{$index}})"></td>
                                            <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$index}}.m2" wire:keydown="programacionAnual({{$index}})" wire:click="programacionAnual({{$index}})"></td>
                                            <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$index}}.m3" wire:keydown="programacionAnual({{$index}})" wire:click="programacionAnual({{$index}})"></td>
                                            <td style="border-left: 2px solid black;"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$index}}.m4" wire:keydown="programacionAnual({{$index}})" wire:click="programacionAnual({{$index}})"></td>
                                            <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$index}}.m5" wire:keydown="programacionAnual({{$index}})" wire:click="programacionAnual({{$index}})"></td>
                                            <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$index}}.m6" wire:keydown="programacionAnual({{$index}})" wire:click="programacionAnual({{$index}})"></td>
                                            <td style="border-left: 2px solid black;"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$index}}.m7" wire:keydown="programacionAnual({{$index}})" wire:click="programacionAnual({{$index}})"></td>
                                            <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$index}}.m8" wire:keydown="programacionAnual({{$index}})" wire:click="programacionAnual({{$index}})"></td>
                                            <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$index}}.m9" wire:keydown="programacionAnual({{$index}})" wire:click="programacionAnual({{$index}})"></td>
                                            <td style="border-left: 2px solid black;"><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$index}}.m10" wire:keydown="programacionAnual({{$index}})" wire:click="programacionAnual({{$index}})"></td>
                                            <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$index}}.m11" wire:keydown="programacionAnual({{$index}})" wire:click="programacionAnual({{$index}})"></td>
                                            <td><input type="number" min="0" max="50" class="form-control" wire:model="listaMetas.{{$index}}.m12" wire:keydown="programacionAnual({{$index}})" wire:click="programacionAnual({{$index}})"></td>
                                            <td style="border-left: 2px solid black;"><input type="number" min="0" max="50" class="form-control" wire:model="listaTotalAnual.{{$index}}" disabled></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="d-grid pb-3 pt-3 col-2 mx-auto">
                                <button type="button" class="btn btn-danger" wire:click="delete({{$index}})">Eliminar meta</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>


        

        </div>

</div>
