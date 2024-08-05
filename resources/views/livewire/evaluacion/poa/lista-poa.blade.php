<div>
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
  </style>
  <h1 class="centrarTexto">Lista PAO</h1>
 <div class= "rz-card card">
    <table class="table th table-striped table-hover table-bordered">
      <thead >
            <tr>
              <th scope="col">ID</th>
              <th scope="col">NOMBRE DE LA UNIDAD</th>
              <th scope="col">TIPO DE UNIDAD</th>
              <th scope="col">AÑOS</th>
              <th scope="col">FECHA</th>
              <th scope="col">ACEPTADO</th>
              <th scope="col">APROBADO</th>
              <th scope="col">VER</th>
           </tr>
        </thead>
        <tbody>
          <tr>
              <td scope="row">6500</td>
              <td>DESARROLLO EMPRESARIAL</td>
              <td>Operativo</td>
              <td>2023</td>
              <td>01/02/2023</td>
              <td>SI</td>
              <td>NO</td>
              <td><button type="button" class="btn btn-warning" href="{{route('evaluacion.visualizarpoa')}}" wire:navigate>Detalles</button></td>
            </tr>
          <tr>
              <td scope="row">2</td>
              <td>DVISION DE PLANIFICACION</td>
              <td>Administrativo</td>
              <td>2023</td>
              <td>04/03/2023</td>
              <td>SI</td>
              <td>SI</td>
              <td><button type="button" class="btn btn-warning">Detalles</button></td>
          </tr>
          <tr>
                <td scope="row">3</td>
                <td>DEPARTAMENTO DE PROGRAMACION</td>
                <td>Administrativo</td>
                <td>2023</td>
                <td>12/06/2023</td>
                <td>NO</td>
                <td>NO</td>
                <td><button type="button" class="btn btn-warning">Detalles</button></td>
          </tr>
          <tr>
               <td scope="row">4</td>
               <td>INGENERIA Y MANTENIMIENTO</td>
               <td>Administrativo</td>
               <td>2023</td>
               <td>05/06/2023</td>
               <td>SI</td>
               <td>SI</td>
               <td><button type="button" class="btn btn-warning">Detalles</button></td>
         </tr>
          <tr>
               <td scope="row">5</td>
               <td>UNIDAD DE FORMACION SECRETARIAL</td>
               <td>OPERATVO</td>
               <td>2023</td>
               <td>25/07/2023</td>
               <td>SI</td>
               <td>SI</td>
               <td><button type="button" class="btn btn-warning">Detalles</button></td>
          </tr>
          <tr>
            <td scope="row">6</td>
            <td>TURISMO</td>
            <td>Operativo</td>
            <td>2023</td>
            <td>01/02/2023</td>
            <td>SI</td>
            <td>NO</td>
            <td><button type="button" class="btn btn-warning" href="{{route('evaluacion.visualizarpoa')}}" wire:navigate>Detalles</button></td>
        </tr>
        </tbody>
        
      </table>
  </div>
</?div>
