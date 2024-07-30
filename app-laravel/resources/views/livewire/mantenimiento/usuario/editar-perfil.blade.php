<div class="container-fluid" style="background-color:#343A40">
   <br> <div class="container mt-5 d-flex justify-content-center"> 
        <form wire:submit.prevent="updateProfile" class="p-4 border rounded" style=" background-color: #f8f9fa;max-width: 500px; width: 100%;">
            <center><h3>EDITAR PERFIL</h3> </center>
            <div class="mb-3 text-center">
                <img src="/images/editarUsuario.png" alt="Imagen de Perfil"  style="max-width: 100px; border-color: #000000;">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nombre:</label>
                <input type="text" id="name" wire:model="name" class="form-control" value="Jose Martinez">
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Correo:</label>
                <input type="email" id="email" wire:model="name" class="form-control" value="josue.martinez@infop.hn" onkeyup="validarespacio(this);" disabled>
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label for="claveActual" class="form-label">Contraseña Actual:</label>
                <div class="input-group mt-1">
                    <input type="password" id="claveActual" wire:model="password" class="form-control" onkeyup="validarespacio(this);" placeholder="Ingrese su Contraseña" />
                    <button type="button" class="btn btn-light" style="background-color: #00e5e5;border: 2px solid #e7e7e7" onclick="mostrarClave('claveActual', 'fotoClaveActual');">
                        <img src="/images/oculto.png" id="fotoClaveActual" style="height: 1rem">
                    </button>
                </div>
                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label for="nuevaClave" class="form-label">Nueva Contraseña:</label>
                <div class="input-group mt-1">
                    <input type="password" id="nuevaClave" wire:model="password" class="form-control" onkeyup="validarespacio(this);" placeholder="Ingrese su Contraseña" />
                    <button type="button" class="btn btn-light" style="background-color: #00e5e5; border: 2px solid #e7e7e7" onclick="mostrarClave('nuevaClave', 'fotoNuevaClave');">
                        <img src="/images/oculto.png" id="fotoNuevaClave" style="height: 1rem">
                    </button>
                </div>
                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <button type="button" class="btn btn-primary w-100" style=" background-color: #00e5e5; border-color: #00e5e5;">Actualizar Perfil</button>
        </form>
    </div><br>
</div>
<script type="text/javascript">
    var fotoMostrada = {};

    function mostrarClave(idInput, idImagen) {
        var contra = document.getElementById(idInput);
        var imagen = document.getElementById(idImagen);

        if (contra.type == 'password') {
            contra.type = 'text';
        } else {
            contra.type = 'password';
        }

        if (!fotoMostrada[idImagen]) {
            fotoMostrada[idImagen] = 'noVer';
        }

        if (fotoMostrada[idImagen] == 'ver') {
            imagen.src = '/images/oculto.png';
            fotoMostrada[idImagen] = 'noVer';
        } else {
            imagen.src = '/images/ver.png';
            fotoMostrada[idImagen] = 'ver';
        }
    }


    //validar espacio en blanco del campo usuario
    function validarespacio(e){
        e.value = e.value.replace(/ /g, '');
    }
  </script>