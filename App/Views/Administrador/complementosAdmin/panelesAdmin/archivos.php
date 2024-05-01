<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Administrador Archivos</title>
<body>
<!--<div class="btn-panel">        
        <div>
            <label for="filtroUsuario">Filtrar por ID:</label>
            <input type="text" id="filtroUsuario">
        </div>
        <div>
            <label for="filtroCentro">Filtrar por Categoría:</label>
            <input type="text" id="filtroCentro">
        </div>
</div>-->
<hr>
<h1>Archivos</h1>
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
                <a href="#" class="btn-supervisor marginBtn">Eliminar</a>
            </div>
        </form>

        <form action="">
        <table id="tableUsers" class="tabla table">
            <style> .tabla { width: 100%; } </style>
            <thead>
                <tr>
                    <th class="widthCheck"><input type="checkbox" id="checkAllArchivo" name="select-all"></th>
                    <th>ID Archivo</th>
                    <th>Rut Usuario</th>
                    <th>Documento</th>
                    <th>Fecha de Ingreso</th>
                    <th>Fecha de Eliminacion</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table table-striped">
                <td><input type="checkbox" class="checkboxArchivo" name="checkId"></td>
                    <td>01</td>
                    <td>88888888-8</td>
                    <td>CV_Estudiante</td>
                    <td>12-04-2024</td>
                    <td>23-04-2024</td>
                </tr>
                <tr class="table table-striped">
                <td><input type="checkbox" class="checkboxArchivo" name="checkId"></td>
                    <td>02</td>
                    <td>99999999-9</td>
                    <td>CV_Egresado</td>
                    <td>12-04-2024</td>
                    <td>23-04-2024</td>

                </tr>
                <tr class="table table-striped">
                <td><input type="checkbox" class="checkboxArchivo" name="checkId"></td>
                    <td>03</td>
                    <td>00000000-0</td>
                    <td>CV_Otro</td>
                    <td>12-04-2024</td>
                    <td>23-04-2024</td>

                </tr>
            </tbody>
        </table>
    </div>
</div>
<script src="../../../../Public/js/check.js"></script>
    <script>
        // Llamada en una vista
        initializeCheckboxMaster('checkAllArchivo', 'checkboxArchivo');
    </script>
</body>
