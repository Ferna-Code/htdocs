<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Postulaciones</title>
<body>
<!--<div class="btn-panel">        
        <div>
            <a href="creaPostulaciones" class="btn  btn-primary">Crear Postulaciones</a>
            <label for="filtroUsuario">Filtrar por ID:</label>
            <input type="text" id="filtroUsuario">
        </div>
        <div>
            <label for="filtroCentro">Filtrar por XXX:</label>
            <input type="text" id="filtroCentro">
        </div>
    </div>-->
    <hr>
    <h1>Postulaciones</h1>
    <div class="body-panel">
    <div style="margin: 10px;">
            <div class="containerFiltro">
                <input type="date" class="fechaFiltro" name="fechaFiltro" id="fechaFiltro">
                <select class="categoriaFiltro">
                    <option value="Práctica">Educación y Bienestar</option>
                    <option value="Práctica">Tecnología y productividad</option>
                    <option value="Práctica">Negocios e Innovación</option>
                </select>
                <a href="Administrador/editarPostulaciones" class="btn-supervisor marginBtn">Editar</a>
                <a href="#" class="btn-supervisor marginBtn">Eliminar</a>
            </div>

            
        <table id="tableUsers" class="tabla table">
            <style> .tabla { width: 100%; } </style>
            <thead>
                <tr>
                <th class="widthCheck"><input type="checkbox" id="checkAllPostulacion" name="select-all"></th>
                    <th>ID</th>
                    <th>Rut Usuario</th>
                    <th>ID Carrera</th>
                    <th>Rut Empresa</th>
                    <th>ID Oferta</th>
                    <th>Fecha de Ingreso</th>
                    <th>Fecha de Eliminacion</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table table-striped">
                <td><input type="checkbox" class="checkboxPostulacion" name="checkId"></td>
                    <td>01</td>
                    <td>44444444-4</td>
                    <td>21</td>
                    <td>96969696-4</td>
                    <td>32</td>
                    <td>12-12-2024</td>
                    <td>12-12-2024</td>
                </tr>
                <tr class="table table-striped">
                <td><input type="checkbox" class="checkboxPostulacion" name="checkId"></td>
                    <td>02</td>
                    <td>55555555-5</td>
                    <td>21</td>
                    <td>87878787-5</td>
                    <td>32</td>
                    <td>12-12-2024</td>
                    <td>12-12-2024</td>
                </tr>
                <tr class="table table-striped">
                <td><input type="checkbox" class="checkboxPostulacion" name="checkId"></td>
                    <td>03</td>
                    <td>66666666-6</td>
                    <td>34</td>
                    <td>65656565-5</td>
                    <td>12</td>
                    <td>12-12-2024</td>
                    <td>12-12-2024</td>
                </tr>
            </tbody>
        </table>
                        <!-- seccion footer -->
                        <div class="footer-tools">
                <div class="list-items">
                    Mostrar
                    <select name="n-entries" id="n-entries" class="n-entries">
                        <option value="10">10</option>
                        <option value="15" selected>20</option>
                        <option value="20">50</option>
                    </select>
                    Entradas
                </div>   
                <div class="pages">
                    <ul>
                        <li><span class="active">1</span></li>
                        <li><button>2</button></li>
                        <li><button>3</button></li>
                        <li><span>...</span></li>
                        <li><button>9</button></li>
                        <li><button>10</button></li>
                    </ul>

                </div>
        </div>
        </div>
    </div>

    <script src="../../../../Public/js/check.js"></script>
    <script>
        // Llamada en una vista
        initializeCheckboxMaster('checkAllPostulacion', 'checkboxPostulacion');
    </script>
</body>
