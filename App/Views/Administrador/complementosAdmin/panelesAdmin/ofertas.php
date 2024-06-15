<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>Administrador de Ofertas</title>

<body>
    
    <hr>
    <h1>Ofertas Laborales</h1>
    <div class="body-panel">
        <div style="margin: 10px;">
            <div class="containerFiltro">
            <input type="text" id="filtroCargo"  placeholder="Filtrar por Cargo...">
            <input type="text" id="filtroNombreEmpresa"  placeholder="Filtrar por Nombre de Empresa...">

                <a href="Administrador/editarOfertas" class="btn-supervisor marginBtn">Editar</a>
                <button type="button" id="deleteSelectedOfertas" class="btn-supervisor marginBtn">Eliminar</button>
            </div>

            <table id="tableOfertas" class="tabla table">

                <thead>
                    <tr>
                        <th class="widthCheck"><input type="checkbox" id="checkAllOfertas" name="select-all"></th>
                        <th>Cargo</th>
                        <th>Empresa</th>
                        <th>Tipo de oferta</th>
                        <th>Fecha publicación</th>
                        <th>Fecha eliminación</th>
                    </tr>
                </thead>
                <tbody id="bodyOfertas">

                </tbody>
            </table>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <script src="../../../../Public/js/administrador.js"></script> -->

    <script src="../../../../Public/js/check.js"></script>

</body>