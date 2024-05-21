<?php
require_once ("App/Controllers/PerfilController.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $op = isset($_POST['op']) ? $_POST['op'] : '';
    if ($op === 'guardardatosperfil') {
        // Crear una instancia del controlador de publicaciones
        $controlador = new PerfilController();
        // Procesar la publicación
        $controlador->guardarDatosAlumno();
    }
}

?>

<div class="conteiner">
    <form method="POST" action="" enctype="multipart/form-data" class="form">
        <div class="">
            <div class="cards">
                <div class="card">
                    <div class="imagen-container">
                        <?php
                        $perfilController = new PerfilController();
                        $rut = $_SESSION['rut'];
                        $imagenPerfil = $perfilController->obtenerImagenUsuario($rut);
                        ?>
                        <!-- Verifica si se encontró la imagen -->
                        <?php if ($imagenPerfil): ?>
                            <img src="<?php echo $imagenPerfil; ?>" alt="Imagen de perfil">
                        <?php else: ?>
                            <p>No se encontró una imagen para este usuario.</p>
                        <?php endif; ?>
                        <input type="file" id="imagen" name="imagen" title="Subir foto" onchange="">
                        <div class="">
                            <div class="">
                                <span class="icon-camera"></span>
                            </div>
                        </div>
                    </div>
                    <div class="contenido-texto-card">
                        <h1>Luis Yañez Carreño</h1>
                        <h4>Profesor de Programación</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="formulario">
            <h3>Datos Personales</h3>
            <div class="formulario-experiencia">
                <div class="columna">
                    <label for="rut">Rut:</label>
                    <input type="text" class="form-control" name="rut" disabled>
                </div>
                <div class="columna">
                    <label for="email">Correo:</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="columna">
                    <label for="fechanac">Fecha de nacimiento:</label>
                    <input type="date" class="form-control" name="fechanac">
                </div>
                <div class="columna">
                    <label for="telefono">Teléfono:</label>
                    <input type="text" class="form-control" name="telefono">
                </div>
                <div class="columna">
                    <label for="direccion">Dirección:</label>
                    <input type="text" class="form-control" name="direccion">
                </div>
                <div class="columna">
                    <label for="clave">Clave:</label>
                    <input type="password" class="form-control" name="clave">
                </div>
            </div>
            <div class="experiencialaboral">
                <h3>Experiencia Laboral</h3>
                <div class="clientes-contenedor">
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
                    <!-- Contenedor para formularios de educación/conocimientos -->
                    <h3>Educación y conocimientos</h3>
                    <div id="educacion-container">
                        <!-- Primer formulario de educación (visible por defecto) -->
                        <div class="formulario-educacion visible">
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
                <div class="container">
                    <h3>Adjuntar Curriculum: </h3>
                    <input type="file" class="" accept=".pdf,.docx, .doc" id="cvdocumento" name="cvdocumento"
                        title="Subir Curriculum">
                </div>
                <input type="hidden" name="op" value="guardardatosperfil">
                <button type="submit" class="btn-supervisor" name="crearRegistro">Guardar Cambios</button>
            </div>
        </div>
    </form>
</div>