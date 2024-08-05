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
            margin: 100px; /* Margen alrededor de la tabla */
        }
        .text-justify {
            text-align: justify; /* Justifica el texto */
        }
        .border-gray {
            border-color: gray !important; /* Cambia el color de los bordes a gris */
        }
        .small-font {
            font-size: 12px; /* Cambia el tamaño de la fuente */
        }
    </style>
   
</head>
<body>

<div class="custom-margin">
  <h1 class="text-center">PLAN DE COMPRAS Y CONTRACIONES</h1>
  <table class="table table-bordered">
      <!-- EN CABEZADO DE LA TABLA-->
     <thead class="table-primary text-center">
         <tr>
           <th colspan="6" scope="col">PLAN ANUAL DE COMPRAS Y CONTRATACIONES</th>
           
        </tr>
        <tr>
         <th colspan="3" scope="col">ACTIVIDAD PRESUPUESTARIA</th>
           <th colspan="3" scope="col">{{$user->id_unidad}}</th>
           
        </tr>
        <tr>
         <th colspan="3" scope="col">UNIDAD EJECUTORA</th>
           <th colspan="3" scope="col">{{$user->nombre_unidad}}</th>
          
        </tr>
        <tr>
           <th scope="col">Nº</th>
           <th scope="col">Renglon presupuesto</th>
           <th scope="col">Decripcion de compra</th>
           <th scope="col">Unidad</th>
           <th scope="col">Monto estimado POA</th>
           <th scope="col">Fecha Estimada para recepcion del Bien</th>
           
          
       </tr>
     </thead>
     <!-- FILAS DE LAS TABLA-->
     <tbody class="text-center">
       <tr>
            @foreach($gastopacc as $gasto) 
           <th scope="row">{{$loop->index+1}}</th>
           <td>{{$gasto->renglon}}</td>
           <td>{{$gasto->descripcion}}</td>
           <td>{{$gasto->unidad}}</td>
           <td>{{$gasto->monto}}</td>
           <td>{{$gasto->fecha_entrega}}</td>

        </tr>
        @endforeach
           

           
           
          

           <tr>

           </tr>

          <tr>
             <th scope="row">::::</th>
             <td>:::::::::::::::::: </td>
             <td>:::::::::::::::::::::::::::::::::UL:::::::::::::::::::::::::::::::::::::::::::</td>
             <td>:::::::::::</td>
             <td> :::::::::::::::::::</td>
             <td> :::::::::::::::</td>
          </tr>
     </tbody>
   </table>
   <th scope="row"><button type="button" class="btn btn-warning" href="{{route('evaluacion.edicionpacc')}}" wire:navigate>EDITAR </button></th>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</div>

<!-- Enlace al script de Bootstrap 5.3 -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>