<?php
require_once 'app/DAO/usuario/Impl/usuarioDaoImpl.php';
$admin = new usuarioDaoImpl();
$rutsesion = $_SESSION['rut'];
$imagen = $admin->obtenerImagenUsuario($rutsesion);
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['action'] === 'getData') {
    $controller = new PerfilController();
    $controller->getData();
    exit;  
}
?>
<div class="conteiner">
    <form method="POST" id="formAlumno" enctype="multipart/form-data" class="form">
        <div class="">
            <div class="cards">
                <div class="card">
                    <div class="imagen-container">
                        <input type="file" id="imagen" name="imagen" title="Subir foto" onchange="">
                        <div class="">
                            
                        <img src="<?php echo $imagen ?>" alt="Imagen del usuario">
                        </div>
                    </div>
                    <div class="contenido-texto-card">
                        <h1 id="nombre"></h1>
                        <h4>Analista Programador</h4>
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
                    <input type="email" class="form-control" id="email" name="email" >
                </div>
                <div class="columna">
                    <label for="fechanac">Fecha de nacimiento:</label>
                    <input type="date" class="form-control" id="fechanac" name="fechanac" >
                </div>
                <div class="columna">
                    <label for="telefono">Teléfono:</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" >
                </div>
                <div class="columna">
                    <label for="direccion">Dirección:</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" >
                </div>
                <div class="columna">
                    <label for="clave">Clave:</label>
                    <input type="password" class="form-control" id="password" name="password" >
                </div>
            </div>
            <!--AQUI EMPiIEZA EL FORM EXPERIENCIA  -->
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
                </div>
                <br>

                <DIV>
                <!-- FORM ACADEMICO -->
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
                <!-- FIN FORM ACADEMICO -->
                </DIV>
                <div class="container">
                    <h3>Adjuntar Curriculum: </h3>
                    <input type="file" class="" accept=".pdf,.docx, .doc" id="cvdocumento" name="cvdocumento"
                        title="Subir Curriculum">
                </div>
            </div>
            <!-- AQUI TERMINA FORM EXPERIENCIA -->
                <button type="submit" class="btn-supervisor" name="crearRegistro">Guardar Cambios</button>
            </div>
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./../../../Public/js/perfil.js"></script>
</div>