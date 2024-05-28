<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Panel Publicaciones</title>

    <!-- tabla dinámica-->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <!--<link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css" />-->

<body>

    <hr>
    <h1>Publicaciones</h1>
    <div class="body-panel">
        <div style="margin: 10px;">
            <div class="containerFiltro">
                <input type="text" class="ofertaFiltro" placeholder="Rut">
                <select class="categoriaFiltro">
                    <option value="Práctica">01</option>
                    <option value="Práctica">02</option>
                    <option value="Práctica">03</option>
                </select>
                <input type="submit" class="btnFiltro" value="Filtrar">
                <button type="button" class="btn-supervisor" data-bs-toggle="modal" data-bs-target="#modalEditarPublicacion">Editar</button>

                <a href="#" class="btn-supervisor marginBtn">Eliminar</a>
            </div>

            <table id="tablePublicaciones" class="tabla table">
                <style> .tabla { width: 100%;  }   </style>
                <thead>
                    <tr>
                        <th class="widthCheck"><input type="checkbox" id="checkAllPublicacion" name="select-all"></th>
                        <th class="anchoId">ID</th>
                        <th>Rut Usuario</th>
                        <th>Publicación</th>
                        <th>N° de Reportes</th>
                        <th>Fecha de Ingreso</th>
                        <th>Activo</th>
                        <th>Fecha de Eliminacion</th>
                    </tr>
                </thead>
                <tbody id="bodyPublicaciones">
                   <!-- <tr class="table table-striped">
                        <td><input type="checkbox" class="checkboxPublicacion" name="checkId"></td>
                        <td>01</td>
                        <td>44444444-4</td>
                        <td>Esta es una Publicación</td>
                        <td>01</td>
                        <td>12-12-2024</td>
                        <td>No</td>
                        <td>12-12-2024</td>
                    </tr>

                    <tr class="table table-striped">
                        <td><input type="checkbox" class="checkboxPublicacion" name="checkId"></td>
                        <td>02</td>
                        <td>55555555-5</td>
                        <td>Esta es una Publicación</td>
                        <td>02</td>
                        <td>12-12-2024</td>
                        <td>No</td>
                        <td>12-12-2024</td>
                    </tr>

                    <tr class="table table-striped">
                        <td><input type="checkbox" class="checkboxPublicacion" name="checkId"></td>
                        <td>03</td>
                        <td>66666666-6</td>
                        <td>Esta es una Publicación</td>
                        <td>03</td>
                        <td>12-12-2024</td>
                        <td>No</td>
                        <td>12-12-2024</td>
                    </tr>-->
                </tbody>
            </table>



            <!-- seccion footer-->
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

    <!-- MODAL EDITAR PUBLICACACION -->
    <div class="modal fade" id="modalEditarPublicacion" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditarLabel">Editar Publicación</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- forma modal -->
                    <form id="editPublicacion" method="POST" action="">

                        <label for="rut" style="text-align: center;">Rut Usuario:</label>

                        <input type="text" id="rutPublic" class="form-control" name="rut" placeholder="Ingrese el Rut" required><br>

                        <label for="publica" style="text-align: center;">Publicación:</label>

                        <textarea class="form-control" id="pPublic" name="publica" placeholder="Esta es una Publicación" required></textarea><br>

                        <label style="text-align: center;">N° de Reportes:</label><br>

                        <select class="form-select" id="nReportePublic" style="width: 150px" name="NReporte" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select><br>

                    </form>
                    <!-- fin forma modal -->

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-supervisor marginBtn" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" form="editPublicacion" class="btn-supervisor marginBtn">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN MODAL EDITAR PUBLICACACION -->

    <script src="../../../../Public/js/check.js"></script>
    <script> // Llamada en una vista
        initializeCheckboxMaster('checkAllPublicacion', 'checkboxPublicacion');
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>