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
            <select class="categoriaFiltro">
                    <option value="Práctica">Categoría 1</option>
                    <option value="Práctica">Categoría 2</option>
                    <option value="Práctica">Categoría 3</option>
                </select>
                <input type="submit" class="btnFiltro" value="Filtrar">
                <select class="categoriaFiltro">
                    <option value="Práctica">Diplomado en Gestión de Proyectos TI</option>
                    <option value="Práctica">Diplomado en metodologia Scrum</option>
                    <option value="Práctica">Networking Essentials</option>
                </select>
                <input type="submit" class="btnFiltro" value="Filtrar"><br>
                <a href="#" onclick="controlVisi17()" class="btn-supervisor marginBtn ">Agregar</a>
                <button type="button" id="deleteSelectedCurso" class="btn-supervisor marginBtn">Eliminar</button>
            </div>

            <form action="#">

        <table id="tableCursos" class="tabla table">
            <style> .tabla { width: 100%; } </style>
            <thead>
                <tr>
                <th class="widthCheck"><input type="checkbox" id="checkAllCursos" name="select-all"></th>
                   
                    <th>Nombre</th>               
                    <th>Centro de capacitación</th>               
                    <th>Fecha de Creación</th>
                    <th>Ver</th>
                </tr>
            </thead>
            <tbody id="bodyCursos">

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
</form>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- <script src="../../../../Public/js/administrador.js"></script> -->

    <script src="../../../../Public/js/check.js"></script>

</body>
