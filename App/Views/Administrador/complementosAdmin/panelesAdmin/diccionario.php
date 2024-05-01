<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Diccionario</title>
<body>
<!--<div class="btn-panel">     
        <div>
            <a href="creaDiccionario" class="btn  btn-primary">Ingreso nueva Palabra</a>
            <label for="filtroUsuario">Filtrar por ID:</label>
            <input type="text" id="filtroUsuario">
        </div>
        <div>
            <label for="filtroCentro">Filtrar por Categoría:</label>
            <input type="text" id="filtroCentro">
        </div>
    </div>-->
    <hr>
    <h1>Diccionario</h1>
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
                <a href="Administrador/editarCursos" class="btn-supervisor marginBtn">Editar</a>
                <a href="#" class="btn-supervisor marginBtn">Eliminar</a>
            </div>
        </form>

        <form action="">
        <table id="tableUsers" class="tabla table">
            <style> .tabla { width: 100%; } </style>
            <thead>
                <tr>
                <th class="widthCheck"><input type="checkbox" id="checkAllDiccionario" name="select-all"></th>
                    <th>ID Diccionario</th>
                    <th>Palabra</th>
                    <th>Fecha  de Creación</th>
                    <th>Activo</th>
                    <th>Fecha de Eliminación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table table-striped">
                <td><input type="checkbox" class="checkboxDiccionario" name="checkId"></td>
                    <td>01</td>
                    <td>Palabra restringida</td>
                    <td>13-04-2024</td>
                    <td>Si</td>
                    <td>13-04-2024</td>
                    <td>
                    <a href="Administrador/editarDiccionario" class="btn-supervisor">Editar</a>
                    </td>
                </tr>
                
                <tr class="table table-striped">
                <td><input type="checkbox" class="checkboxDiccionario" name="checkId"></td>
                    <td>02</th>
                    <td>Palabra restringida</th>
                    <td>13-04-2024</th>
                    <td>No</th>
                    <td>13-04-2024</th>
                    <td>
                    <a href="Administrador/editarDiccionario" class="btn-supervisor">Editar</a>
                    </td>

                </tr>
                <tr class="table table-striped">
                <td><input type="checkbox" class="checkboxDiccionario" name="checkId"></td>
                    <td>03</th>
                    <td>Palabra restringida</th>
                    <td>13-04-2024</th>
                    <td>Si</th>
                    <td>13-04-2024</th>
                    <td>
                        <a href="Administrador/editarDiccionario" class="btn-supervisor">Editar</a>
                    </td>

                </tr>
            </tbody>
        </table>
        </div>
    </div>
    <script src="../../../../Public/js/check.js"></script>
    <script>
        // Llamada en una vista
        initializeCheckboxMaster('checkAllDiccionario', 'checkboxDiccionario');
    </script>
</body>
