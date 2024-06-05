
<?php
require_once 'app/DAO/usuario/Impl/usuarioDaoImpl.php';
$admin = new usuarioDaoImpl();
$rutsesion = $_SESSION['rut'];
$imagen = $admin->obtenerImagenUsuario($rutsesion);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action']) && $_GET['action'] === 'getData') {
    $controller = new PerfilController();
    $controller->getData();
    exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new PerfilController();
    $controller->guardarDatosAlumno();
    exit;
}
?>
<div class="conteiner">
    <form method="POST" id="formAlumno" enctype="multipart/form-data" class="form">
        <div class="">
            <div class="cards">
                <div class="card">
                    <div class="imagen-container">
                        <input type="file" id="imagen" name="imagen" title="Subir foto">
                        <div class="">
                            <img src="<?php
                            if ($imagen != "") {
                                echo $imagen;
                            } else {
                                echo "/uploads/usuarioSinFoto.jpg";
                            }
                            ?>" alt="Imagen">
                        </div>
                    </div>
                    <div class="contenido-texto-card">
                        <h1 id="nombreH1"></h1>
                        </a>
                        <h4>[[CARGO]]</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="formulario">
            <h3>Datos Personales</h3>
            <div class="formulario-experiencia">
                <div class="columna">
                    <label for="rut">Rut:</label>
                    <input type="text" class="form-control" id="rut" name="rut" disabled>
                </div>
                <div class="columna">
                    <label for="email">Correo:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="columna">
                    <label for="fechanac">Fecha de nacimiento:</label>
                    <input type="date" class="form-control" id="fechanac" name="fechanac">
                </div>
                <div class="columna">
                    <label for="telefono">Teléfono:</label>
                    <input type="text" class="form-control" id="telefono" name="telefono">
                </div>
                <div class="columna">
                    <label for="direccion">Dirección:</label>
                    <input type="text" class="form-control" id="direccion" name="direccion">
                </div>
                <div class="columna">
                    <label for="clave">Clave:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
            </div>


            <!-- GUARDAR DATOS ALUMNO -->
            <button type="button" class="btn-supervisor" onclick="guardarCambiosUsuario()" name="crearRegistro">Guardar
                Cambios</button>
            <!-- GUARDAR DATOS ALUMNO -->
        </div>

    </form>

</div>