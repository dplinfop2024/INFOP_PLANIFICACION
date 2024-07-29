<div>

     <!-- Enlace a la hoja de estilos de Bootstrap 5.3 -->
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
  
    <table class="table table-bordered">
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
          <tr>
                
              <th scope="row">1</th>
              <td> </td>
              <td>50 Papel Bond tamaño carta base 20</td>
              <td> RESMA</td>
              <td>3,700.00</td>
              <td>18/03/2024
              </td>
              

              
              
              </tr>
              <th scope="row">2</th>
              <td> </td>
              <td>45 Papel Bond tamaño oficio base 20</td>
              <td> RESMA</td>
              <td>3,990.00</td>
              <td>18/03/2024</td>

              <tr>


              </tr>
              <th scope="row">3</th>
              <td> </td>
              <td>1000 Folder tamaño carta</td>
              <td> UNID</td>
              <td>4,000.00</td>
              <td>18/03/2024</td>

              <tr>

              </tr>
              <th scope="row">4</th>
              <td> </td>
              <td>700 Folder tamaño oficio</td>
              <td> UNID</td>
              <td>4,000.00</td>
              <td>18/03/2024</td>

              <tr>

              </tr>
              <th scope="row">5</th>
              <td> </td>
              <td>1000 Bolsas manila 13X10(grandes)</td>
              <td> UNDID</td>
              <td>18,000.00</td>
              <td>18/03/2024</td>

              <tr>

              </tr>
              <th scope="row">6</th>
              <td> </td>
              <td>08 Libretas de taquigrafia</td>
              <td> UNID</td>
              <td>240.00</td>
              <td>18/03/2024</td>

              <tr>

              </tr>
              <th scope="row">7</th>
              <td> </td>
              <td>08 Libretas bond-rayadas</td>
              <td> UNID</td>
              <td>360.00</td>
              <td>18/03/2024</td>

              <tr>

              </tr>
              <th scope="row">8</th>
              <td> </td>
              <td>2 Cuadernos unicos tamaño oficico para correspondencia</td>
              <td> UNID</td>
              <td>150.00</td>
              <td>18/03/2024</td>

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
             <tr>
                <th scope="row"></th>
                <th> </th>
                <th> <input type="text" id="filtroBusquedaDescripcion" class="form-control" placeholder="Filtrar descripcion de compra..."> </th>
                <th> <button class="btn btn-primary" type="button" id="btnBuscar">Buscar</button> </th>
                <th> <input type="number" inputmode="numeric" id="filtroBusquedaMonto" class="form-control" placeholder="Filtrar monto..."> </th>

               
                <th><button class="btn btn-primary" type="button" id="btnBuscar">Buscar</button> </th>
             </tr>


              
        </tbody>
      </table>

      <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  </div>   


