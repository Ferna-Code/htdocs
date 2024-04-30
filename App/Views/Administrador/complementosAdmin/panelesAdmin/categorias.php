<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Categorias</title>
<body>
    <!--<div class="btn-panel">        
        <div>
            <a href="creaCategoria" class="btn  btn-primary">Crear Categoria</a>
            <label for="filtroUsuario">Filtrar por ID:</label>
            <input type="text" id="filtroUsuario">
        </div>
        <div>
            <label for="filtroCentro">Filtrar por Categoría:</label>
            <input type="text" id="filtroCentro">
        </div>
    </div>-->
    <h1>Categorías</h1>
    <div class="body-panel">
        <table id="tableUsers" class="tabla table">
            <style> .tabla { width: 100%; } </style>
            <thead>
                <tr>
                    <th>Id Categoría</th>
                    <th>Categoría</th>
                    <th>Fecha de Creación</th>
                    <th>Activo</th>
                    <th>Fecha de Eliminación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table table-striped">
                    <td>01</td>
                    <td>Educación Bienestar y Calidad de vida</td>
                    <td>12-04-2024</td>
                    <td>Si</td>
                    <td>23-04-2024</td>
                    <td>
                        <a href="editarCategoria" class="btn w-100 m-1 btn-warning">editar</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-warning">borrar</a>
                    </td>
                </tr>
                <tr class="table table-striped">
                    <td>02</td>
                    <td>Informática Tecnología y Productividad</td>
                    <td>12-04-2024</td>
                    <td>Si</td>
                    <td>23-04-2024</td>
                    <td>
                        <a href="editarCategoria" class="btn w-100 m-1 btn-warning">editar</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-warning">borrar</a>
                    </td>

                </tr>
                <tr class="table table-striped">
                    <td>03</td>
                    <td>Negocios Gestión e Innovación</td>
                    <td>12-04-2024</td>
                    <td>Si</td>
                    <td>23-04-2024</td>
                    <td>
                        <a href="editarCategoria" class="btn w-100 m-1 btn-warning">editar</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-warning">borrar</a>
                    </td>

                </tr>
            </tbody>  
        </table>
    </div>
</body>
