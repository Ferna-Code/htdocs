<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../Public/css/perfilalumno.css">
    <title>Document</title>
</head>

<body>
    <div class="conteiner">
        <form method="POST" class="form">
            <div class="clientes-contenedor">
                <div class="cards">
                    <div class="card">
                        <div class="imagen-container">
                            <img src="../../../../Public/img/profe1.jpeg" alt="">
                            <input type="file" id="upload-foto" title="Subir foto"
                                onchange="Main.perfil.changeFoto(event)">
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
                        <form method="POST" class="form">
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
                                <button type="button" class="btn-agregar-trabajo" onclick="agregarTrabajo()">Agregar
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
                                <button type="button" class="btn-agregar-trabajo" onclick="agregarEducacion()">Agregar
                                    educación</button>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn-guardar" name="crearRegistro">Guardar
                                Cambios</button>
                        </form>
                    </div>
                </div>

                <script>
                    let contadorFormularios = 1;

                    function agregarTrabajo() {
                        if (contadorFormularios <= 2) {
                            // Clona el primer formulario de experiencia laboral
                            const nuevoFormulario = document.querySelector('.formulario-experiencia.visible').cloneNode(true);

                            // Incrementa el contador de formularios
                            contadorFormularios++;

                            // Asigna un ID único al nuevo formulario
                            const nuevoId = `experiencia${contadorFormularios}`;
                            nuevoFormulario.id = nuevoId;

                            // Modifica los atributos "for" de las etiquetas <label> para asociarlos con los nuevos inputs
                            nuevoFormulario.querySelectorAll('label').forEach(label => {
                                const inputId = label.getAttribute('for');
                                if (inputId) {
                                    const nuevoInputId = `${inputId}-${contadorFormularios}`;
                                    label.setAttribute('for', nuevoInputId);
                                }
                            });

                            // Modifica los atributos "id" y "name" de los inputs del nuevo formulario
                            nuevoFormulario.querySelectorAll('input, textarea').forEach(input => {
                                const inputName = input.getAttribute('name');
                                if (inputName) {
                                    const nuevoInputName = `${inputName}-${contadorFormularios}`;
                                    input.setAttribute('id', nuevoInputName);
                                    input.setAttribute('name', nuevoInputName);
                                }
                            });

                            // Oculta el nuevo formulario
                            nuevoFormulario.classList.remove('visible');
                            nuevoFormulario.classList.add('oculto');

                            // Agrega el nuevo formulario clonado al contenedor
                            document.getElementById('experiencia-laboral-container').appendChild(nuevoFormulario);

                            // Muestra el nuevo formulario
                            setTimeout(() => {
                                nuevoFormulario.classList.add('visible');
                            }, 10);
                        } else {
                            alert("Solo se permiten agregar hasta 3 trabajos.");
                        }
                    }
                </script>
                <script>
                    let contadorFormulariosEducacion = 1;

                    function agregarEducacion() {
                        if (contadorFormulariosEducacion <= 2) {
                            // Clona el primer formulario de educación
                            const nuevoFormulario = document.querySelector('.formulario-educacion').cloneNode(true);

                            // Incrementa el contador de formularios de educación
                            contadorFormulariosEducacion++;

                            // Asigna un ID único al nuevo formulario de educación
                            const nuevoId = `educacion${contadorFormulariosEducacion}`;
                            nuevoFormulario.id = nuevoId;

                            // Modifica los atributos "for" de las etiquetas <label> para asociarlos con los nuevos inputs
                            nuevoFormulario.querySelectorAll('label').forEach(label => {
                                const inputId = label.getAttribute('for');
                                if (inputId) {
                                    const nuevoInputId = `${inputId}-${contadorFormulariosEducacion}`;
                                    label.setAttribute('for', nuevoInputId);
                                }
                            });

                            // Modifica los atributos "id" y "name" de los inputs del nuevo formulario de educación
                            nuevoFormulario.querySelectorAll('input, textarea').forEach(input => {
                                const inputName = input.getAttribute('name');
                                if (inputName) {
                                    const nuevoInputName = `${inputName}-${contadorFormulariosEducacion}`;
                                    input.setAttribute('id', nuevoInputName);
                                    input.setAttribute('name', nuevoInputName);
                                }
                            });

                            // Oculta el nuevo formulario de educación
                            nuevoFormulario.classList.remove('visible');
                            nuevoFormulario.classList.add('oculto');

                            // Agrega el nuevo formulario de educación clonado al contenedor
                            document.getElementById('educacion-container').appendChild(nuevoFormulario);

                            // Muestra el nuevo formulario de educación
                            setTimeout(() => {
                                nuevoFormulario.classList.add('visible');
                            }, 10);
                        } else {
                            alert("Solo se permiten agregar hasta 3 formularios de educación.");
                        }
                    }
                </script>


</body>

</html>