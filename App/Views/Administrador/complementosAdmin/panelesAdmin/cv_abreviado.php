<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
<body>
    <!--<div class="btn-panel">        
        <div>
            <a href="creaCVabreviado" class="btn  btn-primary">Crear Categoria</a>
            <label for="filtroUsuario">Filtrar por ID:</label>
            <input type="text" id="filtroUsuario">
        </div>
        <div>
            <label for="filtroCentro">Filtrar por Categoría:</label>
            <input type="text" id="filtroCentro">
        </div>
    </div>-->
    <h1>CV. Abreviado</h1>
    <div class="body-panel">
        <table id="tableUsers" class="tabla table">
            <style> .tabla { width: 100%; } </style>
            <thead>
                <tr>
                    <th>Id Archivo CV</th>
                    <th>Rut Usuario</th>
                    <th>Documento</th>
                    <th>Fecha de Ingreso</th>
                    <th>Fecha de Eliminación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table table-striped">
                    <td>01</td>
                    <td>77777777-7</td>
                    <td>fdf$$%DOCUMENTO$&F</td>
                    <td>23-04-2024</td>
                    <td>23-04-2024</td>
                    <td>
                        <a href="editarCVabreviado" class="btn w-100 m-1 btn-warning">editar</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-warning">borrar</a>
                    </td>
                </tr>
                <tr class="table table-striped">
                    <td>01</td>
                    <td>55555555-5</td>
                    <td>fdf$$%DOCUMENTO$&F</td>
                    <td>23-04-2024</td>
                    <td>23-04-2024</td>
                    <td>
                        <a href="editarCVabreviado" class="btn w-100 m-1 btn-warning">editar</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-warning">borrar</a>
                    </td>

                </tr>
                <tr class="table table-striped">
                    <td>01</td>
                    <td>99999999-9</td>
                    <td>fdf$$%DOCUMENTO$&F</td>
                    <td>23-04-2024</td>
                    <td>23-04-2024</td>
                    <td>
                        <a href="editarCVabreviado" class="btn w-100 m-1 btn-warning">editar</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-warning">borrar</a>
                    </td>

                </tr>
            </tbody>  
        </table>
    </div>
</body>
