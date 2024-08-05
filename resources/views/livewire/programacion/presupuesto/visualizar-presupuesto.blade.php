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
                        <label class="centrarLabel">FECHA {{date_format($presupuesto->updated_at,"d/m/y")}}</label>
                    </div>
                </div>  
                <br> <label><b>Nombre de la unidad:</b> {{$usuario->id_unidad}} {{$usuario->nombre_unidad}}</label>
                <br><label><b>Responsable de la unidad:</b> {{$usuario->nombre}}</label>
             
            </div>

            <table id="tableDetallePresupuesto" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th width="80">GRUPO /SUB/GR.</th>
                        <th class="centrarTexto" >DESCRIPCIÓN DEL GASTO {{$presupuesto->anio}}</th>
                        <th>VALOR LEMPIRAS</th>
                    </tr>
                </thead>
                <tbody>
                
                <!--Imprimir todos los elementos de la lista subgrupos-->
                @foreach($subgrupos as $renglon)
                    <tr>
                        <td>{{$renglon->numero}}</td>
                        <td>{{$renglon->nombre}}</td>
                        <td>
                             <!--Recorrer la lista de gastos-->
                         @foreach($gastospresupuestos as $gasto) 
                          <!--comparar si el gasto pertenece a este subgrupo-->
                          @if($renglon->id === $gasto->id_subgrupo)
                           <!--Si e gasto pertenece al subgrupo se imprime el valor-->
                          {{$gasto->valor}}
                          @endif
                         @endforeach 
                        </td>
                    </tr>
                @endforeach
                 <!--Imprimiendo Total de presupuesto-->
                <tr class="fila-negrita">
                    <td></td>
                    <td>Total</td>
                    <td>{{$presupuesto->total}}</td>
                </tr>
                    
                </tbody>
            </table>
        </div>

    </div>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Botón Centrado</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
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
    <div class="container text-center mt-5">
        <button class="btn btn-orange" href="{{ route('programacion.presupuesto.editar') }}" wire:navigate>
            Editar
        </button>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
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
