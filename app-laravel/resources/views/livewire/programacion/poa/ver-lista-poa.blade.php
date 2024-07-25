<!--<div> 
    <h1>Lista POA Programacion</h1>
        
    <!- </div> -->

    <div>
    <label for="poa">Seleccionar POA:</label>
    <select id="poa" class="form-control">
        <option value="">Seleccionar POA</option>
        @foreach ($poas as $poa)
            <option value="{{ $poa['no_actividad'] }}">
                {{ $poa['no_actividad'] }} - {{ $poa['nombre_unidad'] }} - {{ $poa['tipo_unidad'] }}
            </option>
        @endforeach
    </select>

    <!- Botón para detalles -->
    <button type="button" wire:click="verDetalles">Detalles</button>

    <div class="p-4 bg-light rounded mb-4">
        <!-- Filtro de Búsqueda -->
        <div class="mb-3">
            <label for="filtroBusqueda" class="form-label">Filtrar por nombre de unidad:</label>
            <div class="input-group">
                <input type="text" id="filtroBusqueda" class="form-control" placeholder="Ingrese nombre...">
                <button class="btn btn-primary" type="button" id="btnBuscar">Buscar</button>
            </div>
        </div>
    
        <!-- Detalles del POA seleccionado -->
        {{-- Aquí puedes mostrar los detalles del POA seleccionado si es necesario --}}
        <table class="table table-bordered table-hover">
            <thead class="table-primary">
                <tr>
                    <th scope="col">No de Actividad</th>
                    <th scope="col">Nombre Unidad</th>
                    <th scope="col">Tipo Unidad</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Aceptado</th>
                    <th scope="col">Aprobado</th>
                    <th scope="col">Ver</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Turismo</td>
                    <td>Operativo</td>
                    <td>01/02/2023</td>
                    <td></td>
                    <td></td>
                    <td><button type="button" class="btn btn-warning">Detalles</button></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>División de Planificación</td>
                    <td>Administrativo</td>
                    <td>04/03/2023</td>
                    <td></td>
                    <td></td>
                    <td><button type="button" class="btn btn-warning">Detalles</button></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Departamento de Programación</td>
                    <td>Administrativo</td>
                    <td>12/06/2023</td>
                    <td></td>
                    <td></td>
                    <td><button type="button" class="btn btn-warning">Detalles</button></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Ingeniería y Mantenimiento</td>
                    <td>Administrativo</td>
                    <td>05/06/2023</td>
                    <td></td>
                    <td></td>
                    <td><button type="button" class="btn btn-warning">Detalles</button></td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Unidad de Formación Secretarial</td>
                    <td>Operativo</td>
                    <td>25/07/2023</td>
                    <td></td>
                    <td></td>
                    <td><button type="button" class="btn btn-warning">Detalles</button></td>
                </tr>
            </tbody>
        </table>
    
        <!-- Paginación -->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
                <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
            </ul>
        </nav>
    </div>
    