<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
<body>
    <!--<div class="btn-panel">        
        <div>
            <a href="creaCVabreviado" class="btn  btn-primary">Crear Categoria</a>
            <label for="filtroUsuario">Filtrar por ID:</label>
            <input type="text" id="filtroUsuario">
        </div>
        <div>
            <label for="filtroCentro">Filtrar por Categoría:</label>
            <input type="text" id="filtroCentro">
        </div>
    </div>-->
    <hr>
    <h1>CV. Abreviado</h1>
    <div class="body-panel">
    <div style="margin: 10px;">
            <div class="containerFiltro">
                <input type="date" class="fechaFiltro" name="fechaFiltro" id="fechaFiltro">
                <select class="categoriaFiltro">
                    <option value="Práctica">Educación y Bienestar</option>
                    <option value="Práctica">Tecnología y productividad</option>
                    <option value="Práctica">Negocios e Innovación</option>
                </select>
                <a href="Administrador/editarCVabreviado" class="btn-supervisor marginBtn">Editar</a>
                <a href="#" class="btn-supervisor marginBtn">Eliminar</a>
            </div>

            
        <table id="tableUsers" class="tabla table">
            <style> .tabla { width: 100%; } </style>
            <thead>
                <tr>
                <th class="widthCheck"><input type="checkbox" id="checkAllCVabreviado" name="select-all"></th>
                    <th class="anchoId">Id Archivo CV</th>
                    <th>Rut Usuario</th>
                    <th>Documento</th>
                    <th>Fecha de Ingreso</th>
                    <th>Fecha de Eliminación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table table-striped">
                <td><input type="checkbox" class="checkboxCVabreviado" name="checkId"></td>
                    <td>01</td>
                    <td>77777777-7</td>
                    <td>fdf$$%DOCUMENTO$&F</td>
                    <td>23-04-2024</td>
                    <td>23-04-2024</td>
                    <td>
                        <a href="Administrador/editarCVabreviado" class="btn-supervisor">editar</a>
                    </td>
                </tr>
                <tr class="table table-striped">
                <td><input type="checkbox" class="checkboxCVabreviado" name="checkId"></td>
                    <td>01</td>
                    <td>55555555-5</td>
                    <td>fdf$$%DOCUMENTO$&F</td>
                    <td>23-04-2024</td>
                    <td>23-04-2024</td>
                    <td>
                        <a href="Administrador/editarCVabreviado" class="btn-supervisor">editar</a>
                    </td>

                </tr>
                <tr class="table table-striped">
                <td><input type="checkbox" class="checkboxCVabreviado" name="checkId"></td>
                    <td>01</td>
                    <td>99999999-9</td>
                    <td>fdf$$%DOCUMENTO$&F</td>
                    <td>23-04-2024</td>
                    <td>23-04-2024</td>
                    <td>
                        <a href="Administrador/editarCVabreviado" class="btn-supervisor">editar</a>
                    </td>

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
        initializeCheckboxMaster('checkAllCVabreviado', 'checkboxCVabreviado');
    </script>
</body>
