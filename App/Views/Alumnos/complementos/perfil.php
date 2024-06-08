<?php
require_once 'app/DAO/usuario/Impl/usuarioDaoImpl.php';
$admin = new usuarioDaoImpl();
$rutsesion = $_SESSION['rut'];
$imagen = $admin->obtenerImagenUsuario($rutsesion);
$carrera = $admin->obtenerCarreraUsuario($rutsesion);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['action'] === 'getData') {
    $controller = new PerfilController();
    $controller->getData();
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['action'] === 'saveData') {
    $controller = new PerfilController();
    $controller->guardarDatosAlumno();
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

<body>
    <div style="width: 80%; color:">
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
                        <h4 style="color: black; font-size: 24px; font-weight: bold;"><?php echo $carrera ?></h4>
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

            <!-- Experiencia Laboral -->

            <div class="mt-4">
                <hr>
                <h3 style="font-size: 30px;  color: red;" class="mt-3">Experiencia Laboral</h3>
                <div id="formularioexperiencialaboral"></div>
                <button type="button" class="btn-supervisor mt-2" id="agregar-experiencia-btn">Agregar Trabajo</button>
                <div id="mensaje-error" class="text-red-500 mt-1"></div>
            </div>

            <!-- Experiencia Academica -->

            <div class="mt-4">
                <hr>
                <h3 style="font-size: 30px;  color: red;" class="mt-3">Experiencia Academica</h3>
                <div id="formularioexperienciaacademica"></div>
                <button type="button" class="btn-supervisor mt-2" id="agregar-experiencia-academica-btn">Agregar
                    Conocimientos</button>
                <div id="mensaje-error-academico" class="text-red-500 mt-1"></div>
            </div>
            <!-- Adjuntar CV -->
            <hr>
            <div class="custom-grid mt-4 mb-5">
                <label for="archivocv" class="custom-label">Adjuntar CV</label>
                <input id="archivocv" accept=".pdf" type="file" class="custom-input">
                <div id="contenedorcv"></div>
            </div>
            <hr>
            <!-- Guardar Cambios -->
            <button id="guardar-cambios-usuario-btn" type="button" class="btn-supervisor mt-2">Guardar Cambios</button>
        </form>
    </div>

    <script src="perfil.js"></script>
</body>

</html>