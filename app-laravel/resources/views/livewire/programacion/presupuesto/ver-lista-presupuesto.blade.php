<!--<div> 
    <h1>Lista POA Programacion</h1>
        
    <!- </div> -->

<!-- resources/views/livewire/programacion/presupuesto/ver-lista-presupuesto.blade.php -->

<!-- resources/views/livewire/ver-lista-actividades.blade.php -->

<!-- resources/views/livewire/programacion/presupuesto/ver-lista-presupuesto.blade.php -->


    
<div class="p-4 bg-light rounded">
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
                <th scope="col">Id</th>
                <th scope="col">Nombre Unidad</th>
                <th scope="col">Responsable Unidad</th>
                <th scope="col">Fecha</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody id="tablaPOA">
            <tr>
                <th scope="row">1</th>
                <td>Departamento Programación</td>
                <td>Catalina Isabel Lopez Smith</td>
                <td>14/02/2023</td>
                <td><button type="button" class="btn btn-warning">Detalles</button></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Departamento Programación</td>
                <td>Catalina Isabel Lopez Smith</td>
                <td>01/02/2023</td>
                <td><button type="button" class="btn btn-warning">Detalles</button></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Departamento Programación</td>
                <td>Catalina Isabel Lopez Smith</td>
                <td>20/04/2023</td>
                <td><button type="button" class="btn btn-warning">Detalles</button></td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Departamento Programación</td>
                <td>Catalina Isabel Lopez Smith</td>
                <td>01/03/2023</td>
                <td><button type="button" class="btn btn-warning">Detalles</button></td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>Departamento Programación</td>
                <td>Catalina Isabel Lopez Smith</td>
                <td>01/04/2023</td>
                <td><button type="button" class="btn btn-warning">Detalles</button></td>
            </tr>
        </tbody>
    </table>

    <!-- Paginación -->
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end" id="paginacion">
            <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
        </ul>
    </nav>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tablaPOA = document.getElementById('tablaPOA');
        const filtroBusqueda = document.getElementById('filtroBusqueda');
        const btnBuscar = document.getElementById('btnBuscar');
        const paginacion = document.getElementById('paginacion');

        // Función para filtrar la tabla por nombre de unidad
        btnBuscar.addEventListener('click', function () {
            const filtroTexto = filtroBusqueda.value.toUpperCase();
            const filas = tablaPOA.getElementsByTagName('tr');

            // Iterar sobre las filas y mostrar/ocultar según el filtro
            for (let i = 0; i < filas.length; i++) {
                const columnaNombre = filas[i].getElementsByTagName('td')[1]; // Índice 1 para Nombre Unidad
                if (columnaNombre) {
                    const textoFila = columnaNombre.textContent.toUpperCase();
                    if (textoFila.indexOf(filtroTexto) > -1) {
                        filas[i].style.display = '';
                    } else {
                        filas[i].style.display = 'none';
                    }
                }
            }
        });

        // Eventos para la paginación (simulado)
        paginacion.addEventListener('click', function (event) {
            event.preventDefault();
            const paginaSeleccionada = event.target.innerText;
            console.log('Página seleccionada:', paginaSeleccionada);
            // Aquí se implementaría la lógica de paginación real
        });
    });
</script>
