<?php
require_once("./App/Models/conexion.php");
require_once("./App/Models/graficosModel.php");

$dataModel = new GraficosModel();

$reportes = $dataModel->cantidadReportes();
$comentarios = $dataModel->cantidadComentarios();
$usuarios = $dataModel->cantidadUsuarios();
$cantidadOfertas = $dataModel->cantidadOfertas();
$cantidadCursos = $dataModel->cantidadCursos();
$cantidadPostulaciones = $dataModel->cantidadPostulaciones();
$cantidadCarreras = $dataModel->cantidadCarreras();
$likes = $dataModel->cantidadLike();
$publicaciones = $dataModel->cantidadPublicacionesPorFecha(); // Nueva función que obtiene la cantidad de publicaciones por fecha
$topPublicaciones = $dataModel->getTopPublicaciones(3);
$topOfertas = $dataModel->getTopOfertas(3);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../../../Public/css/graficos.css">
    <title>RedLeones - Graficos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
       
    </style>
</head>

<body class="">
    <div class="container text-center">
        <a href="prueba">Graficos2</a>
        <div class="row mt-4">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Publicaciones</h5>
                        <p class="card-text"><?php echo $comentarios ?></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Total ofertas</h5>
                        <p class="card-text"><?php echo $cantidadOfertas ?></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Total cursos</h5>
                        <p class="card-text"><?php echo $cantidadCursos ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-7 border rounded-5">
                <h6 class="titulos mt-2 rounded-5">Publicaciones por fecha</h6>
                <div id="curve_chart" style="height: 400px; width:100%"></div>
            </div>
            <div class="col-6 col-md-5 border rounded-5">
                <h6 class="titulos mt-2 rounded-5">Grafico circular</h6>
                <div id="donutchart" style="width: 440px; height: 350px;"></div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-6 col-md-4 border">
                <h6 class="titulos">Ultimas ofertas laborales</h6>
                <table class="table table-striped">
                    <thead></thead>
                    <tbody>
                        <?php if (is_array($topOfertas)) : ?>
                            <?php foreach ($topOfertas as $ofertas) : ?>
                                <tr class="">
                                    <div class="card altura-b mt-3 mb-3">
                                        <span class="small"><?php echo htmlspecialchars($ofertas['nombreEmpresa']); ?></span>
                                        <span class="small"><?php echo htmlspecialchars($ofertas['tipoOferta']); ?></span>
                                        <span class="small"><?php echo htmlspecialchars($ofertas['correocontacto']); ?></span>
                                        <span class="small"><?php echo htmlspecialchars($ofertas['rangosalarial']); ?></span>
                                    </div>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>

                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-8 border">
                <h6 class="titulos">Top 3 Publicaciones</h6>

                <table class="table table-striped">
                    <thead>
                        <th class="ancho-a">Usuario</th>
                        <th class="ancho-b">Comentario</th>
                    </thead>
                    <tbody id="">
                        <?php if (is_array($topPublicaciones)) : ?>
                            <?php foreach ($topPublicaciones as $publicacion) : ?>
                                <tr>
                                    <td>
                                        <div class="card altura-a">
                                            <span class="small"><?php echo htmlspecialchars($publicacion['rutusuario']); ?></span>
                                            <span class="small">Me gusta: <?php echo htmlspecialchars($publicacion['nlikes']); ?></span>
                                            <span class="small">Reportes: <?php echo htmlspecialchars($publicacion['nreportes']); ?></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="card altura-a ">
                                            <p class="small"><?php echo htmlspecialchars($publicacion['publicacion']); ?></p>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="2">No se encontrarón datos.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        var datosPublicaciones = <?php echo json_encode($publicaciones); ?>;
        var datosReportes = <?php echo json_encode($reportes); ?>;
        var datosComentarios = <?php echo json_encode($comentarios); ?>;
        var datosUsuarios = <?php echo json_encode($usuarios); ?>;
        var datosLikes = <?php echo json_encode($likes); ?>;
        google.charts.setOnLoadCallback(function() {
            drawPieChart(datosReportes, datosComentarios, datosUsuarios, datosLikes);
        });
    </script>
    <script src="../../../../Public/js/graficos.js"></script>

    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawPieChart);

        function drawPieChart() {
            var data = google.visualization.arrayToDataTable([
                ['Tabla', 'Cantidad datos'],
                ['Reportadas', <?php echo $reportes; ?>],
                ['Usuarios', <?php echo $usuarios; ?>],
                ['Total likes', <?php echo $likes; ?>],
                ['Postulaciones', <?php echo $cantidadPostulaciones; ?>],
                ['Carreras', <?php echo $cantidadCarreras; ?>]
            ]);

            var options = {
                title: 'Otros datos',
                pieHole: 0.3,
            };

            var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
            chart.draw(data, options);
        }
    </script>

</body>

</html>