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

    <!-- Detalles del POA seleccionado -->
    {{-- Aquí puedes mostrar los detalles del POA seleccionado si es necesario --}}
</div>
