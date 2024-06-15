<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>Usuarios</title>

<body>

    <hr>
    <h1>Usuarios</h1>
    <div class="body-panel">
        <div style="margin: 10px 10px;">
            <div class="containerFiltro">
            <input style="margin-bottom: 15px" type="text" id="filtroRutUsuario" placeholder="Buscar por Rut..."><br>
                <button type="button" id="deleteSelectedUsuarios" class="btn-supervisor marginBtn">Eliminar</button>
            </div>

            <table id="tableUsuarios" class="tabla table">
                <style>
                    .tabla {
                        width: 100%;
                    }
                </style>
                <thead>
                    <tr>
                        <th class="widthCheck"><input type="checkbox" id="checkAllUsuarios" name="select-all"></th>
                        <th>Rut</th>
                        <th>Nombre</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Perfil</th>
                        <th>Correo</th>
                        <th>Carrera</th>
                        <th>Avance</th>
                        <th>Cargo</th>
                        <th>Clave</th>
                        <th>F. Ingreso</th>
                        <th>F.Eliminación</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody id="bodyUsuarios">

                </tbody>
            </table>
        </div>
    </div>
    <!-- Modal Editar -->
    <div class="modal fade" id="editarUsuario" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditarLabel">Editar Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" class="form">
                        <input type="hidden" class="form-control" name="IDUsuario">
                        <div class="row">
                            <div class="col">
                                <label for="rut">Nombre:</label>
                                <input type="text" class="form-control" name="nombre">
                            </div>
                            <div class="col">
                                <label for="nombre">Rut:</label>
                                <input type="text" class="form-control" name="rut">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="nombre">Usuario:</label>
                                <input type="text" class="form-control" name="usuario">
                            </div>
                            <div class="col">
                                <label for="materno">Clave Ingreso</label>
                                <input type="text" class="form-control" name="clave">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="nombre">Carrera</label>
                                <input type="text" class="form-control" name="correo">
                            </div>
                            <div class="col">
                                <label for="materno">Fecha de Nacimiento</label>
                                <input type="date" class="form-control" name="clave">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="rut">Avance</label>
                                <select class="form-select" style="width: 100%" aria-label="Default select example" id="perfil" name="perfil">
                                    <option>Seleccionar</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="rut">Cargo</label>
                                <input type="text" class="form-control" name="Cargo">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn-supervisor marginBtn" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" form="editCategoria" class="btn-supervisor marginBtn">Guardar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <script src="../../../../Public/js/administrador.js"></script> -->

    <script src="../../../../Public/js/check.js"></script>
</body>