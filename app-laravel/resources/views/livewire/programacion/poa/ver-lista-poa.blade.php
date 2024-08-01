<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla con DataTables</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css" rel="stylesheet">
    <style>
        .btn-orange {
            background-color: #FFA500; /* Color naranja */
            border: 1px solid #FFA500; /* Borde del mismo color */
            color: white; /* Color del texto */
        }
        .btn-orange:hover {
            background-color: #ff8c00; /* Color de fondo cuando el mouse está sobre el botón */
            border: 1px solid #ff8c00; /* Borde cuando el mouse está sobre el botón */
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="table-responsive">
            <table id="tableListaPresupuesto" class="table table-bordered table-hover">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">No de Actividad</th>
                        <th scope="col">Nombre Unidad</th>
                        <th scope="col">Tipo Unidad</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Aceptado</th>
                        <th scope="col">Aprobado</th>
                        <th scope="col">Ver</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($poas as $poa)
                    <tr>
                        <th scope="row">{{$poa->get_numero_unidad()}}</th>
                        <td>{{$poa->get_nombre_unidad()}}</td>
                        <td>{{$poa->get_tipo_unidad()}}</td>
                        <td>{{$poa->anio}}</td>
                        <td>@if($poa->aceptado)Si @else No @endif</td>
                        <td>@if($poa->aprobado)Si @else No @endif</td>
                        <td><a href="{{ route('programacion.visualizarpoa') }}" class="btn btn-warning">Detalles</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.2.2/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.colVis.min.js"></script>
    
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
</body>
</html>
