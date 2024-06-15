<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
<body>

    <hr>
    <h1>Cursos</h1>
    <div class="body-panel">
    <div style="margin: 10px;">
            <div class="containerFiltro">
            <input style="margin-bottom: 15px" type="text" id="filtroCursos" placeholder="Buscar por nombre...">
            <br>
                <a href="#" onclick="controlVisi17()" class="btn-supervisor marginBtn ">Agregar</a>
                <button type="button" id="deleteSelectedCurso" class="btn-supervisor marginBtn">Eliminar</button>
            </div>

            <form action="#">

        <table id="tableCursos" class="tabla table">
            <style> .tabla { width: 100%; } </style>
            <thead>
                <tr>
                <th class="widthCheck"><input type="checkbox" id="checkAllCursos" name="select-all"></th>
                <th>ID</th>
                    <th>Nombre</th>               
                    <th>Centro de capacitación</th>               
                    <th>Fecha de Creación</th>
                    <th>Ver</th>
                </tr>
            </thead>
            <tbody id="bodyCursos">

            </tbody>
        </table>

        </div>
    </div>
</form>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- <script src="../../../../Public/js/administrador.js"></script> -->

    <script src="../../../../Public/js/check.js"></script>

</body>
