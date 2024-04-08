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
    
<form method="POST" class="form" style="padding: 100px 300px 0 300px;">

<div class="clientes contenedor">
        <div class="cards">
            <div class="card">
                <img src="../../../../Public/img/profe1.jpeg" alt="">
                <input type="file" id="img">imagen</input>
                <div class="contenido-texto-card">
                    <h4>Luis Yañez</h4>
                    <p>Maravilloso trabajo, muy profesionales en sus servicios de laboratorios.</p>
                </div>
            </div>
</div>

<div>
<table>
    <th>
        <label for="Nombre">Nombre <input type="text" id="nom">
    </th>
    <th><label for="Nombre">Nombre <input type="text" id="nom"></th>
    <th><label for="Nombre">Nombre <input type="text" id="nom"></th>
    <th><label for="Nombre">Nombre <input type="text" id="nom"></th>
    <th><label for="Nombre">Nombre <input type="text" id="nom"></th>
    <th><label for="Nombre">Nombre <input type="text" id="nom"></th>
</table>
</div>

    <h2 style="text-align: center;">FORMULARIO</h2><br>
    <div class="row">
        <div class="col">
            <label for="rut">Nombre Completo</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <div class="col">
            <label for="nombre">Rut</label>
            <input type="text" class="form-control" name="rut" disabled>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col">
            <label for="paterno">Fecha de nacimiento</label>
            <input type="date" class="form-control" name="fecha">
        </div>
        <div class="col">
            <label for="materno">Teléfono</label>
            <input type="text" class="form-control" name="telefono">
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col">
            <label for="paterno">Carrera</label>
            <input type="text" class="form-control" name="carrera" disabled>
        </div>
        <div class="col">
            <label for="materno">Nivel</label>
            <input type="text" class="form-control" name="nivel" disabled>
        </div>
    </div>

    <br><br>

    <div>
        <h2 style="text-align: center;">Experiencia Laboral</h2><br>
        <div>
            <h6> Experiencia 1 </h6>
            <label style="text-align: center;" for="cargo">Cargo</label>
            <input type="text" class="form-control" name="cargo">
            <label style="text-align: center;" for="descripcion">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="2"></textarea>
        </div><br>
        <div>
        <h6> Experiencia 1 </h6>
            <label style="text-align: center;" for="cargo">Cargo</label>
            <input type="text" class="form-control" name="cargo">
            <label for="descripcion">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="2"></textarea>
        </div><br>
        <div>
        <h6> Experiencia 1 </h6>
            <label style="text-align: center;" for="cargo">Cargo</label>
            <input type="text" class="form-control" name="cargo">
            <label for="descripcion">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="2"></textarea>
        </div><br>
    </div> 

    <br>

        <div>
        <h2 style="text-align: center;">Experiencia Academica</h2><br>
        <div>
        <h6> Experiencia 1 </h6>
            <label for="cargo">Titulo</label>
            <input type="text" class="form-control" name="cargo">
        </div><br>
        <div>
        <h6> Experiencia 1 </h6>
            <label for="cargo">Titulo</label>
            <input type="text" class="form-control" name="cargo">
        </div><br>
        <div>
        <h6> Experiencia 1 </h6>
            <label for="cargo">Titulo</label>
            <input type="text" class="form-control" name="cargo">
        </div><br>
    </div>

    <br>

    <button type="submit" class="btn btn-primary w-100" name="crearRegistro">Registro</button>
</form>


<?php
# AGREGAR MENDIANTE JAVASCRIPT EL ACORDEON PARA LAS EXPERIENCIAS LABORALES Y LOS CURSOS
?>
</body>
</html>