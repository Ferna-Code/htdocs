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
        <form method="POST" class="form">
            <div class="formulario-cursos">

                <div class="columna ">
                    <label for="categoria-curso">Categoria:</label>
                    <select id="categoria-curso" name="categoria-curso" required>
                        <option value="educacion">Educación y bienestar</option>
                        <option value="informatica">Tecnología e informática</option>
                        <option value="negocios">Negocios, gestión e innovación</option>
                    </select>
                </div>
                <div class="columna ">
                    <label for="Nombre">Nombre:</label>
                    <input type="text" id="Nombre" name="Nombre" required>
                </div>
                <div class="columna ">
                    <label for="descripcion-curso">Descripción del curso:</label>
                    <textarea id="descripcion-curso" name="descripcion-curso" rows="4" required></textarea>
                </div>
                <div class="columna ">
                    <label for="fecha-inicio">Fecha de inicio:</label>
                    <input type="date" class="form-control" name="fecha-inicio">
                </div>
                <div class="columna ">
                    <label for="link-inscripcion">Link inscripción:</label>
                    <input type="text" id="link-inscripcion" name="link-inscripcion" required>
                </div>
                <div class="columna ">
                <label for="categoria-curso">Activo:</label>
                    <select id="categoria-curso" name="categoria-curso" required>
                        <option value="educacion">1</option>
                        <option value="informatica">0</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn-curso" name="crearRegistro">Crear Curso</button>
        </form>
    </div>
</div>