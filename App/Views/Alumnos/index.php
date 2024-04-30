<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Egresado - RedLeones</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="../../../../Public/css/sb-admin-2.css"><!--CSS DE LA PAGINA-->
    <link rel="stylesheet" href="../../../../Public/css/panelalumno.css">
    <link rel="stylesheet" href="../../../../Public/css/perfilalumno.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include_once 'complementos/body-page/parteSuperior.php'; ?>
        <div class="contenedor-body" id="modulo1">
            <h1>Home Principal</h1>
        </div>
        <div class="contenedor-body" id="modulo2" style="display:none">
            <?php require_once "complementos/perfil.php"; ?>
        </div>
        <div class="contenedor-body" id="modulo3" style="display:none">
        <?php require_once "complementos/cursos/categorias.php"; ?>
        </div>
        <div class="contenedor-body" id="modulo4" style="display:none">
        <?php require_once "complementos/cursos/educacionbienestar.php"; ?>
        </div>
        <div class="contenedor-body" id="modulo5" style="display:none">
        <?php require_once "complementos/cursos/informatica.php"; ?>
        </div>
        <div class="contenedor-body" id="modulo6" style="display:none">
        <?php require_once "complementos/cursos/negocios.php"; ?>
        </div>
        <div class="contenedor-body" id="modulo7" style="display:none">
            <?php include 'complementos/cursos/categorias.php' ?>
        </div>
        <div class="contenedor-body" id="modulo8" style="display:none">
        <?php include 'complementos/ofertas/categoriasofi.php' ?>
        </div>
        <div class="contenedor-body" id="modulo9" style="display:none">
        <?php include 'complementos/ofertas/veroferta.php' ?>
        </div>
        <div class="contenedor-body" id="modulo10" style="display:none">
        <?php include 'complementos/correobienvenida.php' ?>
        </div>
        <div class="contenedor-body" id="modulo11" style="display:none">
        <?php include 'complementos/correoPostulacion.php' ?>
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
    <script src="../../../../Public/js/cursos.js"></script>
    </script>

</body>

</html>