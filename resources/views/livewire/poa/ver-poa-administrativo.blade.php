<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlace a la hoja de estilos de Bootstrap 5.3 -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos personalizados -->
    <style>
        .custom-margin {
            margin: 20px; /* Margen alrededor de la tabla */
        }
        .text-justify {
            text-align: justify; /* Justifica el texto */
        }
        .border-gray {
            border-color: gray !important; /* Cambia el color de los bordes a gris */
        }
        .small-font {
            font-size: 10px; /* Cambia el tamaño de la fuente */
        }
        .footer-info {
            font-size: 0.8em; /* Tamaño de fuente más pequeño para la información adicional */
            margin-top: 20px; /* Espaciado superior */
        }
        .footer-info label {
            display: inline-block;
            width: 200px; /* Ancho fijo para alinear las etiquetas */
        }
        .footer-info input {
            border: 1px solid #ccc; /* Borde para los campos de entrada */
            width: 150px; /* Ancho de los campos de entrada */
            margin-right: 10px; /* Espaciado entre campos */
        }
    </style>
    <title>Plan Operativo de Administracion</title>
</head>
<body>

<div>
    <h5 class="text-center">PLAN OPERATIVO PRESUPUESTO</h5>
    <h6 class="text-center">Matriz de Planificacion Unidades Operativas</h6>
    <h6 class="text-center">Año {{$poa->anio}}</h6>

    
    <table class="table table-borderless">
        <thead>
          <tr class= "small-font">
            <th scope="col">
              <div class="table-title ">
                    <label><b>Nombre de la Unidad:</b> {{$user->nombre_unidad}} </label> 
                    <br><label><b>Actividad:</b> {{$user->id_unidad}}</label></br>
              </div>
            </th>
            <th scope="col">
              <label><b>Nombre Responsable: {{$user->nombre}}</b> </label> 
              <br><label><b>Cargo: {{$cargo->nombre}}</b> </label></br>
            </th>
            <th scope="col"> 
                
                <label><b></b>PP-FO-013 </label>
                <br><label><b>VERSION:</b>04 </label></br>
              <label><b>Fecha:</b>{{date_format($poa->updated_at, "y/m/d")}} </label>
              <br><label><b></b></label> <br></th>
            </tr>
        </thead>
      </table>
    

   

    <table class="table table-bordered border border-gray small-font">
        <!-- EN CABEZADO DE LA TABLA -->
        <thead class="table-primary text-center">
            <tr>
                <th colspan="2" scope="col">COMPONENTE</th>
                <th colspan="2" scope="col">LINEA ESTRATEGIA</th>
                <th colspan="2" scope="col">META</th>
                <th rowspan="0" scope="col">UNIDAD DE MEDIDA</th>
                <th colspan="3" scope="col">1° TRIMESTRE</th>
                <th colspan="3" scope="col">2° TRIMESTRE</th>
                <th colspan="3" scope="col">3° TRIMESTRE</th>
                <th colspan="3" scope="col">4° TRIMESTRE</th>
                <th scope="col">PROGRAMACION</th>
                <th rowspan="0">Presupuesto estimado por Meta</th>
            </tr>
            <tr>
                <th scope="col">Numero</th>
                <th scope="col">Nombre</th>
                <th scope="col">Numero</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Codigo</th>
                <th scope="col">Resultado de Produccion</th>
                <th colspan="0" scope="col">1</th>   
                <th scope="col">2</th>
                <th scope="col">3</th>
                <th scope="col">4</th>
                <th scope="col">5</th>
                <th scope="col">6</th>
                <th scope="col">7</th>
                <th scope="col">8</th>
                <th scope="col">9</th>
                <th scope="col">10</th>
                <th scope="col">11</th>
                <th scope="col">12</th>
                <th scope="col">Anual</th>
            </tr>
        </thead>
        <!-- FILAS DE LA TABLA -->
        <tbody class="text-justify">

            @php

            $numero_Previo =null;
                

            @endphp

            @foreach($metas as $meta)
           
            <tr>
                @if($componente->numero !==$numero_Previo) 
                <th scope="row">{{$componente->numero}}</th>
                <td>{{$componente->nombre}}</td>
                <td>{{$componente->numero}}.{{$metas[$loop->index]->numero_linea()}}</td>
                <td>{{$metas[$loop->index]->descripcion_linea()}}</td>

                @else

                <th scope="row"> <th>
                <td></td>
                <td></td>
    
                @endif
                
                <td>{{$componente->numero}}.{{$metas[$loop->index]->numero_linea()}}.{{$meta->numero}}</td>
                <td>{{$meta->descripcion}}</td>
                <td>{{$meta->unidad_medida}}</td>

                 {{-- Meses--}}
                @foreach($meses[$loop->index] as $mes)
                <td>{{$mes}}</td>
                @endforeach


                <td>{{$meta->programacion_anual}}</td>
                <td>{{$meta->presupuesto_meta}}</td>
            </tr>

            @php
                
                $numero_Previo=$componente->numero;
            @endphp
             {{ $meta->numero }} - {{ $meta->name }}
            @endforeach
        </tbody>
    </table>
  
    <!-- Información adicional debajo de la tabla -->
    <div class="footer-info">
        <div class="info-item">
            <b>Validado por:</b> [Nombre del validador]
        </div>
        <div class="info-item">
            <b>Fecha de validación:</b> [__/__/____]
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
        <button class="btn btn-orange" href="{{ route('poa.editar.administrativo') }}" wire:navigate>
            Editar
        </button>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    
</body>
</html>
