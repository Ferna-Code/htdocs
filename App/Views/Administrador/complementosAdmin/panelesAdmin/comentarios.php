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
    <hr>
    <h1>Comentarios</h1>
    <div class="body-panel">
    <div style="margin: 10px;">
    <form method="POST" action="#">
            <div class="containerFiltro">
                <input type="date" class="fechaFiltro" name="fechaFiltro" id="fechaFiltro">
                <select class="categoriaFiltro">
                    <option value="Práctica">Educación y Bienestar</option>
                    <option value="Práctica">Tecnología y productividad</option>
                    <option value="Práctica">Negocios e Innovación</option>
                </select>
                <input type="submit" class="btnFiltro" value="Filtrar">
                <a href="Administrador/editarComentarios" class="btn-supervisor marginBtn">Editar</a>
                <a href="#" class="btn-supervisor marginBtn">Eliminar</a>
            </div>
        </form>

        <form action="">
        <table id="tableUsers" class="tabla table">
            <style> .tabla { width: 100%; } </style>
            <thead>
                <tr>
                <th class="widthCheck"><input type="checkbox" id="checkAllComentarios" name="select-all"></th>
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
                <td><input type="checkbox" class="checkboxComentarios" name="checkId"></td>
                    <td>01</td>
                    <td>09999999-9</td>
                    <td>67</td>
                    <td>Este es un comentario</td>
                    <td>2</td>
                    <td>12-12-2024</td>
                    <td>Si</td>
                    <td>12-12-2024</td>
                    <td>
                        <a href="Administrador/editarComentarios" class="btn-supervisor">editar</a>
                    </td>
                </tr>
                <tr class="table table-striped">
                <td><input type="checkbox" class="checkboxComentarios" name="checkId"></td>
                    <td>02</td>
                    <td>04444444-4</td>
                    <td>45</td>
                    <td>Este es otro comentario</td>
                    <td>3</td>
                    <td>12-12-2024</td>
                    <td>Si</td>
                    <td>12-12-2024</td>
                    <td>
                        <a href="Administrador/editarComentarios" class="btn-supervisor">editar</a>
                    </td>

                </tr>
                <tr class="table table-striped">
                <td><input type="checkbox" class="checkboxComentarios" name="checkId"></td>
                    <td>03</td>
                    <td>05555555-5</td>
                    <td>34</td>
                    <td>Este es otro comentario mwe</td>
                    <td>0</td>
                    <td>12-12-2024</td>
                    <td>Si</td>
                    <td>12-12-2024</td>
                    <td>
                        <a href="Administrador/editarComentarios" class="btn-supervisor">editar</a>
                    </td>

                </tr>
            </tbody>
        </table>
        </div>
    </div>

    <script src="../../../../Public/js/check.js"></script>
    <script>
        // Llamada en una vista
        initializeCheckboxMaster('checkAllComentarios', 'checkboxComentarios');
    </script>
</body>
