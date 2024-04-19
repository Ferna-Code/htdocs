<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Administraor de Ofertas</title>
<body>
<div class="btn-panel">        
        <div>
            <a href="creaOfertas" class="btn  btn-primary">Ingresar Oferta</a>
            <label for="filtroUsuario">Filtrar por Título:</label>
            <input type="text" id="filtroUsuario">
        </div>
        <div>
            <label for="filtroCentro">Filtrar por Carrera:</label>
            <input type="text" id="filtroCentro">
        </div>
    </div>
   
    <div class="body-panel">
        <table id="tableUsers" class="tabla table">
            <style> .tabla { width: 100%; } </style>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Descripción</th>
                    <th>Contacto</th>
                    <th>ID Carrera</th>
                    <th>Fecha de Creación</th>
                    <th>Activo</th>
                    <th>Fecha de Eliminación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table table-striped">
                    <td>01</td>
                    <td>Oferta de Practica</td>
                    <td>Descripcion de la Oferta</td>
                    <td>Dato de Contacto</td>
                    <td>45</td>
                    <td>12-12-2024</td>
                    <td>Si</td>
                    <td>12-12-2024</td>
                    <td>
                        <a href="editarOfertas" class="btn w-100 m-1 btn-primary">editar</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-danger">borrar</a>
                    </td>
                </tr>
                <tr class="table table-striped">
                    <td>01</td>
                    <td>Oferta de Trabajo</td>
                    <td>Descripcion de la Oferta</td>
                    <td>Dato de Contacto</td>
                    <td>33</td>
                    <td>12-12-2024</td>
                    <td>Si</td>
                    <td>12-12-2024</td>
                    <td>
                        <a href="editarOfertas" class="btn w-100 m-1 btn-primary">editar</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-danger">borrar</a>
                    </td>

                </tr>
                <tr class="table table-striped">
                    <td>01</td>
                    <td>Oferta de Practica</td>
                    <td>Descripcion de la Oferta</td>
                    <td>Dato de Contacto</td>
                    <td>03</td>
                    <td>12-12-2024</td>
                    <td>Si</td>
                    <td>12-12-2024</td>
                    <td>
                        <a href="editarOfertas" class="btn w-100 m-1 btn-primary">editar</a>
                        <a href="borrar.php" class="btn w-100 m-1 btn-danger">borrar</a>
                    </td>

                </tr>
            </tbody>
        </table>
    </div>
</body>
