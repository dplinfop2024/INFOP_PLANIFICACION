<!-- resources/views/livewire/perfil-usuario.blade.php -->
<div>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Perfil Card -->
                <div class="card">
                    <!-- Título centrado -->
                    <div class="card-header bg-primary text-white text-center">
                        <h4 class="mb-0">Datos Personales</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 d-flex align-items-center justify-content-center">
                                <!-- Imagen de Perfil Cuadrada -->
                                <div class="profile-picture">
                                    <i class="bi bi-person-circle fs-1"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <!-- Tabla con datos del usuario -->
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Nombre de Usuario:</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Nombre:</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Cargo:</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Nombre Unidad:</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Correo:</th>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Agregar estilos personalizados -->
    <style>
        .card {
            border-radius: 15px;
            border: 1px solid #ddd;
        }

        .card-header {
            border-bottom: 1px solid #ddd;
        }

        .profile-picture {
            width: 120px;
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            background-color: #f0f0f0;
            border: 3px solid #007bff;
            overflow: hidden;
        }

        .profile-picture i {
            color: #007bff;
        }

        .table th {
            font-weight: bold;
        }

        .table td {
            font-size: 0.9rem;
        }
    </style>
</div>
