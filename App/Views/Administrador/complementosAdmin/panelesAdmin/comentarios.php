<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Administrador de Comentarios</title>
<body>
<!--<div class="btn-panel">        
        <div>
            <a href="creaComentarios" class="btn  btn-primary">Crear Comentario</a>
            <label for="filtroUsuario">Filtrar por ID:</label>
            <input type="text" id="filtroUsuario">
        </div>
        <div>
            <label for="filtroCentro">Filtrar por Rut:</label>
            <input type="text" id="filtroCentro">
        </div>
    </div>-->
    <hr>
    <h1>Comentarios</h1>
    <div class="body-panel">
    <div style="margin: 10px;">
    <div class="containerFiltro">
            <input type="text" class="ofertaFiltro" placeholder="Rut">
                <select class="categoriaFiltro">
                    <option value="Práctica">01</option>
                    <option value="Práctica">02</option>
                    <option value="Práctica">03</option>
                </select>
                <a href="Administrador/editarPublicaciones" class="btn-supervisor marginBtn">Editar</a>
                <a href="#" class="btn-supervisor marginBtn">Eliminar</a>
            </div>

        <table id="tableUsers" class="tabla table">
            <style> .tabla { width: 100%; } </style>
            <thead>
                <tr>
                <th class="widthCheck"><input type="checkbox" id="checkAllComentarios" name="select-all"></th>
                    <th class="anchoId">ID</th>
                    <th>Rut</th>
                    <th>ID Publicación</th>
                    <th>Comentario</th>
                    <th>N° de Reportes</th>
                    <th>Fecha  de Creación</th>
                    <th class="anchoActiv">Activo</th>
                    <th>Fecha de Eliminación</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table table-striped">
                <td><input type="checkbox" class="checkboxComentarios" name="checkId"></td>
                    <td>01</td>
                    <td>09999999-9</td>
                    <td>67</td>
                    <td>Este es un comentario</td>
                    <td>2</td>
                    <td>12-12-2024</td>
                    <td class="anchoActiv">1</td>
                    <td>12-12-2024</td>
                </tr>
                <tr class="table table-striped">
                <td><input type="checkbox" class="checkboxComentarios" name="checkId"></td>
                    <td>02</td>
                    <td>04444444-4</td>
                    <td>45</td>
                    <td>Este es otro comentario</td>
                    <td>3</td>
                    <td>12-12-2024</td>
                    <td class="anchoActiv">1</td>
                    <td>12-12-2024</td>
                </tr>
                <tr class="table table-striped">
                <td><input type="checkbox" class="checkboxComentarios" name="checkId"></td>
                    <td>03</td>
                    <td>05555555-5</td>
                    <td>34</td>
                    <td>Este es otro comentario mwe</td>
                    <td>0</td>
                    <td>12-12-2024</td>
                    <td class="anchoActiv">1</td>
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
        initializeCheckboxMaster('checkAllComentarios', 'checkboxComentarios');
    </script>
</body>
