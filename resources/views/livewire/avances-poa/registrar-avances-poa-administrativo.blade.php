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
    <title>Plan Operativo Anual</title>
</head>
<body>

<div>
    <h5 class="text-center">AVANCE TRIMESTRAL POA  {{$poa->anio}}</- 1º Trimestre</h5>
    <h6 class="text-center">Matriz de Planificacion Unidades Operativas</h6>
    <h6 class="text-center">Año {{$poa->anio}}</h6>

    
    <table class="table table-borderless" >
        <thead >
          <tr class= "small-font">
            <th scope="col">
              <div class="table-title ">
                    <label><b>Nombre de la Unidad:</b> Turismo </label> 
                    <br><label><b>Actividad:</b>  9252</label></br>
              </div>
            </th>
            <th scope="col" >
                <div class="table-title ">
              <label ><b>Nombre Responsable: Daysi Jannett Aranda</b> </label> 
              <br><label><b>Cargo: Jefe de departamento</b> </label></br>
            </div>
            </th>
             

                <th scope="col"> 
                    <label><b>Fecha:</b> -/-/-</label>  {{--  Cambiarse al registrarse el avance --}}
                    <br><label><b>Año:</b> {{$poa->anio}}</label> <br></th>

            <th scope="col"> 
               
                <button class="btn" style="background-color:#38D6EE" href=""> Guardar </button>
            </th>

            <th scope="col"> 
              
                <button class="btn" style= "background-color:#f0dd34"> Cancelar </button>
                    
            </th>
            </tr>
        </thead>
      </table>
    

   

    <table class="table table-bordered border border-gray small-font">
        <!-- EN CABEZADO DE LA TABLA -->
        <thead class="table-primary text-center">
            <tr class="border-gray">
                <th rowspan="2"scope="col">N° META</th>
                <th rowspan="2" scope="col">DESCRIPCION DE LAS METAS</th>
                <th  rowspan="2"scope="col">UNIDAD DE MEDIDA</th>
                <th rowspan="2" scope="col">PROGRAMACION ANUAL {{$poa->anio}} - 1° TRIMESTRE</th>
                <th colspan="2"  scope="col">EVALUACION DE LAS ACTIVIDADES</th>
                <th colspan="1" scope="col">% AVANCE TRIMESTRAL</th>
                <th rowspan="2" scope="col">OBSERVACIONES</th>
            
            </tr>
            <tr class="border-gray">
              
              
                
              
                <th scope="col">PROG. I TRIM.</th>
                <th scope="col">EJEC. I TRIM.</th>
                
                <th scope="col">ENERO-MARZO</th>
               
            </tr>
        </thead>
        <!-- FILAS DE LA TABLA -->
        <tbody class="text-justify">

            @php

            $mes_1 =null;
            $mes_2  =null ;
            $mes_3 =null;
            $mes_total =null;

            @endphp

            @foreach($metas as $meta)
           
            <tr>
                <td>{{$componente->numero}}.{{$metas[$loop->index]->numero_linea()}}.{{$meta->numero}}</td>
                <td>{{$meta->descripcion}}</td>
                <td>{{$meta->unidad_medida}}</td>

                <td>{{$meta->programacion_anual}}</td>



                {{--   Condicional IF por Trimestre                                            --}}


                @if($meta->get_trimestre_reporte_poa() ==1) 

                @php

                $mes_1 = $meta->programacion()->pluck('ene')->first() ;
                $mes_2  =$meta->programacion()->pluck('feb')->first() ;
                $mes_3 =$meta->programacion()->pluck('mar')->first() ;
                $mes_total = $mes_1 + $mes_2 + $mes_3;
    
                @endphp

                <td>{{$mes_total}}</td>

                @elseif($meta->get_trimestre_reporte_poa() ==2) 

                @php

                $mes_1 = $meta->programacion()->pluck('abr')->first() ;
                $mes_2  =$meta->programacion()->pluck('may')->first() ;
                $mes_3 =$meta->programacion()->pluck('jun')->first() ;
                $mes_total = $mes_1 + $mes_2 + $mes_3;
    
                @endphp

                <td>{{$mes_total}}</td>

                @elseif($meta->get_trimestre_reporte_poa() ==3) 

                @php

                $mes_1 = $meta->programacion()->pluck('jul')->first() ;
                $mes_2  =$meta->programacion()->pluck('agos')->first() ;
                $mes_3 =$meta->programacion()->pluck('sep')->first() ;
                $mes_total = $mes_1 + $mes_2 + $mes_3;
    
                @endphp

                <td>{{$mes_total}}</td>

                @elseif($meta->get_trimestre_reporte_poa() ==4) 

                @php

                $mes_1 = $meta->programacion()->pluck('oct')->first() ;
                $mes_2  =$meta->programacion()->pluck('nov')->first() ;
                $mes_3 =$meta->programacion()->pluck('dic')->first() ;
                $mes_total = $mes_1 + $mes_2 + $mes_3;
    
                @endphp

                <td>{{$mes_total}}</td>
                
              

                @endif
                




               


                
                 



            </tr>

            @php
                
                $numero_Previo=$componente->numero;
            @endphp
        
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


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    
</body>
</html>
