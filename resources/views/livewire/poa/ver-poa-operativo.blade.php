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
            margin: 50px; /* Margen alrededor de la tabla */
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
    </style>
    <title>Plan Operativo Anual</title>
</head>
<body>





{{--                                 --}}

<div class="custom-margin">
    <!-- Título centrado -->

    <h1 class="text-center" style="margin-bottom: 30px; margin-top:10px" >AVANCES TRIMESTRAL POA</h1>

    <table class="text-center table table-borderless" style="margin-bottom: 30px;">

        <thead>
            <tr>
                <th>
                
                    <button class="btn" style="background-color:#38D6EE" > 1° Trimestral </button>

                </th>

                <th>

                    <button class="btn" style="background-color:#38D6EE" > 2° Trimestral  </button>   
                </th>
                <th>

                 
                <button class="btn" style="background-color:#38D6EE" > 3° Trimestral </button>   
                </th>
                <th>

                   
                <button class="btn" style="background-color:#38D6EE" > 4° Trimestral  </button> 
                </th>


            </tr>

        </thead>
    </table>

    <h1 class="text-center" >PLAN OPERATIVO ANUAL</h1>
    <table class="table table-borderless">
      <thead>
        <tr class= "small-font">
          <th scope="col">
            <div class="table-title ">
                  <label><b>Nombre de la Unidad:</b>{{$user->nombre_unidad}}</label> 
                  <br><label><b>Actividad:</b> {{$user->id_unidad}}</label></br>
            </div>
          </th>
          <th scope="col">
            <label><b>Nombre Responsable:</b> {{$user->nombre}}</label> 
            <br><label><b>Cargo:</b>{{$cargo->nombre}}</label></br>
          </th>
          <th scope="col"> 
            <label><b>Fecha:</b>{{date_format($poa->updated_at, "y/m/d")}}</label>
            <br><label><b>Año:</b>{{$poa->anio}}</label> <br></th>

            <th scope="col"> 
               
                <button class="btn"  style="background-color:#38D6EE" href="{{ route('poa.editar.operativo') }}"> Editar </button>
            </th>

            <th scope="col"> 
              
                <button class="btn" style= "background-color:#f09b86"> Borrar </button>
                    
            </th>
          </tr>


      </thead>
    </table>
    <!-- Tabla con borde gris y fuente pequeña -->
    <table class="table table-bordered border border-gray small-font">
      <!-- Encabezado de la tabla -->
        <thead class="table-primary text-center">
            <tr class="border-gray">
                <!-- Primera fila del encabezado -->
                <th colspan="2" scope="col">COMPONENTE</th>
                <th colspan="2" scope="col">LINEA ESTRATEGIA</th>
                <th colspan="2" scope="col">META</th>
                <th rowspan="2" scope="col">UNIDAD DE MEDIDA</th>
                <th colspan="3" scope="col">1° TRIMESTRE</th>
                <th colspan="3" scope="col">2° TRIMESTRE</th>
                <th colspan="3" scope="col">3° TRIMESTRE</th>
                <th colspan="3" scope="col">4° TRIMESTRE</th>
                <th rowspan="0" scope="col">PROGRAMACION ANUAL</th>
            </tr>
            <tr class="border-gray">
                <!-- Segunda fila del encabezado -->
                <th scope="col">Numero</th>
                <th scope="col">Nombre</th>
                <th scope="col">Numero</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Codigo</th>
                <th scope="col">Resultado de Produccin</th>
                <th scope="col">1</th>   
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
            </tr>
        </thead>
        <!-- Cuerpo de la tabla -->
        <tbody class="text-justify">
        

                @php

                $numero_Previo =null;

        


                @endphp
                 @foreach($metas as $meta)
           
                 <tr>


                    @if($componente->numero !==$numero_Previo ) 

                    <th scope="row">{{$componente->numero}}</th>
                    <td>{{$componente->nombre}}</td>
                    <td>{{$componente->numero}}.{{$metas[$loop->index]->numero_linea_Op()}}</td>
                    <td>{{$metas[$loop->index]->descripcion_linea_Op()}}</td>
                   
                    @else
                    <th ></th>
                    <td></td>
                    <td></td>
                    <td></td>

                    
                    @endif




                    
                    <td>{{$componente->numero}}.{{$metas[$loop->index]->numero_linea_Op()}}.{{$meta->numero}}</td>
                    <td>{{$meta->descripcion}}</td>

                    <td>{{$meta->unidad_medida}}</td>


                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                   
               



                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Cursos</td>
                    <td>{{ $meta->programacion_Op()->where('tipo',1)->pluck('ene')->first() }}</td>
                    <td>{{ $meta->programacion_Op()->where('tipo',1)->pluck('feb')->first() }}</td>
                    <td>{{ $meta->programacion_Op()->where('tipo',1)->pluck('mar')->first() }}</td>
                    <td>{{ $meta->programacion_Op()->where('tipo',1)->pluck('abr')->first() }}</td>
                    <td>{{ $meta->programacion_Op()->where('tipo',1)->pluck('may')->first() }}</td>
                    <td>{{ $meta->programacion_Op()->where('tipo',1)->pluck('jun')->first() }}</td>
                    <td>{{ $meta->programacion_Op()->where('tipo',1)->pluck('jul')->first() }}</td>
                    <td>{{ $meta->programacion_Op()->where('tipo',1)->pluck('ago')->first() }}</td>
                    <td>{{ $meta->programacion_Op()->where('tipo',1)->pluck('sep')->first() }}</td>
                    <td>{{ $meta->programacion_Op()->where('tipo',1)->pluck('oct')->first() }}</td>
                    <td>{{ $meta->programacion_Op()->where('tipo',1)->pluck('nov')->first() }}</td>
                    <td>{{ $meta->programacion_Op()->where('tipo',1)->pluck('dic')->first() }}</td>

                <td>{{$meta->cursos}}</td>
                
                
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Participantes</td>

                    <td>{{ $meta->programacion_Op()->where('tipo',2)->pluck('ene')->first() }}</td>
                    <td>{{ $meta->programacion_Op()->where('tipo',2)->pluck('feb')->first() }}</td>
                    <td>{{ $meta->programacion_Op()->where('tipo',2)->pluck('mar')->first() }}</td>
                    <td>{{ $meta->programacion_Op()->where('tipo',2)->pluck('abr')->first() }}</td>
                    <td>{{ $meta->programacion_Op()->where('tipo',2)->pluck('may')->first() }}</td>
                    <td>{{ $meta->programacion_Op()->where('tipo',2)->pluck('jun')->first() }}</td>
                    <td>{{ $meta->programacion_Op()->where('tipo',2)->pluck('jul')->first() }}</td>
                    <td>{{ $meta->programacion_Op()->where('tipo',2)->pluck('ago')->first() }}</td>
                    <td>{{ $meta->programacion_Op()->where('tipo',2)->pluck('sep')->first() }}</td>
                    <td>{{ $meta->programacion_Op()->where('tipo',2)->pluck('oct')->first() }}</td>
                    <td>{{ $meta->programacion_Op()->where('tipo',2)->pluck('nov')->first() }}</td>
                    <td>{{ $meta->programacion_Op()->where('tipo',2)->pluck('dic')->first() }}</td>
                <td>{{$meta->participantes}}</td>
                
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Horas</td>
                    <td>{{ $meta->programacion_Op()->where('tipo',3)->pluck('ene')->first() }}</td>
                    <td>{{ $meta->programacion_Op()->where('tipo',3)->pluck('feb')->first() }}</td>
                    <td>{{ $meta->programacion_Op()->where('tipo',3)->pluck('mar')->first() }}</td>
                    <td>{{ $meta->programacion_Op()->where('tipo',3)->pluck('abr')->first() }}</td>
                    <td>{{ $meta->programacion_Op()->where('tipo',3)->pluck('may')->first() }}</td>
                    <td>{{ $meta->programacion_Op()->where('tipo',3)->pluck('jun')->first() }}</td>
                    <td>{{ $meta->programacion_Op()->where('tipo',3)->pluck('jul')->first() }}</td>
                    <td>{{ $meta->programacion_Op()->where('tipo',3)->pluck('ago')->first() }}</td>
                    <td>{{ $meta->programacion_Op()->where('tipo',3)->pluck('sep')->first() }}</td>
                    <td>{{ $meta->programacion_Op()->where('tipo',3)->pluck('oct')->first() }}</td>
                    <td>{{ $meta->programacion_Op()->where('tipo',3)->pluck('nov')->first() }}</td>
                    <td>{{ $meta->programacion_Op()->where('tipo',3)->pluck('dic')->first() }}</td>
                <td>{{$meta->horas}}</td>
                
                </tr>

                @php
                
                $numero_Previo=$componente->numero;
                 @endphp

                @endforeach
          
          
        </tbody>
    </table>
</div>

<!-- Enlace al script de Bootstrap 5.3 -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
