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
        <h3 class="text-center">REGISTRAR PACC</h3>
        <div class="rz-card card">
            <div class="row">
                
                <table class="table table-striped table-hover table-bordered border-dark-subtle">
                    <thead>
                        <tr class="centrarTexto">
                            <th colspan="6" width="50%" >PLAN ANUAL DE COMPRAS Y CONTRATACIONES</th>
                        </tr>
                        <tr class="centrarTexto">
                            <th colspan="2" width="50%" >ACTIVIDAD PRESUPUESTARIA</th>
                            <th colspan="4" widtg="50%" >8217</th>
                            
                        </tr>
                        <tr class="centrarTexto">
                            <th colspan="2" width="50%">UNIDAD EJECUTORA</th>
                            <th colspan="4" widtg="50%" >UAPA OLANCHITO</th>
                            
                        </tr>
                        <tr>
                            <th width="10%">RENGLÓN PRESUPUESTARIA</th>
                            <th widtg="65%" class="centrarTexto" >DESCRIPCIÓN DE COMPRA</th>
                            <th width="15%">UNIDAD </th>
                            <th width="10%">MONTO ESTIMADO SEGÚN POA</th>
                            <th width="10%">FECHA ESTIMADA PARA RECEPCIÓN DEL BIEN</th>
                            <th width="10%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($renglones as $renglon)
                        <tr>
                            <td><input type="number" class="form-control" wire:model="renglones.{{$loop->index}}.renglopresupuestario"></td>
                            <td><input type="text" class="form-control" wire:model="renglones.{{$loop->index}}.descripciondecompra"></td>
                            <td><input type="text" class="form-control" wire:model="renglones.{{$loop->index}}.unidad"></td>
                            <td><input type="number" class="form-control" wire:model="renglones.{{$loop->index}}.montoestimadosegunpoa"></td>
                            <td><input type="date" class="form-control" wire:model="renglones.{{$loop->index}}.fechaestimadapararecepciondelbien"></td>
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

