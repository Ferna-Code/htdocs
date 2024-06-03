<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Postulaciones</title>
<body>

    <hr>
    <h1>Postulaciones</h1>
    <div class="body-panel">
    <div style="margin: 10px;">
            <div class="containerFiltro">
                <input type="date" class="fechaFiltro" name="fechaFiltro" id="fechaFiltro">
                <input type="text" class="fechaFiltro" name="fechaFiltro" id="fechaFiltro" placeholder="Rut Postulante">
                <input type="text" class="fechaFiltro" name="fechaFiltro" id="fechaFiltro" placeholder="Rut Empresa">
                <button type="button" id="deleteSelected" class="btn-supervisor marginBtn">Eliminar</button>
            </div>

            
        <table id="tablePostulaciones" class="tabla table">
            <style> .tabla { width: 100%; } </style>
            <thead>
                <tr>
                    <th class="widthCheck"><input type="checkbox" id="checkAllPostulaciones" name="select-all"></th>
                    <th class="anchoId">ID</th>
                    <th>Rut Usuario</th>
                    <th>ID Carrera</th>
                    <th>Rut Empresa</th>
                    <th>ID Oferta</th>
                    <th>Fecha de Ingreso</th>
                    <th>Fecha de Eliminacion</th>
                </tr>
            </thead>
            <tbody id="bodyPostulaciones">
 
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
        initializeCheckboxMaster('checkAllPostulaciones', 'checkboxPostulacion');
    </script>
</body>
