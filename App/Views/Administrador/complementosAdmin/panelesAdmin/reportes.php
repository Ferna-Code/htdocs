
    <title>Reportes</title>
<body>
<!--<div class="btn-panel">        
        <div>
            <a href="creaReportes" class="btn  btn-primary">Crear Reporte</a>
            <label for="filtroUsuario">Filtrar por ID:</label>
            <input type="text" id="filtroUsuario">
        </div>
        <div>
            <label for="filtroCentro">Filtrar por XXX:</label>
            <input type="text" id="filtroCentro">
        </div>
    </div>-->
    <hr>
    <h1>Reportes</h1>
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
                <a href="Administrador/editarReportes" class="btn-supervisor marginBtn">Editar</a>
                <a href="#" class="btn-supervisor marginBtn">Eliminar</a>
            </div>
        </form>

        <form action="">
        <table id="tableUsers" class="tabla table">
            <style> .tabla { width: 100%; } </style>
            <thead>
                <tr>
                <th class="widthCheck"><input type="checkbox" id="checkAllReportes" name="select-all"></th>
                    <th>ID Reporte</th>
                    <th>Id Comentario</th>
                    <th>Rut usuario</th>
                    <th>Id Publicación</th>
                    <th>Fecha de Ingreso</th>
                    <th>Activo</th>
                    <th>Fecha de Eliminacion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table table-striped">
                <td><input type="checkbox" class="checkboxReportes" name="checkId"></td>
                    <td>01</td>
                    <td>554</td>
                    <td>77777777-7</td>
                    <td>878</td>
                    <td>12-12-2024</td>
                    <td>No</td>
                    <td>12-12-2024</td>
                    <td class="tr-table">
                    <a href="Administrador/editarReportes" class="btn-supervisor">Editar</a>
                    </td>
                </tr>
                <tr class="table table-striped">
                <td><input type="checkbox" class="checkboxReportes" name="checkId"></td>
                    <td>02</td>
                    <td>5758</td>
                    <td>77777777-7</td>
                    <td>8768</td>
                    <td>12-12-2024</td>
                    <td>No</td>
                    <td>12-12-2024</td>
                    <td class="tr-table">
                        <a href="Administrador/editarReportes" class="btn-supervisor">Editar</a>
                    </td>

                </tr>
                <tr class="table table-striped">
                <td><input type="checkbox" class="checkboxReportes" name="checkId"></td>
                    <td>03</td>
                    <td>5342</td>
                    <td>77777777-7</td>
                    <td>673</td>
                    <td>12-12-2024</td>
                    <td>No</td>
                    <td>12-12-2024</td>
                    <td class="tr-table">
                    <a href="Administrador/editarReportes" class="btn-supervisor">Editar</a>
                    </td>

                </tr>
            </tbody>
        </table>
        </div>
    </div>

    <script src="../../../../Public/js/check.js"></script>
    <script>
        // Llamada en una vista
        initializeCheckboxMaster('checkAllReportes', 'checkboxReportes');
    </script>
</body>
