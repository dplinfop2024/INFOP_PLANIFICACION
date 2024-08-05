<div>
    <div>

        <style>
            .rz-card {
                    background-color: #f8f9fa; /* Color de fondo personalizado */
                    border: 1px solid #dee2e6; /* Borde personalizado */
                    border-radius: 8px; /* Bordes redondeados */
                    padding: 20px; /* Espaciado interno */
                    margin: 20px; /* Margen externo para separarlo de los bordes */
            }
            .centrarTexto {
                text-align: center;
            }
            .centrarLabel {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                /* height: 100vh; /* Esto es opcional, dependiendo de cómo quieras centrar el label */
            }
            .table th {
                background-color: #00e5e5; /* Cambia el color del enacabezado de la tabla */
            }
            .fila-negrita {
                font-weight: bold; /* Aplica negrita a la fila */
            }
        </style>
        <h3 class="text-center">Registrar Presupuesto</h3>
        <div class="rz-card card">
            <div class="row">
                <div class="col-md-12 mb-1">
                    <div class="row">
                        <div class="col-8">
                            <br> <label><b>Nombre de la unidad:</b> 1005 Unidad Ingeniería y Mantenimiento</label>
                            <br><label><b>Responsable de la unidad:</b></label>
                        </div>
                        <div class="col-4">
                            <br><label><b>Fecha: </b>5/8/2022</label>
                        </div>
                    </div>
                 
                </div>
    
                <table class="table table-striped table-hover table-bordered border-dark-subtle">
                    <thead>
                        <tr>
                            <th width="10%">GRUPO /SUB/GR</th>
                            <th widtg="65%" class="centrarTexto" >DESCRIPCIÓN DEL GASTO</th>
                            <th width="15%">VALOR LEMPIRAS</th>
                            <th width="10%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($renglones as $renglon)
                        <tr>
                            <td><input type="number" class="form-control" wire:model="renglones.{{$loop->index}}.subgrupo"></td>
                            <td><input type="text" class="form-control" wire:model="renglones.{{$loop->index}}.detalles"></td>
                            <td><input type="number" class="form-control" wire:model="renglones.{{$loop->index}}.valor"></td>
                            <td class="text-center"><button class="btn bg-danger-subtle" wire:click="borrarRenglon({{$loop->index}})">Eliminar</button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    
        </div>
        
        <!--Botones-->
        <div class="d-grid gap-3 pt-4 col-2 mx-auto">
            <button class="btn bg-info-subtle" wire:click="agregarRenglon()">Agregar renglon</button>
            <button class="btn bg-info" wire:click="registrarPresupuesto">Registrar</button>
        </div>
    
        
    </div>
    
</div>
