<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Diccionario</title>
<body>
<div class="btn-panel">     
        <div>
            <a href="creaDiccionario" class="btn  btn-primary">Ingreso nueva Palabra</a>
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
                    <th>ID Diccionario</th>
                    <th>Palabra</th>
                    <th>Fecha  de Creación</th>
                    <th>Activo</th>
                    <th>Fecha de Eliminación</th>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                <tr class="table table-striped">
                    <td>01</td>
                    <td>Palabra restringida</td>
                    <td>13-04-2024</td>
                    <td>Si</td>
                    <td>13-04-2024</td>
                    <td>
                        <a href="editarDiccionario" class="btn w-100 m-1 btn-primary">editar</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-danger">borrar</a>
                    </td>
                </tr>
                <tr class="table table-striped">
                    <td>02</th>
                    <td>Palabra restringida</th>
                    <td>13-04-2024</th>
                    <td>No</th>
                    <td>13-04-2024</th>
                    <td>
                        <a href="editarDiccionario.php" class="btn w-100 m-1 btn-primary">editar</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-danger">borrar</a>
                    </td>

                </tr>
                <tr class="table table-striped">
                    <td>03</th>
                    <td>Palabra restringida</th>
                    <td>13-04-2024</th>
                    <td>Si</th>
                    <td>13-04-2024</th>
                    <td>
                        <a href="editarDiccionario.php" class="btn w-100 m-1 btn-primary">editar</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-danger">borrar</a>
                    </td>

                </tr>
            </tbody>
        </table>
    </div>
</body>
