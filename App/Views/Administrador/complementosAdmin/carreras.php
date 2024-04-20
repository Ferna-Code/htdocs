<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Administrador Carreras</title>
<body>
    <div class="btn-panel">
        <div>
            <a href="crearCarrera" class="btn  btn-primary">Crear Carrera</a>
            <label for="filtroUsuario">Filtrar por ID:</label>
            <input type="text" id="filtroUsuario">
        </div>
        <div>
            <label for="filtroCentro">Filtrar por Categoría:</label>
            <input type="text" id="filtroCentro">
        </div>
    </div>
   
    <div class="body-panel">
        <table id="tableUsers" class="tabla table">
            <style> .tabla { width: 100%; } </style>
            <thead>
                <tr>
                    <th>Id Carrera</th>
                    <th>Nombre</th>
                    <th>Categoria</th>
                    <th>Fecha de Ingreso</th>
                    <th>Activo</th>
                    <th>Fecha de Eliminacion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table table-striped">
                    <td>01</td>
                    <td>Analista Programador</td>
                    <td>Informática Tecnología y Productividad</td>
                    <td>12-04-2024</td>
                    <td>Si</td>
                    <td>23-04-2024</td>
                    <td>
                        <a href="editarCarrera" class="btn w-100 m-1 btn-primary">editar</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-danger">borrar</a>
                    </td>
                </tr>
                <tr class="table table-striped">
                    <td>02</td>
                    <td>Técnico en Construcción</td>
                    <td>Informática Tecnología y Productividad</td>
                    <td>12-04-2024</td>
                    <td>Si</td>
                    <td>23-04-2024</td>
                    <td>
                        <a href="editar.php" class="btn w-100 m-1 btn-primary">editar</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-danger">borrar</a>
                    </td>

                </tr>
                <tr class="table table-striped">
                    <td>03</td>
                    <td>Psicopedagogía</td>
                    <td>Educación Bienestar y Calidad de vida</td>
                    <td>12-04-2024</td>
                    <td>Si</td>
                    <td>23-04-2024</td>
                    <td>
                        <a href="editar.php" class="btn w-100 m-1 btn-primary">editar</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-danger">borrar</a>
                    </td>

                </tr>
            </tbody>
        </table>
    </div>
</body>
