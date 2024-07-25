<div>
  <h1 class="text-center">Lista PAO</h1>
    <table class="table table-striped table-hover table-bordered">
      <thead>
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
              <th scope="row">6500</th>
              <td>DESARROLLO EMPRESARIAL</td>
              <td>Operativo</td>
              <td>2023</td>
              <td>01/02/2023</td>
              <td>SI</td>
              <td>NO</td>
              <td><button type="button" class="btn btn-warning" href="{{route('evaluacion.visualizarpoa')}}" wire:navigate>Detalles</button></td>
            </tr>
          <tr>
              <th scope="row">2</th>
              <td>DVISION DE PLANIFICACION</td>
              <td>Administrativo</td>
              <td>2023</td>
              <td>04/03/2023</td>
              <td>SI</td>
              <td>SI</td>
              <td><button type="button" class="btn btn-warning">Detalles</button></td>
          </tr>
          <tr>
                <th scope="row">3</th>
                <td>DEPARTAMENTO DE PROGRAMACION</td>
                <td>Administrativo</td>
                <td>2023</td>
                <td>12/06/2023</td>
                <td>NO</td>
                <td>NO</td>
                <td><button type="button" class="btn btn-warning">Detalles</button></td>
          </tr>
          <tr>
               <th scope="row">4</th>
               <td>INGENERIA Y MANTENIMIENTO</td>
               <td>Administrativo</td>
               <td>2023</td>
               <td>05/06/2023</td>
               <td>SI</td>
               <td>SI</td>
               <td><button type="button" class="btn btn-warning">Detalles</button></td>
         </tr>
          <tr>
               <th scope="row">5</th>
               <td>UNIDAD DE FORMACION SECRETARIAL</td>
               <td>OPERATVO</td>
               <td>2023</td>
               <td>25/07/2023</td>
               <td>SI</td>
               <td>SI</td>
               <td><button type="button" class="btn btn-warning">Detalles</button></td>
          </tr>
          <tr>
            <th scope="row">6</th>
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
