<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>Reportes</title>

<body>

    <hr>
    <h1>Reportes</h1>
    <div class="body-panel">
        <div style="margin: 10px;">
            <div class="containerFiltro">
                <input type="date" class="fechaFiltro" name="fechaFiltro" id="fechaFiltro">
                <select class="categoriaFiltro">
                    <option value="Práctica">11111111-1</option>
                    <option value="Práctica">22222222-2</option>
                    <option value="Práctica">33333333-3</option>
                </select>
                <input type="submit" class="btnFiltro" value="Filtrar">

                <button type="button" class="btn-supervisor " data-bs-toggle="modal" data-bs-target="#modalEditarReporte"> Editar</button>

                <a href="#" class="btn-supervisor marginBtn">Eliminar</a>
            </div>





            <table id="dataTable" class="tabla table">
                <style>
                    .tabla {
                        width: 100%;
                    }
                </style>
                <thead>
                    <tr>
                        <th class="widthCheck"><input type="checkbox" id="checkAllReportes" name="select-all"></th>
                        <th class="anchoId">ID</th>
                        <th>Id Comentario</th>
                        <th>Rut usuario</th>
                        <th>Id Publicación</th>
                        <th>Fecha de Ingreso</th>
                        <th>Activo</th>
                        <th>Fecha de Eliminacion</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table table-striped">
                        <td><input type="checkbox" class="checkboxReportes" name="checkId"></td>
                        <td>01</td>
                        <td>554</td>
                        <td>77777777-7</td>
                        <td>878</td>
                        <td>12-12-2024</td>
                        <td>1</td>
                        <td>12-12-2024</td>
                    </tr>

                    <tr class="table table-striped">
                        <td><input type="checkbox" class="checkboxReportes" name="checkId"></td>
                        <td>02</td>
                        <td>5758</td>
                        <td>77777777-7</td>
                        <td>8768</td>
                        <td>12-12-2024</td>
                        <td>1</td>
                        <td>12-12-2024</td>
                    </tr>
                    <tr class="table table-striped">
                        <td><input type="checkbox" class="checkboxReportes" name="checkId"></td>
                        <td>03</td>
                        <td>5342</td>
                        <td>77777777-7</td>
                        <td>673</td>
                        <td>12-12-2024</td>
                        <td>0</td>
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

    <!-- Modal Editar -->
    <div class="modal fade" id="modalEditarReporte" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditarLabel">Editar Reporte</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editReporte" method="POST" action="">
                        <label for="rut" style="text-align: center;">Rut: 11111111-1</label>
                        <div class="col">
                            <label>Activo:</label>
                            <select class="form-select" name="editActivo" id="editActivo" required>
                                <option value="1">1</option>
                                <option value="0">0</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-supervisor marginBtn" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" form="editReporte" class="btn-supervisor marginBtn">Guardar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script src="../../../../Public/js/check.js"></script>

    <script>
        // Llamada en una vista
        initializeCheckboxMaster('checkAllReportes', 'checkboxReportes');
    </script>
</body>