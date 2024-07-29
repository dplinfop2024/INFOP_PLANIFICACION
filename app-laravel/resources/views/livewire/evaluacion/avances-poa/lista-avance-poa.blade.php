<div>
    <h1>Lista Avance POA</h1>
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
            <th scope="row">1</th>
              <td>TURISMO</td>
              <td>Operativo</td>
              <td>2023</td>
              <td>01/02/2023</td>
              <td>SI</td>
              <td>SI</td>
              <td><button type="button" class="btn btn-warning" href="{{route('evaluacion.visualizaravancepoa')}}" wire:navigate>Detalles</button></td>
          </tr>
        
        </tbody>
      </table>
</div>
