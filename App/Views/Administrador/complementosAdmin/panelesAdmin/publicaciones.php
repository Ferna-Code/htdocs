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
            <input style="margin-bottom: 15px" type="text" id="filtroRutUsuario" placeholder="Buscar por rut...">
                <button type="button" id="deleteSelectedPublicacion" class="btnFiltro">Eliminar</button>
            </div>

            <table id="tablePublicaciones" class="tabla table">
                <style>
                    .tabla {
                        width: 100%;
                    }
                </style>
                <thead>
                    <tr>
                        <th class="widthCheck"><input type="checkbox" id="checkAllPublicacion" name="select-all"></th>
                       
                        <th>Rut Usuario</th>
                        <th>Publicación</th>
                        <th>N° de Reportes</th>
                        <th>Fecha de Ingreso</th>
                        <th>Activo</th>
                        <th>Fecha de Eliminacion</th>
                    </tr>
                </thead>
                <tbody id="bodyPublicaciones">

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
    <script src="../../../../Public/js/check.js"></script>
    <!-- <script src="../../../../Public/js/administrador.js"></script> -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

</html>