
<form method="POST" class="form" style="padding: 100px 300px 0 300px;">


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