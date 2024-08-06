<div class="container text-center">
    
    <!-- Enlace a la hoja de estilos de Bootstrap 5.3 -->
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
     <!-- Estilos personalizados -->
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
      .text-justify {
          text-align: justify; /* Justifica el texto */
      }
      
      
    </style>
      <h1>Lista PACC</h1>
      <div class="custom-margin rz-card card">
        <div>
          <table class="table th table-striped table-hover table-bordered">
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
              @foreach($paccs as $pacc)
                <tr>
                    <td scope="row">{{$pacc->get_numero_unidad()}}</td>
                    <td>{{$pacc->get_nombre_unidad()}}</td>
                    <td>{{$pacc->get_tipo_unidad()}}</td>
                    <td>{{$pacc->anio}}</td>
                    <td><button type="button" class="btn btn-warning" href="{{route('pacc.ver')}}" wire:navigate>Detalles</button></td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
        <!-- Enlace al script de Bootstrap 5.3 -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  </div>
