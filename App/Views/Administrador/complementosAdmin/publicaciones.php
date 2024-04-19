<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Publicaciones</title>
<body>
<div class="btn-panel">        
        <div>
            <a href="creaPublicaciones" class="btn  btn-primary">Crear Publicaciones</a>
            <label for="filtroUsuario">Filtrar por ID:</label>
            <input type="text" id="filtroUsuario">
        </div>
        <div>
            <label for="filtroCentro">Filtrar por XXX:</label>
            <input type="text" id="filtroCentro">
        </div>
    </div>
   
    <div class="body-panel">
        <table id="tableUsers" class="tabla table">
            <style> .tabla { width: 100%; } </style>
            <thead>
                <tr>
                    <th>ID Publicación</th>
                    <th>Rut Usuario</th>
                    <th>Publicación</th>
                    <th>N° de Reportes</th>
                    <th>Fecha de Ingreso</th>
                    <th>Activo</th>
                    <th>Fecha de Eliminacion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table table-striped">
                    <td>01</td>
                    <td>44444444-4</td>
                    <td>Esta es una Publicación</td>
                    <td>01</td>
                    <td>12-12-2024</td>
                    <td>No</td>
                    <td>12-12-2024</td>
                    <td>
                        <a href="editarPublicaciones" class="btn w-100 m-1 btn-primary">editar</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-danger">borrar</a>
                    </td>
                </tr>
                <tr class="table table-striped">
                    <td>02</td>
                    <td>55555555-5</td>
                    <td>Esta es una Publicación</td>
                    <td>02</td>
                    <td>12-12-2024</td>
                    <td>No</td>
                    <td>12-12-2024</td>
                    <td>
                        <a href="editarPublicaciones" class="btn w-100 m-1 btn-primary">editar</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-danger">borrar</a>
                    </td>

                </tr>
                <tr class="table table-striped">
                    <td>03</td>
                    <td>66666666-6</td>
                    <td>Esta es una Publicación</td>
                    <td>03</td>
                    <td>12-12-2024</td>
                    <td>No</td>
                    <td>12-12-2024</td>
                    <td>
                        <a href="editarPublicaciones" class="btn w-100 m-1 btn-primary">editar</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-danger">borrar</a>
                    </td>

                </tr>
            </tbody>
        </table>
    </div>
</body>
