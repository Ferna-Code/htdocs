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
    <hr>
    <h1>Perfiles</h1>
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
                <a href="Administrador/editarPerfiles" class="btn-supervisor marginBtn">Editar</a>
                <a href="#" class="btn-supervisor marginBtn">Eliminar</a>
            </div>
        </form>

        <form action="">
        <table id="tableUsers" class="tabla table">
            <style> .tabla { width: 100%; } </style>
            <thead>
                <tr>
                <th class="widthCheck"><input type="checkbox" id="checkAllPerfiles" name="select-all"></th>
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
                <td><input type="checkbox" class="checkboxPerfiles" name="checkId"></td>
                    <td>01</td>
                    <td>Administrador</td>
                    <td>11111111-1</td>
                    <td>12-12-2024</td>
                    <td>Si</td>
                    <td>12-12-2024</td>
                    <td>
                    <a href="Administrador/editarPerfiles" class="btn-supervisor">Editar</a>
                    </td>
                </tr>
                <tr class="table table-striped">
                <td><input type="checkbox" class="checkboxPerfiles" name="checkId"></td>
                    <td>02</td>
                    <td>Supervisor</td>
                    <td>22222222-2</td>
                    <td>12-12-2024</td>
                    <td>No</td>
                    <td>12-12-2024</td>
                    <td>
                    <a href="Administrador/editarPerfiles" class="btn-supervisor">Editar</a>
                    </td>

                </tr>
                <tr class="table table-striped">
                <td><input type="checkbox" class="checkboxPerfiles" name="checkId"></td>
                    <td>02</td>
                    <td>Alumno</td>
                    <td>33333333-3</td>
                    <td>12-12-2024</td>
                    <td>Si</td>
                    <td>12-12-2024</td>
                    <td>
                        <a href="Administrador/editarPerfiles" class="btn-supervisor">Editar</a>
                    </td>

                </tr>
            </tbody>
        </table>
        </div>
    </div>

    <script src="../../../../Public/js/check.js"></script>
    <script>
        // Llamada en una vista
        initializeCheckboxMaster('checkAllPerfiles', 'checkboxPerfiles');
    </script>
</body>
