<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Administrador Carreras</title>
<body>
    <!--<div class="btn-panel">
        <div>
            <a href="crearCarrera" class="btn  btn-primary">Crear Carrera</a>
            <label for="filtroUsuario">Filtrar por ID:</label>
            <input type="text" id="filtroUsuario">
        </div>
        <div>
            <label for="filtroCentro">Filtrar por Categoría:</label>
            <input type="text" id="filtroCentro">
        </div>
    </div>-->
  <hr>
    <h1>Carreras</h1>
    <div class="body-panel" >
    <div style="margin: 10px;">
        <form method="POST" action="#">
            <div class="containerFiltro">
                <input type="date" class="fechaFiltro" name="fechaFiltro" id="fechaFiltro">
                <select class="categoriaFiltro">
                    <option value="Práctica">Analista Programador</option>
                    <option value="Práctica">Técnico en Construcción</option>
                    <option value="Práctica">Psicopedagogía</option>
                </select>
                <input type="submit" class="btnFiltro" value="Filtrar">
                <a href="Administrador/editarCarrera" class="btn-supervisor marginBtn">Editar</a>
                <a href="#" class="btn-supervisor marginBtn">Eliminar</a>
            </div>
        </form>

        <form action="">

        <table id="tableUsers" class="tabla table">
            <thead>
                <tr>
                <th class="widthCheck"><input type="checkbox" id="checkAllCarrera" name="select-all"></th>
                    <th>Id Carrera</th>
                    <th>Nombre</th>
                    <th>Categoria</th>
                    <th>Fecha de Ingreso</th>
                    <th>Activo</th>
                    <th>Fecha de Eliminacion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table table-striped">
                <td><input type="checkbox" class="checkboxCarrera" name="checkId"></td>
                    <td>01</td>
                    <td>Analista Programador</td>
                    <td>Informática Tecnología y Productividad</td>
                    <td>12-04-2024</td>
                    <td>Si</td>
                    <td>23-04-2024</td>
                    <td>
                        <a href="Administrador/editarCarrera" class="btn-supervisor">Editar</a>

                    </td>
                </tr>
                <tr class="table table-striped">
                <td><input type="checkbox" class="checkboxCarrera" name="checkId"></td>
                    <td>02</td>
                    <td>Técnico en Construcción</td>
                    <td>Informática Tecnología y Productividad</td>
                    <td>12-04-2024</td>
                    <td>Si</td>
                    <td>23-04-2024</td>
                    <td>
                        <a href="editar.php" class="btn-supervisor">Editar</a>

                    </td>

                </tr>
                <tr class="table table-striped">
                <td><input type="checkbox" class="checkboxCarrera" name="checkId"></td>
                    <td>03</td>
                    <td>Psicopedagogía</td>
                    <td>Educación Bienestar y Calidad de vida</td>
                    <td>12-04-2024</td>
                    <td>Si</td>
                    <td>23-04-2024</td>
                    <td>
                        <a href="editar.php" class="btn-supervisor">Editar</a>

                    </td>

                </tr>
            </tbody>
        </table>
</form>
    </div>
    </div>

    <script src="../../../../Public/js/check.js"></script>
    <script>
        // Llamada en una vista
        initializeCheckboxMaster('checkAllCarrera', 'checkboxCarrera');
    </script>
    
</body>
