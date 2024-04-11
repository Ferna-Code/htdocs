<div class="conteiner">
    <form method="POST" class="form">
        <div class="">
            <div class="cards">
                <div class="card">
                    <div class="imagen-container">
                        <img src="../../../../Public/img/profe1.jpeg" alt="">
                        <input type="file" id="upload-foto" title="Subir foto" onchange="Main.perfil.changeFoto(event)">
                        <div class="profile-container__header__wrapper-icon">
                            <div class="profile-container__header__file-upload">
                                <span class="icon-camera"></span>
                            </div>
                        </div>
                    </div>
                    <div class="contenido-texto-card">
                        <h1>Luis Yañez R</h1>
                        <p>Técnico Analista Programador.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="formulario">
            <h3>Datos Personales</h3><br>
            <form method="POST" class="form">
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
                    <h3>Experiencia Laboral</h3><br>
                    <div class="conteiner">

                        <div class="clientes-contenedor">
                            <!-- Contenedor de formularios de experiencia laboral -->
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

                            <button type="button" class="btn-agregar-trabajo centrarBtn"
                                onclick="agregarTrabajo()">Agregar
                                trabajo</button>


                            <!-- Contenedor para formularios de educación/conocimientos -->
                            <h3>Educación y conocimientos</h3><br>
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
                                <button type="button" class="btn-agregar-trabajo centrarBtn"
                                    onclick="agregarEducacion()">Agregar
                                    educación</button>
                            </div>
                        </div>
                        <br>
                        <div class="container">
                            <h3>Adjuntar Curriculum</h3><br>
                            <input type="file" accept=".pdf,.docx, .doc" id="cvdocumento" name="cvdocumento"
                                title="Subir Curriculum">

                        </div>
                        <button type="submit" class="btn-guardar" name="crearRegistro">Guardar
                            Cambios</button>
            </form>
        </div>
    </form>
</div>