<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" type="image/svg+xml" href="~/favicon.ico" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Document</title>
</head>
<style>
    /* Estilos para el acordeón */
    .accordion-section {
        display: none;
        /* Ocultar la sección inicialmente */
        margin-top: 10px;
        padding: 10px;
    }
    .post-container {
            display: flex;
            align-items: center;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
        }
        .post-container textarea {
            flex: 1;
            resize: none;
            border: none;
            outline: none;
            font-size: 16px;
            padding: 5px;
            margin-right: 10px;
            border-radius: 5px;
        }
        .post-container button {
            padding: 8px 15px;
            background-color: #ED1C24;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            outline: none;
        }
        .post-container button:hover {
            background-color: #F8B619;
        }

</style>

<body>

    <header class="navbar navbar-light fixed-top" style="background-color: #9CD0FE;">
        <div class="container">
            <a class="navbar-brand" href="">
                <img src="" alt="" width="110" height="35">
            </a>
            <nav class="nav">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link text-blue" href=""><i class="fa-solid fa-house"></i>inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-blue" href=""> <i class="">Opcion</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-blue" href=""> <i class="">Opcion</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-blue" href=""> <i class="">Opcion</i></a>
                    </li>

                    <div class="m-1">
                        <button type="button" class="btn btn-outline-primary btn-sm ">Mi Perfil</button>
                    </div>
                    <div class="m-1">
                        <button type="button" class="btn btn-outline-warning btn-sm">Cerrar sesión</button>
                    </div>

                </ul>
            </nav>
        </div>
    </header>


<tr>


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





<br>
<br>

<div class="container">
        <div class="post-container">
            <textarea placeholder="¿Qué estás pensando?"></textarea>
            <button>Publicar</button>
        </div>
    </div>

<br>
<br>


<div>
<div class="container">
<h2>Cursos</h2><br>
    <div class="row">
        <!-- Primera Tarjeta -->
        <div style="margin-top: 20px;" class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Curso 1</h5>
                    <h6 class="card-subtitle mb-4 text-muted">Subtitle 1</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Card Link</a>
                </div>
            </div>
        </div>

        <!-- Segunda Tarjeta -->
        <div style="margin-top: 20px;" class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Curso 2</h5>
                    <h6 class="card-subtitle mb-4 text-muted">Subtitle 2</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Card Link</a>
                </div>
            </div>
        </div>

        <!-- Tercera Tarjeta -->
        <div style="margin-top: 20px;" class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Curso 3</h5>
                    <h6 class="card-subtitle mb-4 text-muted">Subtitle 3</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Card Link</a>
                </div>
            </div>
        </div>
                <!-- Primera Tarjeta -->
                <div style="margin-top: 20px;" class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Curso 1</h5>
                    <h6 class="card-subtitle mb-4 text-muted">Subtitle 1</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Card Link</a>
                </div>
            </div>
        </div>

        <!-- Segunda Tarjeta -->
        <div style="margin-top: 20px;" class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Curso 2</h5>
                    <h6 class="card-subtitle mb-4 text-muted">Subtitle 2</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Card Link</a>
                </div>
            </div>
        </div>

        <!-- Tercera Tarjeta -->
        <div style="margin-top: 20px;" class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Curso 3</h5>
                    <h6 class="card-subtitle mb-4 text-muted">Subtitle 3</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Card Link</a>
                </div>
            </div>
        </div>
    </div>




</div>
<br>
<br>

<div>
<h2>Oferta laboral</h2><br>
<div class="card">
  <h5 class="card-header">Featured</h5>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>

<br>
<br>


    <section style="margin: 10px;">
        <table id="tableUsers" class="tabla table">
            <style>
                .tabla {
                    width: 100%;
                }
            </style>
            <thead>
                <tr>
                    <th>Nombre Completo</th>
                    <th>Rut</th>
                    <th>Fecha de Ingreso</th>
                    <th>Dimicilio</th>
                    <th>Centro Medico</th>
                    <th>Examen</th>
                    <th>Estado</th>
                    <th>Examen</th>
                    <th>Estado</th>
                    <th>Acciones</th>

                </tr>
            </thead>
            <tbody>
                <tr class="table table-striped">
                    <td>luis yañez</td>
                    <td>17426433-5</td>
                    <td>12-12-2024</td>
                    <td>Arturo prat 269</td>
                    <td>indisa</td>
                    <td>glisemia</td>
                    <td>pendiente</td>
                    <td>ingresado</td>
                    <td>
                        <a href="editar.php" class="btn w-100 m-1 btn-primary">editar</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-danger">borrar</a>
                    </td>
                    <td>
                        <a href="editar.php" class="btn w-100 m-1 btn-success">Enviar Ticion</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-success">Enviar Registro</a>
                    </td>
                </tr>
                <tr class="table table-striped">
                    <td>luis yañez</td>
                    <td>17426433-5</td>
                    <td>12-12-2024</td>
                    <td>Arturo prat 269</td>
                    <td>indisa</td>
                    <td>glisemia</td>
                    <td>pendiente</td>
                    <td>ingresado</td>
                    <td>
                        <a href="editar.php" class="btn w-100 m-1 btn-primary">editar</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-danger">borrar</a>
                    </td>
                    <td>
                        <a href="editar.php" class="btn w-100 m-1 btn-success">Enviar Ticion</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-success">Enviar Registro</a>
                    </td>
                </tr>
                <tr class="table table-striped">
                    <td>luis yañez</td>
                    <td>17426433-5</td>
                    <td>12-12-2024</td>
                    <td>Arturo prat 269</td>
                    <td>indisa</td>
                    <td>glisemia</td>
                    <td>pendiente</td>
                    <td>ingresado</td>
                    <td>
                        <a href="editar.php" class="btn w-100 m-1 btn-primary">editar</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-danger">borrar</a>
                    </td>
                    <td>
                        <a href="editar.php" class="btn w-100 m-1 btn-success">Enviar Ticion</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-success">Enviar Registro</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>



    <script src="https://kit.fontawesome.com/4652dbea50.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-zi8n3R9KXZxT7DmWxvBkfpMKZIcdGZ9xyyDBqF+2tcQFh0cL4DBB9cbcrZxy4xXr"
        crossorigin="anonymous"></script>
</body>

</html>


<script>

    var sectionHidden = false;
    // Función para mostrar u ocultar la sección del acordeón
    function toggleAccordion() {
        var section = document.getElementById("accordionSection");
        if (section.style.display === "none") {
            section.style.display = "block";
        } else {
            section.style.display = "none";
        }
    }

    function toggleAccordion() {
        var section = document.getElementById("accordionSection2");
        if (section.style.display === "none") {
            section.style.display = "block";
        } else {
            section.style.display = "none";
        }
    }

    function toggleAccordion() {
        var section = document.getElementById("accordionSection3");
        if (section.style.display === "none") {
            section.style.display = "block";
        } else {
            section.style.display = "none";
        }
    }

    function toggleAccordion() {
        var section = document.getElementById("accordionSection4");
        if (section.style.display === "none") {
            section.style.display = "block";
        } else {
            section.style.display = "none";
        }
    }
</script>