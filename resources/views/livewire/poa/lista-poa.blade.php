<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla con DataTables</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css" rel="stylesheet">
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
            <table id="tableListaPresupuesto" class="table table-bordered table-hover dt-responsive">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">No de Actividad</th>
                        <th scope="col">Nombre Unidad</th>
                        <th scope="col">Tipo Unidad</th>
                        <th scope="col">Año</th>
                        <th scope="col">Estado</th>
                       <!-- <th scope="col">Aprobado</th>-->
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
                        <td>{{$poa->estado}}</td>
                        
                        <td><a href="{{ route('poa.ver.administrativo') }}" class="btn btn-warning">Detalles</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $('#tableListaPresupuesto').DataTable({
                responsive: true,
                dom: 'Bfrtip',
                buttons: [], // Aquí hemos eliminado todos los botones
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
                    }
                }
            });
        });
    </script>
</body>
</html>
