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
            <input style="margin-bottom: 15px" type="text" id="filtroRutUsuarioReportes" placeholder="Buscar por Rut...">
                
                <button type="button" id="deleteSelectedReportes" class="btn-supervisor marginBtn">Eliminar</button>
            </div>

            <table id="tableReportes" class="tabla table">
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
                <tbody id="bodyReportes">

                </tbody>
            </table>

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
    <!-- <script src="../../../../Public/js/administrador.js"></script> -->

    <script src="../../../../Public/js/check.js"></script>
</body>