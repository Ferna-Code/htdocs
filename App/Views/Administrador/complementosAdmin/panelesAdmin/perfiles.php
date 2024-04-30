<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crear Perfiles</title>
<body>
<!--<div class="btn-panel">        
        <div>
            <a href="creaPerfiles" class="btn  btn-primary">Crear Perfil</a>
            <label for="filtroUsuario">Filtrar por ID:</label>
            <input type="text" id="filtroUsuario">
        </div>
        <div>
            <label for="filtroCentro">Filtrar por Perfil:</label>
            <input type="text" id="filtroCentro">
        </div>
    </div>-->
    <h1>Perfiles</h1>
    <div class="body-panel">
        <table id="tableUsers" class="tabla table">
            <style> .tabla { width: 100%; } </style>
            <thead>
                <tr>
                    <th>Id Perfil</th>
                    <th>Nombre</th>
                    <th>Rut Usuario</th>
                    <th>Fecha de Ingreso</th>
                    <th>Activo</th>
                    <th>Fecha de Eliminacion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table table-striped">
                    <td>01</td>
                    <td>Administrador</td>
                    <td>11111111-1</td>
                    <td>12-12-2024</td>
                    <td>Si</td>
                    <td>12-12-2024</td>
                    <td>
                        <a href="editarPerfiles" class="btn w-100 m-1 btn-warning">editar</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-warning">borrar</a>
                    </td>
                </tr>
                <tr class="table table-striped">
                    <td>02</td>
                    <td>Supervisor</td>
                    <td>22222222-2</td>
                    <td>12-12-2024</td>
                    <td>No</td>
                    <td>12-12-2024</td>
                    <td>
                        <a href="editarPerfiles" class="btn w-100 m-1 btn-warning">editar</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-warning">borrar</a>
                    </td>

                </tr>
                <tr class="table table-striped">
                    <td>02</td>
                    <td>Alumno</td>
                    <td>33333333-3</td>
                    <td>12-12-2024</td>
                    <td>Si</td>
                    <td>12-12-2024</td>
                    <td>
                        <a href="editarPerfiles" class="btn w-100 m-1 btn-warning">editar</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-warning">borrar</a>
                    </td>

                </tr>
            </tbody>
        </table>
    </div>
</body>
