<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Diccionario</title>
<body>
<!--<div class="btn-panel">     
        <div>
            <a href="creaDiccionario" class="btn  btn-primary">Ingreso nueva Palabra</a>
            <label for="filtroUsuario">Filtrar por ID:</label>
            <input type="text" id="filtroUsuario">
        </div>
        <div>
            <label for="filtroCentro">Filtrar por Categoría:</label>
            <input type="text" id="filtroCentro">
        </div>
    </div>-->
    <hr>
    <h1>Diccionario</h1>
    <div class="body-panel">
    <div style="margin: 10px;">
    <div class="containerFiltro">
    <input type="text" class="ofertaFiltro" placeholder="Palabra clave">
                <a href="Administrador/creaDiccionario" class="btn-supervisor marginBtn">Crear</a>
                <a href="Administrador/editarDiccionario" class="btn-supervisor marginBtn">Editar</a>
                <a href="#" class="btn-supervisor marginBtn">Eliminar</a>
            </div>

        <table id="tableUsers" class="tabla table">
            <style> .tabla { width: 100%; } </style>
            <thead>
                <tr>
                    <th class="widthCheck"><input type="checkbox" id="checkAllDiccionario" name="select-all"></th>
                    <th class="anchoId">ID</th>
                    <th>Palabra</th>
                    <th>Fecha  de Creación</th>
                    <th>Activo</th>
                    <th>Fecha de Eliminación</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table table-striped">
                <td><input type="checkbox" class="checkboxDiccionario" name="checkId"></td>
                    <td>01</td>
                    <td>Palabra restringida</td>
                    <td>13-04-2024</td>
                    <td>Si</td>
                    <td>13-04-2024</td>
                </tr>
                
                <tr class="table table-striped">
                <td><input type="checkbox" class="checkboxDiccionario" name="checkId"></td>
                    <td>02</th>
                    <td>Palabra restringida</th>
                    <td>13-04-2024</th>
                    <td>No</th>
                    <td>13-04-2024</th>
                </tr>
                <tr class="table table-striped">
                <td><input type="checkbox" class="checkboxDiccionario" name="checkId"></td>
                    <td>03</th>
                    <td>Palabra restringida</th>
                    <td>13-04-2024</th>
                    <td>Si</th>
                    <td>13-04-2024</th>
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
        initializeCheckboxMaster('checkAllDiccionario', 'checkboxDiccionario');
    </script>
</body>
