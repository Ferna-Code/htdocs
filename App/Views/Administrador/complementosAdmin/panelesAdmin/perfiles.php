<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crear Perfiles</title>
<body>
<!--<div class="btn-panel">        
        <div>
            <a href="creaPerfiles" class="btn  btn-primary">Crear Perfil</a>
            <label for="filtroUsuario">Filtrar por ID:</label>
            <input type="text" id="filtroUsuario">
        </div>
        <div>
            <label for="filtroCentro">Filtrar por Perfil:</label>
            <input type="text" id="filtroCentro">
        </div>
    </div>-->
    <hr>
    <h1>Perfiles</h1>
    <div class="body-panel">
    <div style="margin: 10px;">
            <div class="containerFiltro">

                <a href="Administrador/creaPerfiles" class="btn-supervisor marginBtn">Crear</a>
                <a href="Administrador/editarPerfiles" class="btn-supervisor marginBtn">Editar</a>
                <a href="#" class="btn-supervisor marginBtn">Eliminar</a>
            </div>

        <table id="tablePerfils" class="tabla table">
            <style> .tabla { width: 100%; } </style>
            <thead>
                <tr>
                    <th class="widthCheck"><input type="checkbox" id="checkAllPerfiles" name="select-all"></th>
                    <th class="anchoId">ID</th>
                    <th>Nombre</th>
                    <th>Fecha de Ingreso</th>
                    <th>Activo</th>
                    <th>Fecha de Eliminacion</th>
                </tr>
            </thead>
            <tbody id="bodyPerfiles">
              
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
        initializeCheckboxMaster('checkAllPerfiles', 'checkboxPerfiles');
    </script>
</body>
