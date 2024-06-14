<?php
require_once("./App/Models/conexion.php");

// Crear instancia de la clase de conexión y establecer la conexión
$db = new conexion();
$conexion = $db->conec();
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
        <div id="chart_div" class="divChart" ></div>
        <a href="supervisor">Volver</a>
    </div>


    <script>
        google.charts.load('current', {
            packages: ['corechart', 'bar']
        });
        google.charts.setOnLoadCallback(drawBasic);

        function drawBasic() {
            var data = google.visualization.arrayToDataTable([
                ['Fecha', 'Cantidad de Publicaciones'],

                <?php
                // Consulta SQL para obtener la cantidad de publicaciones por fecha
                $sql = "SELECT fechaCreacion, COUNT(*) as cantidad FROM publicaciones GROUP BY fechaCreacion";
                $consulta = mysqli_query($conexion, $sql);

                // Iterar sobre los resultados y pasar los datos al gráfico
                while ($resultado = mysqli_fetch_assoc($consulta)) {
                    echo "['" . $resultado['fechaCreacion'] . "', " . $resultado['cantidad'] . "],";
                }
                ?>
            ]);

            var options = {
                title: 'Cantidad de Publicaciones por Fecha',
                chartArea: {
                    width: '50%'
                },
                hAxis: {
                    title: 'Cantidad de Publicaciones',
                    minValue: 0
                },
                vAxis: {
                    title: 'Fecha'
                }
            };

            var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
</body>

</html>