<!--<div>
    <h1>Visualizar POA Programacion</h1>
</div> -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan Operativo Presupuesto</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-section, .table-section {
            margin-bottom: 20px;
        }
        .form-section label, .table-section label {
            font-weight: bold;
        }
        .footer {
            margin-top: 30px;
            border-top: 2px solid #000;
            padding-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <!-- Título -->
        <h1 class="mb-4">Plan Operativo Presupuesto</h1>
        <h2 class="mb-4">Matriz de Planificación Unidades Administrativas</h2>

        <!-- Formulario para seleccionar opciones -->
        <div class="form-section bg-light p-4 rounded">
            <form>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="nombreUnidad" class="form-label">Nombre de la Unidad:</label>
                        <select id="nombreUnidad" class="form-select">
                            <option selected>Ingeniería y Mantenimiento</option>
                            <!-- Puedes añadir más opciones aquí -->
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="nombreResponsable" class="form-label">Nombre de Responsable:</label>
                        <input type="text" id="nombreResponsable" class="form-control" placeholder="Nombre del Responsable">
                    </div>
                    <div class="col-md-4">
                        <label for="cargo" class="form-label">Cargo:</label>
                        <input type="text" id="cargo" class="form-control" placeholder="Cargo del Responsable">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="noActividad" class="form-label">No. Actividad:</label>
                        <input type="text" id="noActividad" class="form-control" placeholder="Número de Actividad">
                    </div>
                    <div class="col-md-4">
                        <label for="ano" class="form-label">Año:</label>
                        <input type="text" id="ano" class="form-control" placeholder="Año">
                    </div>
                </div>
            </form>
        </div>

        <!-- Tabla de datos -->
        <div class="table-section">
            <table class="table table-bordered table-hover">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">ID COMPONENTE</th>
                        <th scope="col">NOMBRE COMPONENTE</th>
                        <th scope="col">ID LINEA ESTRATEGICA</th>
                        <th scope="col">LINEA ESTRATEGICA/ Descripción</th>
                        <th scope="col">ID META</th>
                        <th scope="col">META/Resultado de Producción</th>
                        <th scope="col">UNIDAD DE MEDIDA</th>
                        <th scope="col">ENERO</th>
                        <th scope="col">FEBRERO</th>
                        <th scope="col">MARZO</th>
                        <th scope="col">ABRIL</th>
                        <th scope="col">MAYO</th>
                        <th scope="col">JUNIO</th>
                        <th scope="col">JULIO</th>
                        <th scope="col">AGOSTO</th>
                        <th scope="col">SEPTIEMBRE</th>
                        <th scope="col">OCTUBRE</th>
                        <th scope="col">NOVIEMBRE</th>
                        <th scope="col">DICIEMBRE</th>
                        <th scope="col">PROGRAMACION ANUAL</th>
                        <th scope="col">PRESUPUESTO ESTIMADO POR META</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>3</td>
                        <td>INFRAESTRUCTURA Y ORNATO</td>
                        <td>3.1</td>
                        <td>Mejorar la infraestructura actual de las instalaciones del INFOP a nivel nacional con el fin de contar con espacios adecuados que mejoren las condiciones pedagógicas para aprendices y colaboradores</td>
                        <td>3.1.1</td>
                        <td>FORMULACIÓN Y POSTERIORMENTE CONSTRUCCIÓN DE TALLERES DE FORMACIÓN PROFESIONAL, LOS ENCUENTROS, FRANCISCO MORAZÁN (ESTUDIO)</td>
                        <td>Construcciones y Remodelaciones</td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td>L. 12,600,000.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>3.1.2</td>
                        <td>FORMULACIÓN Y POSTERIORMENTE CONSTRUCCIÓN DE TALLERES DE FORMACIÓN PROFESIONAL, COMAYAGUA, COMAYAGUA. (ESTUDIO)</td>
                        <td>Construcciones y Remodelaciones</td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td>L. 1,260,000.00</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Validación -->
        <div class="footer">
            <p>Validado por: __________________</p>
            <p>Fecha de validación: ____/_____/_____</p>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
