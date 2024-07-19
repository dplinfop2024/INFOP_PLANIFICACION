<!--<div>
    <h1>Editar POA Programacion</h1>
</div>-->


<form action="{{ route('guardar_programacion_anual') }}" method="POST">
    @csrf

    <!-- Campo: Nombre de Unidad (desplegable) -->
    <div>
        <label for="unidad">Nombre de Unidad:</label>
        <select name="unidad" id="unidad">
            <option value="unidad1">Unidad 1</option>
            <option value="unidad2">Unidad 2</option>
            <!-- Agregar más opciones según sea necesario -->
        </select>
    </div>

    <!-- Campo: Nombre Responsable (menú desplegable) -->
    <div>
        <label for="responsable">Nombre Responsable:</label>
        <select name="responsable" id="responsable">
            <option value="responsable1">Responsable 1</option>
            <option value="responsable2">Responsable 2</option>
            <!-- Agregar más opciones según sea necesario -->
        </select>
    </div>

    <!-- Campo: Cargo Jefe (menú desplegable) -->
    <div>
        <label for="cargo">Cargo Jefe:</label>
        <select name="cargo" id="cargo">
            <option value="cargo1">Cargo 1</option>
            <option value="cargo2">Cargo 2</option>
            <!-- Agregar más opciones según sea necesario -->
        </select>
    </div>

    <!-- Campo: Año (menú desplegable) -->
    <div>
        <label for="year">Año:</label>
        <select name="year" id="year">
            <option value="2024">2024</option>
            <option value="2025">2025</option>
            <!-- Agregar más opciones según sea necesario -->
        </select>
    </div>

    <!-- Matriz de Programación Anual -->
    <table>
        <thead>
            <tr>
                <th>Componente</th>
                <th>Línea Estratégica</th>
                <th>Meta</th>
                <th>Unidad de Medida</th>
                <th>Enero</th>
                <th>Febrero</th>
                <th>Marzo</th>
                <th>Abril</th>
                <th>Mayo</th>
                <th>Junio</th>
                <th>Julio</th>
                <th>Agosto</th>
                <th>Septiembre</th>
                <th>Octubre</th>
                <th>Noviembre</th>
                <th>Diciembre</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" name="componente[]" required></td>
                <td><input type="text" name="linea_estrategica[]" required></td>
                <td><input type="text" name="meta[]" required></td>
                <td><input type="text" name="unidad_medida[]" required></td>
                <td><input type="number" name="enero[]" required></td>
                <td><input type="number" name="febrero[]" required></td>
                <td><input type="number" name="marzo[]" required></td>
                <td><input type="number" name="abril[]" required></td>
                <td><input type="number" name="mayo[]" required></td>
                <td><input type="number" name="junio[]" required></td>
                <td><input type="number" name="julio[]" required></td>
                <td><input type="number" name="agosto[]" required></td>
                <td><input type="number" name="septiembre[]" required></td>
                <td><input type="number" name="octubre[]" required></td>
                <td><input type="number" name="noviembre[]" required></td>
                <td><input type="number" name="diciembre[]" required></td>
            </tr>
            <!-- Puedes agregar más filas según sea necesario -->
        </tbody>
    </table>

    <!-- Botón de Envío -->
    <div>
        <button type="submit">Guardar Programación Anual</button>
    </div>
</form>
