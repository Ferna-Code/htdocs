<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Usuarios</title>
<body>

<hr>
    <h1>Usuarios</h1>
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
                <a href="Administrador/editarUsuario" class="btn-supervisor marginBtn">Editar</a>
                <a href="#" class="btn-supervisor marginBtn">Eliminar</a>
            </div>
        </form>

        <form action="">
        <table id="tableUsers" class="tabla table">
            <style> .tabla { width: 100%; } </style>
            <thead>
                <tr>
                <th class="widthCheck"><input type="checkbox" id="checkAllUsuario" name="select-all"></th>
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
                <td><input type="checkbox" class="checkboxUsuario" name="checkId"></td>
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
                    <a href="Administrador/editarUsuario" class="btn-supervisor">Editar</a>
                    </td>
                </tr>
                
                <tr class="table table-striped">
                <td><input type="checkbox" class="checkboxUsuario" name="checkId"></td>
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
                    <a href="Administrador/editarUsuario" class="btn-supervisor">Editar</a>
                    </td>

                </tr>
                <tr class="table table-striped">
                <td><input type="checkbox" class="checkboxUsuario" name="checkId"></td>
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
                        <a href="Administrador/editarUsuario" class="btn-supervisor">Editar</a>
                    </td>

                </tr>
            </tbody>
        </table>
        </div>
    </div>

    <script src="../../../../Public/js/check.js"></script>
    <script>
        // Llamada en una vista
        initializeCheckboxMaster('checkAllUsuario', 'checkboxUsuario');
    </script>
</body>
