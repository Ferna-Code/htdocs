<?php
require_once 'App/Controllers/accessController.php';
$perfilesPermitidos = 3;
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
verificarAcceso($perfilesPermitidos);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RedLeones</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link>
    <link rel="stylesheet" href="../../../../Public/css/sb-admin-2.css"><!--CSS DE LA PAGINA-->
    <link rel="stylesheet" href="../../../../Public/css/panelalumno.css">
    <link rel="stylesheet" href="../../../../Public/css/perfilalumno.css">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include_once 'complementos/body-page/parteSuperior.php'; ?>

        <div class="contenedor-body" id="modulo1">
            <?php require_once "complementos/muroprincipal.php"; ?>

        </div>
        <div class="contenedor-body" id="modulo2" style="display:none">
            <?php require_once "complementos/perfil.php"; ?>
        </div>
        <div class="contenedor-body" id="modulo3" style="display:none">
            <?php require_once "complementos/cursos/categorias.php"; ?>
        </div>
        <div class="contenedor-body" id="modulo6" style="display:none">
            <?php require_once "complementos/cursos/negocios.php"; ?>
        </div>
        <div class="contenedor-body" id="modulo7" style="display:none">
            <?php include 'complementos/cursos/categorias.php' ?>
        </div>
        <div class="contenedor-body" id="modulo8" style="display:none">
            <?php include 'complementos/ofertas/ofertas.php' ?>
        </div>
        <div class="contenedor-body" id="modulo9" style="display:none">
            <?php include 'complementos/ofertas/veroferta.php' ?>
        </div>
        <div class="contenedor-body" id="modulo10" style="display:none">
            <?php include 'complementos/muropersonal.php' ?>
        </div>

    </div>

    <?php include_once 'complementos/body-page/parteInferior.php'; ?>

    <!-- Bootstrap core JavaScript-->
    <script src="../../../../public/vendor/jquery/jquery.min.js"></script>
    <script src="../../../../public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../../../public/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../../../public/js/sb-admin-2.min.js"></script>
    <script src="../../../../public/js/sb-admin-2.js"></script>

    <!-- Page level plugins -->
    <script src="../../../../public/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../../../public/js/demo/chart-area-demo.js"></script>
    <script src="../../../../public/js/demo/chart-pie-demo.js"></script>
    <script src="../../../../Public/js/alumnos.js"></script>
    <script src="../../../../public/js/perfilalumno.js"></script>
    <script src="../../../../public/js/perfil.js"></script>
    <script src="../../../../Public/js/cursos.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./../../../Public/js/perfil.js"></script>
    <script src="./../../../Public/js/curso.js"></script>
    <script src="./../../../Public/js/categoria.js"></script>
    <script src="./../../../Public/js/ofertas.js"></script>
</body>

</html>