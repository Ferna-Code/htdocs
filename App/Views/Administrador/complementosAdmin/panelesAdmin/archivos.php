<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Administrador Archivos</title>
    
<body>
<hr>
<h1>Archivos</h1>
<div class="body-panel">
    <div style="margin: 10px;">
            <div class="containerFiltro">
            <input type="text" id="filtroRutUsuarioArchivo" placeholder="Filtrar por Rut Usuario...">
                <button type="button" id="deleteSelectedArchivos" class="btn-supervisor marginBtn">Eliminar</button>
            </div>

        <table id="tableArchivos" class="tabla table">
            <style> .tabla { width: 100%; } </style>
            <thead>
                <tr>
                    <th class="widthCheck"><input type="checkbox" id="checkAllArchivos" name="select-all"></th>
                    <th class="anchoId">ID</th>
                    <th>Rut Usuario</th>
                    <th>Documento</th>
                    <th>Fecha de Ingreso</th>
                    <th>Fecha de Eliminacion</th>
                </tr>
            </thead>
            <tbody id="bodyArchivos">
 
            </tbody>
        </table>
 
    </div>
</div>
<script src="../../../../Public/js/check.js"></script>

</body>
