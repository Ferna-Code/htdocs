<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
<body>
    <!--<div class="btn-panel">        
        <div>
            <a href="creaCursos" class="btn  btn-primary">Crear Categoria</a>
            <label for="filtroUsuario">Filtrar por ID:</label>
            <input type="text" id="filtroUsuario">
        </div>
        <div>
            <label for="filtroCentro">Filtrar por Categoría:</label>
            <input type="text" id="filtroCentro">
        </div>
    </div>-->
    <hr>
    <h1>Cursos</h1>
    <div class="body-panel">
    <div style="margin: 10px;">
    <form method="POST" action="#">
            <div class="containerFiltro">
                <input type="date" class="fechaFiltro" name="fechaFiltro" id="fechaFiltro">
                <select class="categoriaFiltro">
                    <option value="Práctica">Diplomado en Gestión de Proyectos TI</option>
                    <option value="Práctica">Diplomado en metodologia Scrum</option>
                    <option value="Práctica">Networking Essentials</option>
                </select>
                <input type="submit" class="btnFiltro" value="Filtrar">
                <a href="Administrador/editarCursos" class="btn-supervisor marginBtn">Editar</a>
                <a href="#" class="btn-supervisor marginBtn">Eliminar</a>
            </div>
        </form>

        <form action="">
        <table id="tableUsers" class="tabla table">
            <style> .tabla { width: 100%; } </style>
            <thead>
                <tr>
                <th class="widthCheck"><input type="checkbox" id="checkAllCursos" name="select-all"></th>
                    <th>Id Cursos</th>
                    <th>Nombre Curso</th>
                    <th>Descripción</th>
                    <th>ID Carrera</th>
                    <th>Fecha de Creación</th>
                    <th>Activo</th>
                    <th>Fecha de Eliminación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table table-striped">
                    <td><input type="checkbox" class="checkboxCursos" name="checkId"></td>
                    <td>01</td>
                    <td>Diplomado en Gestión de Proyectos TI</td>
                    <td>Descripcion del curso</td>
                    <td>02</td>
                    <td>12-12-2024</td>
                    <td>Si</td>
                    <td>12-12-2024</td>
                    <td>
                        <a href="Administrador/editarCursos" class="btn-supervisor">Editar</a>
                    </td>
                </tr>
                <tr class="table table-striped">
                    <td><input type="checkbox" class="checkboxCursos" name="checkId"></td>
                    <td>01</td>
                    <td>Diplomado en metodologia Scrum</td>
                    <td>Descripcion del curso</td>
                    <td>02</td>
                    <td>12-12-2024</td>
                    <td>Si</td>
                    <td>12-12-2024</td>
                    <td>
                    <a href="Administrador/editarCursos" class="btn-supervisor">Editar</a>
                    </td>

                </tr>
                <tr class="table table-striped">
                    <td><input type="checkbox" class="checkboxCursos" name="checkId"></td>
                    <td>01</td>
                    <td>Networking Essentials</td>
                    <td>Descripcion del curso</td>
                    <td>02</td>
                    <td>12-12-2024</td>
                    <td>Si</td>
                    <td>12-12-2024</td>
                    <td>
                    <a href="Administrador/editarCursos" class="btn-supervisor">Editar</a>
                    </td>

                </tr>
            </tbody>
        </table>
        </div>
    </div>
    <script src="../../../../Public/js/check.js"></script>
    <script>
        // Llamada en una vista
        initializeCheckboxMaster('checkAllCursos', 'checkboxCursos');
    </script>
</body>
