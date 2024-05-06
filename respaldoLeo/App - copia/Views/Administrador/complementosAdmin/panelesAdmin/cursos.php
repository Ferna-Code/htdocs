<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
<body>
    <!--<div class="btn-panel">        
        <div>
            <a href="creaCursos" class="btn  btn-primary">Crear Categoria</a>
            <label for="filtroUsuario">Filtrar por ID:</label>
            <input type="text" id="filtroUsuario">
        </div>
        <div>
            <label for="filtroCentro">Filtrar por Categoría:</label>
            <input type="text" id="filtroCentro">
        </div>
    </div>-->
    <hr>
    <h1>Cursos</h1>
    <div class="body-panel">
    <div style="margin: 10px;">
            <div class="containerFiltro">
                <input type="date" class="fechaFiltro" name="fechaFiltro" id="fechaFiltro">
                <select class="categoriaFiltro">
                    <option value="Práctica">Diplomado en Gestión de Proyectos TI</option>
                    <option value="Práctica">Diplomado en metodologia Scrum</option>
                    <option value="Práctica">Networking Essentials</option>
                </select>
                <a href="Administrador/editarCursos" class="btn-supervisor marginBtn">Editar</a>
                <a href="#" class="btn-supervisor marginBtn">Eliminar</a>
            </div>

            
        <table id="tableUsers" class="tabla table">
            <style> .tabla { width: 100%; } </style>
            <thead>
                <tr>
                <th class="widthCheck"><input type="checkbox" id="checkAllCursos" name="select-all"></th>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Institución</th>
                    <th>Link Postulación</th>
                    <th>ID Carrera</th>
                    <th>Fecha de Creación</th>
                    <th>Activo</th>
                    <th>Fecha de Eliminación</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table table-striped">
                    <td><input type="checkbox" class="checkboxCursos" name="checkId"></td>
                    <td>01</td>
                    <td>Curso de Farmacología Avanzada</td>
                    <td>Estudio profundo sobre los efectos y reacciones de los fármacos.</td>
                    <td>Universidad de Ciencias de la Salud</td>
                    <td>http://cursofarmacologia.com</td>
                    <td>02</td>
                    <td>12-12-2024</td>
                    <td>Si</td>
                    <td>12-12-2024</td>
                </tr>

                <tr class="table table-striped">
                    <td><input type="checkbox" class="checkboxCursos" name="checkId"></td>
                    <td>01</td>
                    <td>Curso de Gestión en Prevención de Riesgos</td>
                    <td>Curso para mejorar las competencias en la gestión de riesgos laborales.</td>
                    <td>Instituto Técnico de Seguridad Laboral</td>
                    <td>http://cursoriesgos.com</td>
                    <td>02</td>
                    <td>12-12-2024</td>
                    <td>Si</td>
                    <td>12-12-2024</td>
                </tr>

                <tr class="table table-striped">
                    <td><input type="checkbox" class="checkboxCursos" name="checkId"></td>
                    <td>01</td>
                    <td>Curso de Estrategias Comerciales</td>
                    <td>Técnicas avanzadas para impulsar las ventas y mejorar la gestión comercial.</td>
                    <td>Escuela de Negocios</td>
                    <td>http://cursoestrategiascomerciales.com</td>
                    <td>02</td>
                    <td>12-12-2024</td>
                    <td>Si</td>
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
        initializeCheckboxMaster('checkAllCursos', 'checkboxCursos');
    </script>
</body>
