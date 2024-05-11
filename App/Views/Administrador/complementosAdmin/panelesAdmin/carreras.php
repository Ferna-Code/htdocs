<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Administrador Carreras</title>
    <link rel="stylesheet" href="cssTablasModelo.css">
<body>
  <hr>
    <h1>Carreras</h1>
    <div class="body-panel" >
    <div style="margin: 10px;">
            <div class="containerFiltro">
            <select class="categoriaFiltro">
                    <option value="Práctica">Analista Programador</option>
                    <option value="Práctica">Técnico en Construcción</option>
                    <option value="Práctica">Psicopedagogía</option>
                </select>
                <input type="submit" class="btnFiltro" value="Filtrar">
                <select class="categoriaFiltro">
                    <option value="Práctica">Informática Tecnología y Productividad</option>
                    <option value="Práctica">Educación Bienestar y Calidad de vida</option>
                    <option value="Práctica">Informática Tecnología y Productividad</option>
                </select>
                <input type="submit" class="btnFiltro" value="Filtrar">
            </div>
            <div>                
                <a href="Administrador/crearCarrera" class="btn-supervisor marginBtn">Crear</a>
                <a href="Administrador/editarCarrera" class="btn-supervisor marginBtn">Editar</a>
                <a href="#" class="btn-supervisor marginBtn">Eliminar</a>
            </div>
        
            <table id="tableUsers" class="tabla table">
            <thead>
                <tr>
                    <th class="widthCheck"><input type="checkbox" id="checkAllCarrera" name="select-all"></th>
                    <th class="anchoId">ID</th>
                    <th>Nombre</th>
                    <th>Categoria</th>
                    <th class="anchoFecha">Fecha de Ingreso</th>
                    <th class="anchoActiv">Activo</th>
                    <th class="anchoFecha">Fecha de Eliminacion</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table table-striped">
                    <td><input type="checkbox" class="checkboxCarrera" name="checkId"></td>
                    <td class="widthCheck">01</td>
                    <td>Analista Programador</td>
                    <td>Informática Tecnología y Productividad</td>
                    <td  class="anchoFecha">12-04-2024</td>
                    <td  class="anchoActiv">1</td>
                    <td class="anchoFecha">23-04-2024</td>
                </tr>

                <tr class="table table-striped">
                    <td><input type="checkbox" class="checkboxCarrera" name="checkId"></td>
                    <td class="widthCheck">02</td>
                    <td>Técnico en Construcción</td>
                    <td>Informática Tecnología y Productividad</td>
                    <td  class="anchoFecha">12-04-2024</td>
                    <td class="anchoActiv">1</td>
                    <td class="anchoFecha">23-04-2024</td>
                </tr>
                
                <tr class="table table-striped">
                    <td><input type="checkbox" class="checkboxCarrera" name="checkId"></td>
                    <td class="widthCheck">03</td>
                    <td>Psicopedagogía</td>
                    <td>Educación Bienestar y Calidad de vida</td>
                    <td  class="anchoFecha">12-04-2024</td>
                    <td  class="anchoActiv">1</td>
                    <td class="anchoFecha">23-04-2024</td>
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
        initializeCheckboxMaster('checkAllCarrera', 'checkboxCarrera');
    </script>

</body>
