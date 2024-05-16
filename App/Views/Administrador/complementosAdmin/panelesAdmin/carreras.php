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
                <a href="Administrador/crearCarrera" class="btn-supervisor marginBtn">Crear</a>
                <a href="Administrador/editarCarrera" class="btn-supervisor marginBtn">Editar</a>
                <a href="#" class="btn-supervisor marginBtn">Eliminar</a>
            </div>

        <div class="table-responsive">
            <table id="tableUsers" class="table table-sm">
            <thead>
                <tr >
                    <th class="widthCheck"><input type="checkbox" id="checkAllCarrera" name="select-all"></th>
                    <th >ID</th>
                    <th>Nombre</th>
                    <th>Categoria</th>
                    <th >Fecha de Ingreso</th>
                    <th >Activo</th>
                    <th >Fecha de Eliminacion</th>
                </tr>
            </thead>
            <tbody>
                <tr >
                    <td><input type="checkbox" class="checkboxCarrera" name="checkId"></td>
                    <td>01</td>
                    <td>Analista Programador</td>
                    <td>Informática Tecnología y Productividad</td>
                    <td>12-04-2024</td>
                    <td>1</td>
                    <td>23-04-2024</td>
                </tr>

                <tr >
                    <td><input type="checkbox" class="checkboxCarrera" name="checkId"></td>
                    <td>02</td>
                    <td>Técnico en Construcción</td>
                    <td>Informática Tecnología y Productividad</td>
                    <td>12-04-2024</td>
                    <td>1</td>
                    <td>23-04-2024</td>
                </tr>
                
                <tr  >
                    <td><input type="checkbox" class="checkboxCarrera" name="checkId"></td>
                    <td>03</td>
                    <td>Psicopedagogía</td>
                    <td>Educación Bienestar y Calidad de vida</td>
                    <td>12-04-2024</td>
                    <td>1</td>
                    <td>23-04-2024</td>
                </tr>
            </tbody>
        </table>
        </div>    
        <!-- seccion footer -->
               <div class="footer-tools">
                <div class="list-items">
                    Mostrar
                    <select name="n-entries" id="n-entries" class="n-entries">
                        <option value="5">5</option>
                        <option value="10" selected>10</option>
                        <option value="15">15</option>
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
