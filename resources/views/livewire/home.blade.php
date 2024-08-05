<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #082338;
        }
        .content {
            flex: 1;
        }
        .turquoise-bar {
            background-color: #00e5e5; /* Color turquesa */
            height: 70px; /* Altura de la franja */
            width: 100%;
            display: flex;
            align-items: center; /* Centra verticalmente el contenido */
            padding-left: 10px; /* Espacio a la izquierda */
        }
        .turquoise-bar img {
            height: 130px; /* Ajusta la altura de la imagen */
            width: auto; /* Mantiene la proporción de la imagen */
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="turquoise-bar">
            <img src="/images/Logo INFOP 2022.png" alt="Imagen a la izquierda">
        </div><br>
        <br>
        <center>
        <div class="bg-white p-5 rounded-5 text-secondary shadow" style="width: 25rem">
            <div class="d-flex justify-content-center">
                <img src="/images/logo INFOP small.png" alt="login-icon" style="height: 7rem"/>
            </div>
            <div class="text-center fs-1 fw-bold">Inicio de Sesión</div>
            <div class="input-group mt-4">
                <div class="input-group-text">
                    <img src="/images/usuario.png" alt="username-icon" style="height: 1.5rem"/>
                </div>
                <input class="form-control bg-light" id="user" type="text" onkeyup="validarespacio(this);" placeholder="Ingrese su correo"/>
            </div>
            <br>
            <div class="input-group mt-1">
                <div class="input-group-text">
                    <img src="/images/contrasena.png" alt="password-icon" style="height: 1.5rem"/>
                </div>
                <input class="form-control bg-light" id="user_clave" type="password" onkeyup="validarespacio(this);" placeholder="Ingrese su Contraseña"/>
                <button type="button" class="btn btn-light" style="border: 2px solid #e7e7e7" onclick="mostrarClave();">
                    <img src="/images/oculto.png" id="foto2" style="height: 1rem">
                </button>
            </div>
            <div class="d-flex justify-content-around mt-1">
                <div class="pt-1"><br>
                    <a class="text-decoration-none text-info fw-semibold fst-italic" style="font-size: 0.9rem">¿Olvidaste tu Contraseña?</a>
                </div>
            </div>
            <br>
            <div id="estado_login" class="card-footer"> </div>
            <div class="d-grid gap-2 col-6">
                <button class="btn btn-primary" type="button" href="{{route('login')}}" wire:navigate>Login</button>
            </div>
        </center>
        <br><br>
    </div>
    <div class="turquoise-bar"></div>

    <script type="text/javascript">
        var fotoMostrada2 = 'noVer2';

        function mostrarClave() {
            var contra = document.getElementById("user_clave");
            var imagen = document.getElementById("foto2");

            if (contra.type == 'password') {
                contra.type = 'text';
            } else {
                contra.type = 'password';
            }

            if (fotoMostrada2 == 'ver2') {
                imagen.src = '/images/oculto.png';
                fotoMostrada2 = 'noVer2';
            } else {
                imagen.src = '/images/ver.png';
                fotoMostrada2 = 'ver2';
            }
        }

        window.onload = function() {
            var myInput = document.getElementById('user');
            myInput.onpaste = function(e) {
                e.preventDefault();
            }
            myInput.oncopy = function(e) {
                e.preventDefault();
            }
            var myClave = document.getElementById('user_clave');
            myClave.onpaste = function(e) {
                e.preventDefault();
            }
        }

        function validarespacio(e) {
            e.value = e.value.replace(/ /g, '');
        }
    </script>
</body>
</html>
