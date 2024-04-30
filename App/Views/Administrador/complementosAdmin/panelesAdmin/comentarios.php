<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Administrador de Comentarios</title>
<body>
<!--<div class="btn-panel">        
        <div>
            <a href="creaComentarios" class="btn  btn-primary">Crear Comentario</a>
            <label for="filtroUsuario">Filtrar por ID:</label>
            <input type="text" id="filtroUsuario">
        </div>
        <div>
            <label for="filtroCentro">Filtrar por Rut:</label>
            <input type="text" id="filtroCentro">
        </div>
    </div>-->
    <h1>Comentarios</h1>
    <div class="body-panel">
        <table id="tableUsers" class="tabla table">
            <style> .tabla { width: 100%; } </style>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Rut</th>
                    <th>ID Publicación</th>
                    <th>Comentario</th>
                    <th>N° de Reportes</th>
                    <th>Fecha  de Creación</th>
                    <th>Activo</th>
                    <th>Fecha de Eliminación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table table-striped">
                    <td>01</td>
                    <td>09999999-9</td>
                    <td>67</td>
                    <td>Este es un comentario</td>
                    <td>2</td>
                    <td>12-12-2024</td>
                    <td>Si</td>
                    <td>12-12-2024</td>
                    <td>
                        <a href="editarComentarios" class="btn w-100 m-1 btn-warning">editar</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-warning">borrar</a>
                    </td>
                </tr>
                <tr class="table table-striped">
                    <td>02</td>
                    <td>04444444-4</td>
                    <td>45</td>
                    <td>Este es otro comentario</td>
                    <td>3</td>
                    <td>12-12-2024</td>
                    <td>Si</td>
                    <td>12-12-2024</td>
                    <td>
                        <a href="editarComentarios" class="btn w-100 m-1 btn-warning">editar</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-warning">borrar</a>
                    </td>

                </tr>
                <tr class="table table-striped">
                    <td>03</td>
                    <td>05555555-5</td>
                    <td>34</td>
                    <td>Este es otro comentario mwe</td>
                    <td>0</td>
                    <td>12-12-2024</td>
                    <td>Si</td>
                    <td>12-12-2024</td>
                    <td>
                        <a href="editarComentarios" class="btn w-100 m-1 btn-warning">editar</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-warning">borrar</a>
                    </td>

                </tr>
            </tbody>
        </table>
    </div>
</body>
