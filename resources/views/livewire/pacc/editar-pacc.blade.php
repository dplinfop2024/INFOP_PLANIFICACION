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

 <div class="container-fluid" style="background-color:#343A40">
    
    <br>

    <div class="card border-info">
        <!--Encabezado formulario POA-->
        <div class="text-center pt-3">
            <h2>Registrar nuevo PACC</h2>
        </div>
        <div class="card-body">
            <!--Información general de POA-->
            <div class="row">
                <div class="col-md-3">
                    <label for="nombreUnidad" class="form-label">Nombre Unidad</label>
                    <input type="text" class="form-control" wire:model="paccForm.nombreUnidad" disabled>
                </div>
                <div class="col-md-3">
                    <label for="responsable" class="form-label">Nombre Responsable</label>
                    <input type="email" class="form-control input-btn-border-width" wire:model="paccForm.responsable" disabled>
                </div>
                <div class="col-md-3">
                    <label for="cargo" class="form-label">Cargo</label>
                    <input type="text" class="form-control" wire:model="paccForm.cargoResponsable" disabled>
                </div>
                <div class="col-md-1">
                    <label for="anio" class="form-label">Año</label>
                    <input type="text" class="form-control input-btn-border-width" wire:model="paccForm.anio" disabled>
                </div>

              
               
                <div class="col-md-3">
                    <label for="actividad" class="form-label">Actividad Presupuestaria</label>
                    <input type="text" class="form-control input-btn-border-width" wire:model="paccForm.actividadPres" disabled>
                </div> 
                
                <div class="col-md-3">
                    <label for="componente" class="form-label">Actividad Ejecutora</label>
                    <input type="text" class="form-control input-btn-border-width" rows="3" wire:model="paccForm.actividadEjec" disabled>
                </div>

                   
                </div>

                <div class="text-center pt-3">
                    <h2>Presupuesto</h2>
                </div>
                <div class="row">
                    @foreach($listaPresupuesto as $pres)
                    <div class="card text-bg-info col-md-12 mt-3">
                        <h5>Elemento {{$loop->index+1}}</h5>
                        <div class="row">
                            <div class="col-md-2">
                                <label for="numLinea" class="form-label">Renglon Presupuestario</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" wire:model="lineaEstrategica"></textarea>
                               
                            </div>
                            <div class="col-md-4">
                                <label for="desLinea" class="form-label">Descripcion de compra</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" wire:model="lineaEstrategica"></textarea>
                            </div>
                            <div class="col-md-1">
                                <label for="desLinea" class="form-label">UNIDAD</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" wire:model="lineaEstrategica"></textarea>
                            </div>
   
                            <div class="col-md-2">
                                <label for="desLinea" class="form-label">Monto estimado POA</label>
                                <textarea  type="number" class="form-control" id="exampleFormControlTextarea1" rows="1" wire:model="lineaEstrategica"></textarea>
                            </div>
                            <div class="col-md-3">
                                <label for="desLinea" class="form-label">Fecha estimada de recepcion del Bien</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" wire:model="lineaEstrategica"></textarea>
                            </div>
                        </div>
                        <br>
                        <!--Programación de meta-->
                     
                        <div class="d-grid pb-3 pt-3 col-2 mx-auto">
                            <button class="btn bg-danger-subtle" wire:click="delete({{$loop->index}})">Eliminar Elemento</button>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="d-grid gap-3 pt-4 col-2 mx-auto">
                    <button class="btn" style="background-color:#38D6EE" wire:click="agregarPres()">Agregar Elemento</button>
                    <button class="btn" style="background-color:#38D6EE" wire:click="save()">Registrar</button>
                </div>

            </div>
                

            </div>

            <br>

  
    


</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
   </div>


