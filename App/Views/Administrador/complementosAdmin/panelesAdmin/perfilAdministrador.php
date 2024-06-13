<?php
require_once 'app/DAO/usuario/Impl/usuarioDaoImpl.php';
require_once 'app/Controllers/AdministradorController.php';
$admin = new usuarioDaoImpl();
$rutsesion = $_SESSION['rut'];
$imagen = $admin->obtenerImagenUsuario($rutsesion);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['action'] === 'getDataUsuario') {
    $controller = new AdministradorController();
    $controller->getDataUsuario();
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['action'] === 'guardardatospersonales') {
    $controller = new AdministradorController();
    $controller->guardarDatosPersonales();
    exit;
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Usuario</title>
</head>
<link rel="stylesheet" href="../../../../Public/css/panelalumno.css">
    <link rel="stylesheet" href="../../../../Public/css/perfilalumno.css">
<body>
    <div style="width: 80%;">
        <form method="POST" id="formAlumno" enctype="multipart/form-data" class="form">
            <!-- Perfil del Usuario -->
            <div class="cards">
                <div class="card">
                    <div class="imagen-container">
                        <input type="file" id="imagen" name="imagen" title="Subir foto">
                        <div class="mt-3">
                            <img src="<?php
                            if ($imagen != "") {
                                echo $imagen;
                            } else {
                                echo "/uploads/usuarioSinFoto.jpg";
                            }
                            ?>" alt="Imagen del usuario">
                        </div>
                    </div>
                    <div class="contenido-texto-card">
                        <h1 style="font-size: 30px; font-weight: bold;" id="nombrep"></h1>
                        </a>
                        <h4 style="color: black; font-size: 24px; font-weight: bold;" id="cargo"></h4>
                    </div>
                </div>
            </div>

            <!-- Datos Personales -->

            <div>

                <h3 style="font-size: 30px;  color: red;" class="mt-3">Datos Personales</h3>
                <div class="grid">
                    <div>
                        <label for="rut">Rut:</label>
                        <input type="text" class="form-control" id="rut" name="rut" disabled>
                    </div>
                    <div>
                        <label for="email">Correo:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div>
                        <label for="fechanac">Fecha de nacimiento:</label>
                        <input type="date" class="form-control" id="fechanac" name="fechanac">
                    </div>
                    <div>
                        <label for="telefono">Teléfono:</label>
                        <input type="text" class="form-control" id="telefono" name="telefono">
                    </div>
                    <div>
                        <label for="direccion">Dirección:</label>
                        <input type="text" class="form-control" id="direccion" name="direccion">
                    </div>
                    <div>
                        <label for="clave">Clave:</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                </div>
            </div>
            <!-- Guardar Cambios -->
            <button id="guardar-cambios-usuario-btn" type="button" class="btn-supervisor mt-2">Guardar Cambios</button>
        </form>
    </div>
</body>
<script src="perfil.js"></script>
<script src="../../../../public/js/sweetalert2.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</html>