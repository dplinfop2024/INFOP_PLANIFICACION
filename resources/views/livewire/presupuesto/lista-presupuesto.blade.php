<div>
    <style>
        .rz-card {
                background-color: #f8f9fa; /* Color de fondo personalizado */
                border: 1px solid #dee2e6; /* Borde personalizado */
                border-radius: 8px; /* Bordes redondeados */
                padding: 20px; /* Espaciado interno */
                margin: 50px; /* Margen externo para separarlo de los bordes */
        }
        .centrarTexto {
            text-align: center;
        }
        .table th {
            background-color: #00e5e5; /* Cambia el color del enacabezado de la tabla */
        }


    </style>
    <h1 class="centrarTexto">Listado de Presupuestos</h1>
    <div class="rz-card card">
        <div class="row">

            <table id="tableListaPresupuesto" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th width="80">CÓDIGO</th>
                        <th class="centrarTexto" >NOMBRE DE LA UNIDAD</th>
                        <th>AÑOS</th>
                        <th>FECHA</th>
                        <th>VER</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($presupuestos as $presupuesto)
                        <tr>
                            <td>{{$presupuesto->get_id_unidad()}}</td>
                            <td>{{ $presupuesto->id_usuarii }}</td>
                            <td>{{ $presupuesto->total }}</td>
                            <td>{{ $presupuesto->created_at }}</td>
                            <td><button type="button" onclick="window.location.href='{{ route('presupuesto.ver') }}'" class="btn btn-warning">Detalles</button></td>
                        </tr>
                    @endforeach
                 
                </tbody>
            </table>


        </div>	
    </div>
    <script>
        $(document).ready(function() {
            $('#tableListaPresupuesto').DataTable({
                dom: 'Bfrtip',
                buttons: [
                        'copy', 'excel', 'print'
                ],
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
                        "pdf": "PDF",
                        "print": "Imprimir"
                    }
                }
            });
        });
    </script>

</div>