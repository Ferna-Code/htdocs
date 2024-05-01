<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Administraor de Ofertas</title>
<body>
<!--<div class="btn-panel">        
        <div>
            <a href="creaOfertas" class="btn  btn-primary">Ingresar Oferta</a>
            <label for="filtroUsuario">Filtrar por Título:</label>
            <input type="text" id="filtroUsuario">
        </div>
        <div>
            <label for="filtroCentro">Filtrar por Carrera:</label>
            <input type="text" id="filtroCentro">
        </div>
    </div>-->
    <hr>
    <h1>Ofertas Laborales</h1>
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
                <a href="Administrador/editarOfertas" class="btn-supervisor marginBtn">Editar</a>
                <a href="#" class="btn-supervisor marginBtn">Eliminar</a>
            </div>
        </form>

        <form action="">
        <table id="tableUsers" class="tabla table">
            <style> .tabla { width: 100%; } </style>
            <thead>
                <tr>
                <th class="widthCheck"><input type="checkbox" id="checkAllOfertas" name="select-all"></th>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Descripción</th>
                    <th>Contacto</th>
                    <th>ID Carrera</th>
                    <th>Fecha de Creación</th>
                    <th>Activo</th>
                    <th>Fecha de Eliminación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table table-striped">
                <td><input type="checkbox" class="checkboxOfertas" name="checkId"></td>
                    <td>01</td>
                    <td>Oferta de Practica</td>
                    <td>Descripcion de la Oferta</td>
                    <td>Dato de Contacto</td>
                    <td>45</td>
                    <td>12-12-2024</td>
                    <td>Si</td>
                    <td>12-12-2024</td>
                    <td>
                        <a href="Administrador/editarOfertas" class="btn-supervisor">Editar</a>
                    </td>
                </tr>
                <tr class="table table-striped">
                <td><input type="checkbox" class="checkboxOfertas" name="checkId"></td>
                    <td>01</td>
                    <td>Oferta de Trabajo</td>
                    <td>Descripcion de la Oferta</td>
                    <td>Dato de Contacto</td>
                    <td>33</td>
                    <td>12-12-2024</td>
                    <td>Si</td>
                    <td>12-12-2024</td>
                    <td>
                        <a href="Administrador/editarOfertas" class="btn-supervisor">Editar</a>
                    </td>

                </tr>
                <tr class="table table-striped">
                <td><input type="checkbox" class="checkboxOfertas" name="checkId"></td>
                    <td>01</td>
                    <td>Oferta de Practica</td>
                    <td>Descripcion de la Oferta</td>
                    <td>Dato de Contacto</td>
                    <td>03</td>
                    <td>12-12-2024</td>
                    <td>Si</td>
                    <td>12-12-2024</td>
                    <td>
                        <a href="Administrador/editarOfertas" class="btn-supervisor">Editar</a>
                    </td>

                </tr>
            </tbody>
        </table>
        </div>
    </div>

    <script src="../../../../Public/js/check.js"></script>
    <script>
        // Llamada en una vista
        initializeCheckboxMaster('checkAllOfertas', 'checkboxOfertas');
    </script>
</body>
