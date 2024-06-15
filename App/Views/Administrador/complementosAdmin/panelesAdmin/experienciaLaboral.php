<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Diccionario</title>
<body>

    <hr>
    <h1>Experiencia Laboral</h1>
    <div class="body-panel">
    <div style="margin: 10px;">
            <div class="containerFiltro">
            <input type="text" id="filtroRutLaboral"  placeholder="Filtrar por Rut de Usuario...">
            <button type="button" id="deleteSelectedExpLaboral" class="btn-supervisor marginBtn">Eliminar</button>
            </div>

        <table id="tableLaboral" class="tabla table">
            <style> .tabla { width: 100%; } </style>
            <thead>
                <tr>
                    <th class="widthCheck"><input type="checkbox" id="checkAllLaborales" name="select-all"></th>
                    <th class="anchoId">ID</th>
                    <th>Rut Usuario</th>
                    <th>Fecha  de Inicio</th>
                    <th>Fecha  de Fin</th>
                    <th>Cargo</th>
                    <th>Descripción</th>
                    <th>Trabajo Actual</th>
                    <th>Fecha  de Creación</th>
                    <th>Activo</th>
                    <th>Fecha de Eliminación</th>
                </tr>
            </thead>
            <tbody id="bodyLaboral">

                </tr>
            </tbody>
        </table>

        </div>
    </div>
    <script src="../../../../Public/js/check.js"></script>
    <script>
        // Llamada en una vista
        initializeCheckboxMaster('checkAllLaborales', 'checkboxLaboral');
    </script>
</body>
