<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>Administrador de Comentarios</title>

<body>

    <hr>
    <h1>Comentarios</h1>
    <div class="body-panel">
        <div style="margin: 10px;">
            <div class="containerFiltro">
            <input type="text" id="filtroRutUsuarioComentarios" placeholder="Filtrar por Rut Usuario...">
                    <button type="button" id="deleteSelectedComentarios" class="btn-supervisor marginBtn">Eliminar</button>
            </div>

            <table id="tableComentarios" class="tabla table">
                <style>
                    .tabla {
                        width: 100%;
                    }
                </style>
                <thead>
                    <tr>
                        <th class="widthCheck"><input type="checkbox" id="checkAllComentarios" name="select-all"></th>
                        <th>Rut</th>
                        <th>Comentario</th>
                        <th>N° de Reportes</th>
                        <th>Fecha de Creación</th>
                        <th class="anchoActiv">Activo</th>
                        <th>Fecha de Eliminación</th>
                    </tr>
                </thead>
                <tbody id="bodyComentarios">

                </tbody>
            </table>
            <!-- seccion footer -->
        </div>
    </div>

    <!-- Modal Editar -->
    <div class="modal fade" id="modalEditarComentario" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditarLabel">Editar comentario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form id="editComentario" method="POST" action="">
                        <input type="hidden" name="editId" id="editId">
                        <label for="editComentario">Comentario: </label></br>
                        <textarea class="form-control" id="editComentario" name="editComentario" placeholder="Este es un comentario" required></textarea><br>

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
                    <button type="submit" form="editComentario" class="btn-supervisor marginBtn">Guardar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="../../../../Public/js/check.js"></script>
    <script>
        // Llamada en una vista
        initializeCheckboxMaster('checkAllComentarios', 'checkboxComentarios');
    </script>
</body>