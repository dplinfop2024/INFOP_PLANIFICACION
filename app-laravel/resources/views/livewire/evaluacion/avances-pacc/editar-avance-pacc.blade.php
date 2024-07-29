<div>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <title>Plan Operativo Anual</title>
    </head>
    <body>
    <did>
        <div class="rz-card card">
            <!-- Título centrado -->
            <h1 class="text-center">AVANCE TRIMESTRAL POA (ADMINISTRATIVO)</h1>
            <table class="table table-borderless">
              <thead>
                <tr class= "small-font">
                  <th scope="col">
                    <div class="table-title">
                          <label><b>Nombre de la Unidad:</b> Turismo </label> 
                          <br><label><b>Actividad:</b> 9252</label></br>
                    </div>
                  </th>
                  <th scope="col">
                    <label><b>Nombre Responsable:</b> Daysi Jannett Aranda</label> 
                    <br><label><b>Cargo:</b> Jefe de departamento</label></br>
                  </th>
                  <th scope="col"> 
                    <label><b>Fecha:</b>01/02/2024 </label>
                    <br><label><b>Año:</b>2024</label> <br></th>
                  </tr>
              </thead>
            </table>
            <!-- Tabla con borde gris y fuente pequeña -->
            <table class="table table-bordered border border-gray small-font">
              <!-- Encabezado de la tabla -->
                <thead class="table-primary text-center">
                    <tr class="border-gray">
                        <!-- Primera fila del encabezado -->
                        
                        <th rowspan="2" scope="col">Nº META</th>
                        <th rowspan="2" scope="col">DESCRIPCION DE LAS METAS</th>
                        <th rowspan="2" scope="col">UNIDAD DE MEDIDA</th>
                        <th rowspan="2" scope="col">PROGRAMACION ANUAL 2024</th>
                        <th colspan="2" scope="col">EVALUACION DE LAS ACTIVIDADES</th>
                        <th scope="col">% AVANCE TRIMESTRE</th>
                        <th rowspan="2" scope="col">OBSERVACIONES</th>
                    </tr>
                    <tr class="border-gray">
                        <!-- Primera fila del encabezado -->
                        <th  scope="col">PROG. I TRIMESTRE</th>
                        <th  scope="col">EJEC. I TRIMESTRE</th>
                        <th  scope="col">ENERO-MARZO</th>
                    </tr>
                </thead>
                <!-- Cuerpo de la tabla -->
                <tbody class="text-center">
                    <!-- Primera fila de datos -->
                    <tr>
                        <th scope="row">2.1.1</th>
                        <td class="text-justify">
                            Dado seguimiento a la coordinación y consolidación del Plan Operativo Anual de todas las Unidades a Nivel Nacional.  
                        </td>
                        <td>Seguimiento al POA</td>
                        <td>8</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><label for="exampleFormControlTextarea1" class="form-label"></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1"></textarea>
                        </td>
                    </tr>
                     <!-- Segunda  fila de datos -->
                     <tr >
                        <th scope="row">2.1.2</th>
                        <td class="text-justify">
                            Dado seguimiento a la coordinación y consolidación del Plan Operativo Anual de todas las Unidades a Nivel Nacional. 
                        </td>
                        <td text-center ="text-center">Seguimiento al Presupuesto</td>
                        <td>5</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><label for="exampleFormControlTextarea1" class="form-label"></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1"></textarea>
                        </td>
                    </tr>
                    <!-- Tercera  fila de datos -->
                    <tr >
                        <th scope="row">2.1.3</th>
                        <td class="text-justify">
                            Coordinado el procesamiento de información del Plan Operativo Anual (Cadena de Valor) y Presupuesto para el ejercicio fiscal 2023 por Unidad Ejecutora y Institucion Gerencias Administrativas en el Sistema SIAFI-GES Cadena d / Presupu    
                        </td>
                        <td text-center ="text-center">Cadena de Valor/ Presupuesto Institucional</td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><label for="exampleFormControlTextarea1" class="form-label"></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1"></textarea>
                        </td>
                    </tr>
                  
                     <!-- Segunda  fila de datos -->
                     <tr >
                        <th scope="row">2.1.4</th>
                        <td class="text-justify" >
                            Coordinado el monitoreo y seguimiento de las plataformas de: SIGPRET, ROPI.
                        </td>
                        <td text-center ="text-center">Reporte de Platafoma</td>
                        <td>12</td>
                        <td>3</td>
                        <td>3</td>
                        <td></td>
                        <td><label for="exampleFormControlTextarea1" class="form-label"></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1"></textarea>
                        </td>
                    </tr>
                </tbody>
            </table>
            
        </div>
        <button type="button" class="btn btn-success">Guardar</button>
        <button type="button" class="btn btn-danger">Cancelar</button>
    </did>
    
    <!-- Enlace al script de Bootstrap 5.3 -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
    
</div>
