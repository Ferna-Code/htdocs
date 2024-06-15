<?php
require_once("./App/Models/conexion.php");
require_once("./App/Models/graficosModel.php");

$db = new conexion();
$conexion = $db->conec();

$dataModel = new GraficosModel();

$reportes = $dataModel->cantidadReportes();
$comentarios = $dataModel->cantidadComentarios();
$usuarios = $dataModel->cantidadUsuarios();
$likes = $dataModel->cantidadLike();

$datosReportes = $dataModel->obtenerReportes();
$datosComentarios = $dataModel->obtenerComentarios();
$datosUsuarios = $dataModel->obtenerUsuarios();
$datosLikes = $dataModel->obtenerLikes();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../Public/css/StyleGrafic.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="DashBoard">
        <div>
            <button id="Publicaciones">Publicaciones</button>
            <button id="Comentarios">Comentarios</button>
            <button id="ofertas">Ofertas</button>
        </div>
        <div class="superiorDash">
            <div id="curve_chart" style="width: 100%; height: 400px"></div>
        </div>
        <div class="medioDash">
            <div id="piechart" style="width: 700px; height: 400px;"></div>
        </div>
        <div id="table_div" class="tablaGraficos"></div>
        <a href="supervisor">Volver</a>
    </div>

    <script type="text/javascript">
        // Datos codificados en JSON
        var datosReportes = <?php echo json_encode($datosReportes); ?>;
        var datosComentarios = <?php echo json_encode($datosComentarios); ?>;
        var datosUsuarios = <?php echo json_encode($datosUsuarios); ?>;
        var datosLikes = <?php echo json_encode($datosLikes); ?>;

        // Carga de los paquetes de Google Charts
        google.charts.load('current', {
            'packages': ['corechart', 'table']
        });

        google.charts.setOnLoadCallback(drawCharts);

        function drawCharts() {
            drawCurveChart();
            drawPieChart();
        }

        // Gráfico de línea
        function drawCurveChart() {
            var data = google.visualization.arrayToDataTable([
                ['Fecha', 'Cantidad de Publicaciones'],
                <?php
                $sql = "SELECT fechaCreacion, COUNT(*) as cantidad FROM publicaciones GROUP BY fechaCreacion";
                $consulta = mysqli_query($conexion, $sql);
                while ($resultado = mysqli_fetch_assoc($consulta)) {
                    echo "['" . $resultado['fechaCreacion'] . "', " . $resultado['cantidad'] . "],";
                }
                ?>
            ]);

            var options = {
                title: 'Cantidad de publicaciones',
                curveType: 'function',
                legend: { position: 'bottom' },
                pointSize: 5,
                hAxis: { title: 'Fecha' },
                vAxis: { title: 'Cantidad de Publicaciones' }
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
            chart.draw(data, options);
        }

        // Gráfico circular
        function drawPieChart() {
            var data = google.visualization.arrayToDataTable([
                ['Tabla', 'Cantidad de datos'],
                ['Publicaciones reportadas', <?php echo $reportes; ?>],
                ['Comentarios', <?php echo $comentarios; ?>],
                ['Usuarios', <?php echo $usuarios; ?>],
                ['Publicaciones con Likes', <?php echo $likes; ?>],
            ]);

            var options = {
                title: 'Distribución de Datos'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            google.visualization.events.addListener(chart, 'select', function() {
                var selectedItem = chart.getSelection()[0];
                if (selectedItem) {
                    var topping = data.getValue(selectedItem.row, 0);
                    loadTable(topping);
                }
            });

            chart.draw(data, options);
        }

        // Función para cargar la tabla según el sector seleccionado
        function loadTable(topping) {
            var dataTable = new google.visualization.DataTable();
            var rows = [];

            if (topping === 'Publicaciones reportadas') {
                dataTable.addColumn('number', 'ID');
                dataTable.addColumn('string', 'RUT Usuario');
                dataTable.addColumn('number', 'ID Publicación');
                dataTable.addColumn('string', 'Fecha Creación');
                dataTable.addColumn('boolean', 'Activo');
                rows = datosReportes.map(row => [parseInt(row.id), row.rutusuario, parseInt(row.idpublicacion), row.fechaCreacion, Boolean(row.activo)]);
            } else if (topping === 'Comentarios') {
                dataTable.addColumn('number', 'ID');
                dataTable.addColumn('string', 'RUT Usuario');
                dataTable.addColumn('number', 'ID Publicación');
                dataTable.addColumn('string', 'Comentario');
                dataTable.addColumn('number', 'N Reportes');
                dataTable.addColumn('string', 'Fecha Creación');
                dataTable.addColumn('boolean', 'Activo');
                rows = datosComentarios.map(row => [parseInt(row.id), row.rutusuario, parseInt(row.idpublicacion), row.comentario, parseInt(row.nreportes), row.fechaCreacion, Boolean(row.activo)]);
            } else if (topping === 'Usuarios') {
                dataTable.addColumn('string', 'RUT');
                dataTable.addColumn('string', 'Nombre');
                dataTable.addColumn('string', 'Fecha Nacimiento');
                dataTable.addColumn('number', 'ID Perfil');
                dataTable.addColumn('string', 'Correo');
                dataTable.addColumn('number', 'ID Carrera');
                rows = datosUsuarios.map(row => [row.rut, row.nombre, row.fechaNacimiento, parseInt(row.idperfil), row.correo, parseInt(row.idcarrera)]);
            } else if (topping === 'Publicaciones con Likes') {
                dataTable.addColumn('number', 'ID');
                dataTable.addColumn('string', 'RUT Usuario');
                dataTable.addColumn('string', 'Publicación');
                dataTable.addColumn('number', 'N Reportes');
                dataTable.addColumn('string', 'Fecha Creación');
                dataTable.addColumn('boolean', 'Activo');
                dataTable.addColumn('number', 'N Likes');
                rows = datosLikes.map(row => [parseInt(row.id), row.rutusuario, row.publicacion, parseInt(row.nreportes), row.fechaCreacion, Boolean(row.activo), parseInt(row.nlikes)]);
            }

            dataTable.addRows(rows);

            var table = new google.visualization.Table(document.getElementById('table_div'));
            table.draw(dataTable, { showRowNumber: true, width: '100%', height: '100%' });
        }
    </script>
</body>
</html>
