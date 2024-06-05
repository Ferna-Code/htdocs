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
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new PerfilController();
    $controller->guardarDatosAlumno();
    exit;
}
?>
 <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<div class="conteiner">
    <form method="POST" id="formAlumno" enctype="multipart/form-data" class="form">
        <div class="">
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
                        <h1 style="font-size: 24px; font-weight: bold;" id="nombreH1"></h1>
                        </a>
                        <h4 style="color: black; font-size: 24px; font-weight: bold;"><?php echo $carrera ?></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="formulario">
            <h3 style="font-size: 20px; font-weight: bold; mt-2">Datos Personales</h3>
            <div class="formulario-experiencia mt-3">
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
            <div class="experiencialaboral">
                <h3 style="font-size: 20px; font-weight: bold; mt-2">Experiencia Laboral</h3>
                <div class="clientes-contenedor mt-3">
                    <div id="experiencia-laboral-container">
                        <div class="formulario-experiencia visible">
                            <div class="columna">
                                <label for="desde">Desde:</label>
                                <input type="date" id="desde" name="desde">
                            </div>
                            <div class="columna">
                                <label for="hasta">Hasta:</label>
                                <input type="date" id="hasta" name="hasta">
                            </div>
                            <div class="columna">
                                <label for="puesto">Puesto:</label>
                                <input type="text" id="puesto" name="puesto">
                            </div>
                            <div class="columna">
                                <label for="empresa">Empresa:</label>
                                <input type="text" id="empresa" name="empresa">
                            </div>
                            <div class="columna">
                                <label for="descripcion">Descripción:</label>
                                <textarea id="descripcion" name="descripcion" rows="4"></textarea>
                            </div>
                            <div class="columna">
                                <label for="trabaja-actualmente">¿Trabaja actualmente aquí?</label>
                                <div class="opciones">
                                    <input type="radio" id="si" name="trabaja-actualmente" value="si">
                                    <label for="si">Sí</label>
                                    <input type="radio" id="no" name="trabaja-actualmente" value="no">
                                    <label for="no">No</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Botón para agregar nuevo trabajo -->
                    <button type="button" class="btn-supervisor" onclick="agregarTrabajo()">Agregar trabajo</button>
                    <!-- fin contenedor para agregar trabajos -->
                </div>
                <br>
                <!-- Contenedor para formularios de educación/conocimientos -->
                <h3 style="font-size: 20px; font-weight: bold; mt-2">Educación y conocimientos</h3>
                    <div id="educacion-container">
                        <!-- Primer formulario de educación (visible por defecto) -->
                        <div class="formulario-educacion visible mt-3">
                            <div class="columna">
                                <label for="nombre-curso">Titulo obtenido:</label>
                                <input type="text" id="nombre-curso" name="nombre-curso">
                            </div>
                            <div class="columna">
                                <label for="institucion">Institución:</label>
                                <input type="text" id="institucion" name="institucion">
                            </div>
                            <div class="columna">
                                <label for="fecha-finalizado">Fecha de Finalización:</label>
                                <input type="date" id="fecha-finalizado" name="fecha-finalizado">
                            </div>
                        </div>
                    </div>
                    <!-- Botón para agregar nuevo formulario de educación -->
                    <div class="botones-container">
                        <button type="button" class="btn-supervisor" onclick="agregarEducacion()">Agregar
                            educación</button>
                    </div>
                </div>
                <br>
            </div>
            <!-- adjuntar cv alumno  -->
            <div style="mt-2">
                <div class="grid w-full max-w-xs items-center gap-1.5">
                    <label
                        class="text-sm text-black-400 font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Subir CV</label>
                    <input id="cv" type="file" accept=".pdf"
                        class="flex h-10 w-full rounded-md border border-input bg-white px-3 py-2 text-sm text-black-400 file:border-0 file:bg-transparent file:text-gray-600 file:text-sm file:font-medium">
                </div>
            </div>
            <!-- adjuntar cv alumnoEgresado -->
            <!-- GUARDAR DATOS ALUMNO -->
            <button type="button" class="btn-supervisor mt-3" onclick="guardarCambiosUsuario()" name="crearRegistro">Guardar
                Cambios</button>
            <!-- GUARDAR DATOS ALUMNO -->
        </div>

    </form>

</div>