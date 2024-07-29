<div>

    <style>
        .rz-card {
                background-color: #f8f9fa; /* Color de fondo personalizado */
                border: 1px solid #dee2e6; /* Borde personalizado */
                border-radius: 8px; /* Bordes redondeados */
                padding: 20px; /* Espaciado interno */
                margin: 60px; /* Margen externo para separarlo de los bordes */
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

    <div class="rz-card card">
        <div class="row">

            <div class="col-md-12 mb-1">
                <div class="row">
                    <div class="col-md-10">
                        <h5 class="centrarTexto">SISTEMA DE GESTIÓN DE CALIDAD</h5>
                        <h5 class="centrarTexto">PLANIFICACIÓN Y PRESUPUESTO</h5>
                        <label class="centrarLabel">Formato Presupuesto Institucional por Unidades Operativas</label>
                    </div>
                    <div class="col-md-2">
                        <label class="centrarLabel">PP-FO-027</label>
                        <label class="centrarLabel">VERSIÓN 2</label>
                        <label class="centrarLabel">FECHA 5/8/2022</label>
                    </div>
                </div>  
                <br> <label><b>Nombre de la unidad:</b> 1005 Unidad Ingeniería y Mantenimiento</label>
                <br><label><b>Responsable de la unidad:</b></label>
             
            </div>

            <table id="tableDetallePresupuesto" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th width="80">GRUPO /SUB/GR.</th>
                        <th class="centrarTexto" >DESCRIPCIÓN DEL GASTO</th>
                        <th>VALOR LEMPIRAS</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($renglones as $renglon)
                    <tr class="{{ in_array($renglon['grupo'], [10000, 20000]) ? 'fila-negrita' : '' }}">
                        <td>{{ $renglon['grupo'] }}</td>
                        <td>{{ $renglon['descripcion'] }}</td>
                        <td>{{ $renglon['valor'] }}</td>
                    </tr>
                @endforeach
                    
                </tbody>
            </table>
        </div>

    </div>
    <button href="{{route('programacion.presupuesto.editar')}}" wire:navigate>Editar</button>

    <script>
        $(document).ready(function() {
            $('#tableDetallePresupuesto').DataTable({
                dom: 'Bfrtip',
                buttons: [
                        'copy', 'excel', 'print'
                ],
                ordering: false, // Desactiva la ordenación de los datos
                language: {
                    "sProcessing":     "Procesando...",
                    "sLengthMenu":     "Mostrar _MENU_ registros",
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                    "sSearch":         "Buscar:",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst":    "Primero",
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "buttons": {
                        "copy": "Copiar",
                        "excel": "Excel",
                        "print": "Imprimir"
                    }
                }
            });
        });
    </script>
    
</div>
