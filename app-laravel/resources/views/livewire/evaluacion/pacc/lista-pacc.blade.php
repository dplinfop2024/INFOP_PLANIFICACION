<div class="container text-center">
    
  <!-- Enlace a la hoja de estilos de Bootstrap 5.3 -->
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
   <!-- Estilos personalizados -->
  <style>
    .custom-margin {
        margin: 10px; /* Margen alrededor de la tabla */
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
    <h1>Lista PACC</h1>
    <div class="custom-margin">
      <div class="align-self-center">
        <table class="table table-striped table-hover table-bordered text-center">
          <thead>
            <tr>
              <th scope="col">N. UNIDAD</th>
                <th scope="col">NOMBRE DE LA UNIDAD</th>
                <th scope="col">TIPO DE UNIDAD</th>
                <th scope="col">AÑO</th>
                <th scope="col">VER</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">8217</th>
                <td>UAPA OLANCHITO</td>
                <td>Operativo</td>
                <td>2024</td>
                <td><button type="button" class="btn btn-warning" href="{{route('evaluacion.visualizarpacc')}}" wire:navigate>Detalles</button></td>
            </tr>
          
          </tbody>
        </table>
      </div>
    </div>
      <!-- Enlace al script de Bootstrap 5.3 -->
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</div>
