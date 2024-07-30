<div>
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
   <!-- Estilos personalizados -->
  <style>
    .custom-margin {
        margin: 30px; /* Margen alrededor de la tabla */
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
    

    <h1 class="text-center">PLAN DE COMPRAS Y CONTRACIONES</h1>
  
    <table id="tableListaPacc_" class="table table-bordered">
       <!-- EN CABEZADO DE LA TABLA-->
        <thead class="table-primary text-center">
            <tr>
              <th colspan="6" scope="col">PLAN ANUAL DE COMPRAS Y CONTRATACIONES</th>
              
           </tr>
           <tr>
            <th colspan="3" scope="col">ACTIVIDAD PRESUPUESTARIA</th>
              <th colspan="3" scope="col">6501</th>
              
           </tr>
           <tr>
            <th colspan="3" scope="col">UNIDAD EJECUTORA</th>
              <th colspan="3" scope="col">UNIDAD DE FORMACION SECRETARIAL</th>
             
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
          @foreach($renglones as $renglon)
          <tr>

            <td>{{ $renglon['id'] }}</td>
            <td>{{ $renglon['renglonPres'] }}</td>
            <td>{{ $renglon['descripcion'] }}</td>
            <td>{{ $renglon['unidad'] }}</td>
            <td>{{ $renglon['montoEst'] }}</td>
            <td>{{ $renglon['fecha'] }}</td>

          </tr>

            @endforeach

           
           

              
        </tbody>

        <tr>
          {{-- Redireccionar a la pagina de ediccion --}}
         <th scope="row"><button type="button" class="btn btn-warning"  href="{{route('pacc.editarpacc')}}" wire:navigate>EDITAR</button></th>
        
      </tr>


      </table>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
   </div>
  
  

   <script>
    $(document).ready(function() {
        $('#tableListaPacc_').DataTable({
            dom: 'Bfrtip',
            buttons: [
                    'copy', 'excel', 'pdf' 'print'
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


