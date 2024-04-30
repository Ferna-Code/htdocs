<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Usuarios</title>
<body>

    <h1>Usuarios</h1>
    <div class="body-panel">
        <table id="tableUsers" class="tabla table">
            <style> .tabla { width: 100%; } </style>
            <thead>
                <tr>
                    <th>Rut</th>
                    <th>Nombre</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Correo</th>
                    <th>Carrera</th>
                    <th>Avance</th>
                    <th>Cargo</th>
                    <th>Fecha de Ingreso</th>
                    <th>Activo</th>
                    <th>Feha de Eliminación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table table-striped">
                    <td>11111111-1</td>
                    <td>Luis Yañez Carreño</td>
                    <td>12-12-1954</td>
                    <td>Profesor@leones.cl</td>
                    <td>Analista Programador</td>
                    <td>5</td>
                    <td>Docente</td>
                    <td>12-12-2024</td>
                    <td>Si</td>
                    <td>12-12-2024</td>
                    <td>
                        <a href="editarUsuario" class="btn w-100 m-1 btn-warning">editar</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-warning">borrar</a>
                    </td>
                </tr>
                <tr class="table table-striped">
                    <td>33333333-3</td>
                    <td>Ivan Rojas</td>
                    <td>12-12-1930</td>
                    <td>JefeCarrera@leones.cl</td>
                    <td>Otra Carrera</td>
                    <td>5</td>
                    <td>Docente</td>
                    <td>12-12-2024</td>
                    <td>Si</td>
                    <td>12-12-2024</td>
                    <td>
                        <a href="editarUsuario" class="btn w-100 m-1 btn-primary">editar</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-danger">borrar</a>
                    </td>

                </tr>
                <tr class="table table-striped">
                    <td>22222222-2</td>
                    <td>Ramon Vasquez</td>
                    <td>12-12-1986</td>
                    <td>Profesor2@leones.cl</td>
                    <td>Analista Programador</td>
                    <td>5</td>
                    <td>Docente</td>
                    <td>12-12-2024</td>
                    <td>Si</td>
                    <td>12-12-2024</td>
                    <td>
                        <a href="editarUsuario" class="btn w-100 m-1 btn-primary">editar</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-danger">borrar</a>
                    </td>

                </tr>
            </tbody>
        </table>
    </div>
</body>
