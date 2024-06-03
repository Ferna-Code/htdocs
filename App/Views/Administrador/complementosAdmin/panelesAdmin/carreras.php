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
                <button type="button" id="deleteSelectedCarreras" class="btn-supervisor marginBtn">Eliminar</button>
            </div>

        <div class="table-responsive">
            <table id="tableCarreras" class="table table-sm">
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
            <tbody id="bodyCarreras">

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
    <script src="../../../../Public/js/administrador.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
