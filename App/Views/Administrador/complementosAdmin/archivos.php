<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Administrador Archivos</title>
<body>
<div class="btn-panel">        
        <div>
            <a href="crearArchivos" class="btn  btn-primary">Ingresar Archivo??????</a>
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
                    <th>ID Archivo</th>
                    <th>Rut Usuario</th>
                    <th>Documento</th>
                    <th>Fecha de Ingreso</th>
                    <th>Fecha de Eliminacion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table table-striped">
                    <td>01</td>
                    <td>88888888-8</td>
                    <td>CV_Estudiante</td>
                    <td>12-04-2024</td>
                    <td>23-04-2024</td>
                    <td>
                        <a href="editarArchivo" class="btn w-100 m-1 btn-primary">editar</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-danger">borrar</a>
                    </td>
                </tr>
                <tr class="table table-striped">
                    <td>02</td>
                    <td>99999999-9</td>
                    <td>CV_Egresado</td>
                    <td>12-04-2024</td>
                    <td>23-04-2024</td>
                    <td>
                        <a href="editarArchivo" class="btn w-100 m-1 btn-primary">editar</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-danger">borrar</a>
                    </td>

                </tr>
                <tr class="table table-striped">
                    <td>03</td>
                    <td>00000000-0</td>
                    <td>CV_Otro</td>
                    <td>12-04-2024</td>
                    <td>23-04-2024</td>
                    <td>
                        <a href="editarArchivo" class="btn w-100 m-1 btn-primary">editar</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-danger">borrar</a>
                    </td>

                </tr>
            </tbody>
        </table>
    </div>
</body>
