<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Administrador de Ofertas</title>
<body>
<!--<div class="btn-panel">        
        <div>
            <a href="creaOfertas" class="btn  btn-primary">Ingresar Oferta</a>
            <label for="filtroUsuario">Filtrar por Título:</label>
            <input type="text" id="filtroUsuario">
        </div>
        <div>
            <label for="filtroCentro">Filtrar por Carrera:</label>
            <input type="text" id="filtroCentro">
        </div>
    </div>-->
    <hr>
    <h1>Ofertas Laborales</h1>
    <div class="body-panel">
    <div style="margin: 10px;">
            <div class="containerFiltro">
                <input type="date" class="fechaFiltro" name="fechaFiltro" id="fechaFiltro">
                <select class="categoriaFiltro">
                    <option value="Práctica">Full time</option>
                    <option value="Práctica">Part Time</option>
                    <option value="Práctica">Practica Laboral</option>
                </select>                
                <select class="categoriaFiltro">
                    <option value="Práctica">Categoria 1</option>
                    <option value="Práctica">Categoria 2</option>
                    <option value="Práctica">Categoria 3</option>
                </select>
                
                <a href="Administrador/editarOfertas" class="btn-supervisor marginBtn">Editar</a>
                <a href="#" class="btn-supervisor marginBtn">Eliminar</a>
            </div>

        <table id="tableUsers" class="tabla table">
            
            <thead>
                <tr>
                    <th class="widthCheck"><input type="checkbox" id="checkAllOfertas" name="select-all"></th>
                    <th class="anchoId">ID</th>
                    <th>Tipo de Oferta</th>
                    <th>ID de Categoría</th>
                    <th>Rargo</th>
                    <th>Empresa</th>
                    <th>Rut Empresa</th>
                    <th>Correo</th>
                    <th>Descripción</th>
                    <th>Renta Aproximada</th>
                    <th>Fecha de Creación</th>
                    <th>Fecha de Eliminación</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table table-striped">
                <td><input type="checkbox" class="checkboxOfertas" name="checkId"></td>
                    <td>01</td>
                    <td>Full Time</td>
                    <td>1</td>
                    <td>Técnico Farmacéutico</td>
                    <td>Farmacias Ahumada</td>
                    <td>7620012-K</td>
                    <td>rh@ahumada.com</td>
                    <td>Se requiere técnico farmacéutico para gestionar y dispensar medicamentos.</td>
                    <td>1200000</td>
                    <td>12-12-2024</td>
                    <td>12-12-2024</td>
                </tr>
                
                <tr class="table table-striped">
                    <td><input type="checkbox" class="checkboxOfertas" name="checkId"></td>
                    <td>02</td>
                    <td>Práctica Laboral</td>
                    <td>2</td>
                    <td>Asistente de Prevención de Riesgos</td>
                    <td>Constructora ABC</td>
                    <td>1593571-0</td>
                    <td>seguridad@constructoraabc.cl</td>
                    <td>Buscamos estudiantes para práctica en prevención de riesgos en obras de construcción.</td>
                    <td>200000</td>
                    <td>12-12-2024</td>
                    <td>12-12-2024</td>
                </tr>

                <tr class="table table-striped">
                    <td><input type="checkbox" class="checkboxOfertas" name="checkId"></td>
                    <td>03</td>
                    <td>Part Time</td>
                    <td>3</td>
                    <td>Asesor Comercial</td>
                    <td>ventas@innovcomercial.cl</td>
                    <td>8825511-2</td>
                    <td>ventas@innovcomercial.cl</td>
                    <td>Oportunidad de trabajo part time como asesor comercial en el área de negocios y gestión.</td>
                    <td>700000</td>
                    <td>12-12-2024</td>
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
        initializeCheckboxMaster('checkAllOfertas', 'checkboxOfertas');
    </script>
</body>
