<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>Administrador de Ofertas</title>

<body>
    
    <hr>
    <h1>Ofertas Laborales</h1>
    <div class="body-panel">
        <div style="margin: 10px;">
            <div class="containerFiltro">
            <input type="text" id="filtroCargo"  placeholder="Filtrar por Cargo...">
            <input type="text" id="filtroNombreEmpresa"  placeholder="Filtrar por Nombre de Empresa...">

                <a href="Administrador/editarOfertas" class="btn-supervisor marginBtn">Editar</a>
                <button type="button" id="deleteSelectedOfertas" class="btn-supervisor marginBtn">Eliminar</button>
            </div>

            <table id="tableOfertas" class="tabla table">

                <thead>
                    <tr>
                        <th class="widthCheck"><input type="checkbox" id="checkAllOfertas" name="select-all"></th>
                        <th>Cargo</th>
                        <th>Empresa</th>
                        <th>Tipo de oferta</th>
                        <th>Fecha publicación</th>
                        <th>Fecha eliminación</th>
                    </tr>
                </thead>
                <tbody id="bodyOfertas">

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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <script src="../../../../Public/js/administrador.js"></script> -->

    <script src="../../../../Public/js/check.js"></script>

</body>