<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Panel supervisor</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="../../../../Public/css/sb-admin-2.css"><!--CSS DE LA PAGINA-->
    <link rel="stylesheet" href="../../../../Public/css/panelSupervisor.css">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include_once 'complementos/body-page/parteSuperior.php'; ?>

        <div class="contenedor-body" id="modulo1">
            <?php include 'complementos/reportes.php' ?>
        </div>

        <div class="contenedor-body" id="modulo2" style="display:none">
            <?php include 'complementos/publicaciones.php' ?>
        </div>

        <div class="contenedor-body" id="modulo3" style="display:none">
            <?php include 'complementos/carreras.php' ?>
        </div>

        <div class="contenedor-body" id="modulo4" style="display:none">
            <?php include 'complementos/cursos.php' ?>
        </div>

        <div class="contenedor-body" id="modulo5" style="display:none">
            <?php include 'complementos/perfiles.php' ?>
        </div>

        <div class="contenedor-body" id="modulo6" style="display:none">
            <?php include 'complementos/usuarios.php' ?>
        </div>

        <div class="contenedor-body" id="modulo7" style="display:none">
            <?php include 'complementos/categorias.php' ?>
        </div>

        <div class="contenedor-body" id="modulo8" style="display:none">
            <?php include 'complementos/diccionario.php' ?>
        </div>

        <div class="contenedor-body" id="modulo9" style="display:none">
            <h1>Ofertas laborales</h1>
        </div>
    </div>


    <?php include_once 'complementos/body-page/parteInferior.php'; ?>



    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../../../public/vendor/jquery/jquery.min.js"></script>
    <script src="../../../../public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../../../public/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../../../public/js/sb-admin-2.min.js"></script>
    

    <!-- Page level plugins -->
    <script src="../../../../public/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../../../public/js/demo/chart-area-demo.js"></script>
    <script src="../../../../public/js/demo/chart-pie-demo.js"></script>

    <script src="../../../../Public/js/supervisor.js"></script>

</body>

</html>