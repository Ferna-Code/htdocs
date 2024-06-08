<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
} ?>

<head>
    <link rel="stylesheet" href="../../../../Public/css/formcursos.css">
    <link rel="stylesheet" href="../../../../Public/css/ofertas.css">
</head>

<div class="contenedor-principal">
    <div class="banner">
        <img src="../../../../Public/img/bannerempleos.png" alt="">
    </div>
    <h1>Crear Cursos </h1>
    <div class="">
        <div class="formulario-cursos">
            <form method="POST" id="crearCurso" class="form">


                <div class="columna ">
                    <label for="categoria-curso">Categoria:</label>
                    <select id="categoria-curso" name="categoria-curso" required>
                        <option value="1">Educación, bienestar y calidad</option>
                        <option value="2">Informática, tecnología y productividad</option>
                        <option value="3">Negocios, gestión e innovación</option>
                    </select>
                </div>
                <div class="columna ">
                    <label for="Nombre">Nombre:</label>
                    <input type="text" id="Nombre" name="Nombre" required>
                </div>
                <div class="columna ">
                    <label for="centro">Centro de capacitación:</label>
                    <input type="text" id="centro" name="centro" required>
                </div>
                <div class="columna ">
                    <label for="descripcion-curso">Descripción del curso:</label>
                    <textarea id="descripcion-curso" name="descripcion-curso" rows="4" required></textarea>
                </div>
                <div class="columna ">
                    <label for="fecha-inicio">Fecha de inicio:</label>
                    <input type="date" id="fecha-inicio" class="form-control" name="fecha-inicio">
                </div>
                <div class="columna ">
                    <label for="link-inscripcion">Link inscripción:</label>
                    <input type="text" id="link-inscripcion" name="link-inscripcion" required>
                </div>
                <div class="columna ">
                    <label for="activo">Activo:</label>
                    <select id="activo" name="activo" required>
                        <option value="1">Si</option>
                        <option value="0">No</option>
                    </select>
                </div>

                <input type="submit" class="btn-curso" name="crearRegistro" value="Crear Curso">
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="./../../../Public/js/empresa.js"></script>