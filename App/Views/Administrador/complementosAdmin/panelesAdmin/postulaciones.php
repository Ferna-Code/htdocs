<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Postulaciones</title>
<body>

    <hr>
    <h1>Postulaciones</h1>
    <div class="body-panel">
    <div style="margin: 10px;">
            <div class="containerFiltro">
            <input type="text" id="filtroRutUsuarioPostulacion"  placeholder="Filtrar por Rut de Usuario...">
                <button type="button" id="deleteSelectedPostulaciones" class="btn-supervisor marginBtn">Eliminar</button>
            </div>

            
        <table id="tablePostulaciones" class="tabla table">
            <style> .tabla { width: 100%; } </style>
            <thead>
                <tr>
                    <th class="widthCheck"><input type="checkbox" id="checkAllPostulaciones" name="select-all"></th>
                    <th>Rut Usuario</th>
                    <th>Nombre Carrera</th>
                    <th>Rut Empresa</th>
                    <th>Cargo</th>
                    <th>Fecha de Ingreso</th>
                    <th>Fecha de Eliminacion</th>
                </tr>
            </thead>
            <tbody id="bodyPostulaciones">
 
            </tbody>
        </table>
 
        </div>
    </div>

    <script src="../../../../Public/js/check.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
