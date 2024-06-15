<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>Categorías</title>

<body>
    <hr>
    <h1>Categorías</h1>
    <div class="body-panel">

        <div style="margin: 10px;">

            <div class="containerFiltro">
            <input style="margin-bottom: 15px;" type="text" id="filtroCategorias" placeholder="Buscar por nombre...">
                <br>
                <button type="button" class="btn-supervisor marginBtn " data-bs-toggle="modal" data-bs-target="#crearCategoria">
                    Nuevo
                </button>
                
                <button type="button" id="deleteSelectedCategorias" class="btn-supervisor marginBtn">Eliminar</button>
            </div>

            <table id="tableCategorias" class="tabla table">
                <thead>
                    <tr>
                        <th class="widthCheck"><input type="checkbox" id="checkAllCategoria" name="select-all"></th>
                        
                        <th>Categoría</th>
                        <th class="anchoFecha">Fecha de Creación</th>
                        <th class="anchoActiv">Activo</th>
                        <th class="anchoFecha">Fecha de Eliminación</th>
                        <th> Editar</th>
                    </tr>
                </thead>
                <tbody id="bodyCategorias">

                </tbody>
            </table>
            <!-- sesion footer -->

        </div>
    </div>

    <!-- Modal Nuevo -->
    <div class="modal fade" id="crearCategoria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar nueva categoria</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addCategoria" method="POST" action="">
                        <label for="nuevaCategoria">Nueva categoria: </label>
                        <input type="text" name="nuevaCategoria" id="nuevaCategoria">

                        <div class="modal-footer">
                            <button type="button" class="btn-supervisor marginBtn" data-bs-dismiss="modal">Cerrar</button>
                            <input type="submit" class="btn-supervisor marginBtn" value="Agregar"></i>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal Editar -->
    <div class="modal fade" id="editarCategoriar" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditarLabel">Editar categoría</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editCategoria" method="POST" action="">
                        <input type="hidden" name="editId" id="editId">
                        <label for="editCategoria">Categoría: </label>
                        <input type="text" name="editCategoria" id="editCategoria">
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
                    <button type="submit" form="editCategoria" class="btn-supervisor marginBtn">Guardar cambios</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <script src="../../../../Public/js/administrador.js"></script> -->

    <script src="../../../../Public/js/check.js"></script>


</body>