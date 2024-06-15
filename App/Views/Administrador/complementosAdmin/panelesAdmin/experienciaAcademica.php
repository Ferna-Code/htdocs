<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Diccionario</title>
<body>

    <hr>
    <h1>Experiencia Académica</h1>
    <div class="body-panel">
    <div style="margin: 10px;">
            <div class="containerFiltro">
            <input type="text" id="filtroRutUsuarioExpAcademica"  placeholder="Filtrar por Rut de Usuario...">
            <input type="submit" class="btnFiltro" value="Filtrar">
            <button type="button" id="deleteSelectedExpAcademica" class="btn-supervisor marginBtn">Eliminar</button>
            </div>

        <table id="tableAcademica" class="tabla table">
            <style> .tabla { width: 100%; } </style>
            <thead>
                <tr>
                    <th class="widthCheck"><input type="checkbox" id="checkAllAcademicas" name="select-all"></th>
                    
                    <th>Rut Usuario</th>
                    <th>Fecha  de Finalización</th>
                    <th>Título</th>
                    <th>En Curso</th>
                    <th>Fecha  de Creación</th>
                    <th>Activo</th>
                    <th>Fecha de Eliminación</th>
                </tr>
            </thead>
            <tbody id="bodyAcademica">

            </tbody>
        </table>

        </div>
        </div>
    </div>
    <script src="../../../../Public/js/check.js"></script>
    <script>
        // Llamada en una vista
        initializeCheckboxMaster('checkAllAcademicas', 'checkboxAcademica');
    </script>
</body>
