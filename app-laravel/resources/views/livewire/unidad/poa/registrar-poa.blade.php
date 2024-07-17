<div class="container">
    <form class="row g-3">
        <div class="col-md-3">
            <label for="actividad" class="form-label">Actividad</label>
            <input type="email" class="form-control input-btn-border-width" wire:model="poaForm.actividad">
        </div>
        <div class="col-md-3">
            <label for="nombreUnidad" class="form-label">Nombre Unidad</label>
            <input type="text" class="form-control" wire:model="poaForm.nombreUnidad">
        </div>
        <div class="col-md-3">
            <label for="responsable" class="form-label">Nombre Responsable</label>
            <input type="email" class="form-control input-btn-border-width" wire:model="poaForm.responsable">
        </div>
        <div class="col-md-3">
            <label for="cargo" class="form-label">Cargo</label>
            <input type="text" class="form-control" wire:model="poaForm.cargoResponsable">
        </div>
        <div class="col-md-3">
            <label for="anio" class="form-label">Año</label>
            <input type="email" class="form-control input-btn-border-width" wire:model="poaForm.anio">
        </div>
        <div class="col-md-9">
            <label for="componente" class="form-label">Componente</label>
            <input type="text" class="form-control" wire:model="poaForm.componente">
        </div>
        <button class="btn btn-primary">Agregar meta</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
      </form>
</div>

