<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>Administrador Carreras</title>
<link rel="stylesheet" href="cssTablasModelo.css">

<body>
    <hr>
    <h1>Carreras</h1>
    <div class="body-panel">
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
                <input type="submit" class="btnFiltro" value="Filtrar"><br>
                <button type="button" class="btn-supervisor marginBtn " data-bs-toggle="modal" data-bs-target="#crearCarrera">
                    Nuevo
                </button>
                <button type="button" class="btn-supervisor marginBtn " data-bs-toggle="modal" data-bs-target="#editarCarrera">
                    Editar
                </button>
                <button type="button" id="deleteSelectedCarreras" class="btn-supervisor marginBtn">Eliminar</button>
            </div>

            <div class="table-responsive">
                <table id="tableCarreras" class="table table-sm">
                    <thead>
                        <tr>
                            <th class="widthCheck"><input type="checkbox" id="checkAllCarrera" name="select-all"></th>
                            <th>Nombre</th>
                            <th>Categoria</th>
                            <th>Fecha de Ingreso</th>
                            <th>Activo</th>
                            <th>Fecha de Eliminación</th>
                            <th>Acción</th>
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


    <!-- Modal Nuevo -->
    <div class="modal fade" id="crearCarrera" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar nueva carrera</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addCarrera" method="POST" action="">
                        <label for="nuevaCarrera">Nueva Carrera: </label>
                        <input type="text" name="nuevaCarrera" id="nuevaCarrera">
                        <label for="cat">Categoria: </label>
                        <select name="categoria" id="categoria">
                            <option value="1">Educación, bienestar y calidad</option>
                            <option value="2">Informática, tecnología y productividad</option>
                            <option value="3">Negocios, gestión e innovación</option>
                        </select>

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
    <div class="modal fade" id="editarCarrera" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditarLabel">Editar carrera</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editCarrera" method="POST" action="">
                        <input type="hidden" name="editId" id="editId">
                        <label for="editCarrera">Categoría: </label>
                        <input type="text" name="editCarrera" id="editCategoria">
                        <div class="col">
                            <label>Categoria:</label>
                            <select class="form-select" name="editCate" id="editCate" required>
                                <option value="1">1</option>
                                <option value="0">0</option>
                            </select>
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
                    <button type="submit" form="editCategoria" class="btn-supervisor marginBtn">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <script src="../../../../Public/js/check.js"></script>
    <!-- <script src="../../../../Public/js/administrador.js"></script> -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>