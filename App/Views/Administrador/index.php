<?php
// Asegúrate de que la sesión se inicie antes de cualquier otra cosa
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Controla el caché del navegador
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');

// Verifica si el usuario está logeado
if (!isset($_SESSION['idperfil'])) {
    header('Location: http://localhost:8080/');
    exit();
}

require_once 'App/Controllers/accessController.php';
$perfilesPermitidos = 1;
verificarAcceso($perfilesPermitidos);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--BOOSTRAPS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Estilo card -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="../../../../Public/css/panelAdministrador.css">
    <link rel="stylesheet" href="../../../../Public/css/sb-admin-2.css"><!--CSS DE LA PAGINA-->
    <link rel="stylesheet" href="../../../../Public/css/global.css">




    <title>Panel Administrador</title>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include_once 'complementosAdmin/body-page/parteSuperior.php'; ?>


        <div class="contenedor-body" id="modulo1" style="display:none">
            <?php include 'complementosAdmin/panelesAdmin/carreras.php' ?>
        </div>

        <div class="contenedor-body" id="modulo2" style="display:none">
            <?php include 'complementosAdmin/panelesAdmin/categorias.php' ?>
        </div>

        <div class="contenedor-body" id="modulo3" style="display:none">
            <?php include 'complementosAdmin/panelesAdmin/cursos.php' ?>
        </div>

        <div class="contenedor-body" id="modulo4" style="display:none">
            <?php include 'complementosAdmin/panelesAdmin/diccionario.php' ?>
        </div>

        <div class="contenedor-body" id="modulo5" style="display:none">
            <?php include 'complementosAdmin/panelesAdmin/perfiles.php' ?>
        </div>

        <div class="contenedor-body" id="modulo6" style="display:none">
            <?php include 'complementosAdmin/panelesAdmin/publicaciones.php' ?>

        </div>

        <div class="contenedor-body" id="modulo7" style="display:none">
            <?php include 'complementosAdmin/panelesAdmin/reportes.php' ?>
        </div>

        <div class="contenedor-body" id="modulo8" style="display:none">
            <?php include 'complementosAdmin/panelesAdmin/usuarios.php' ?>
        </div>

        <div class="contenedor-body" id="modulo9" style="display:none">
            <?php include 'complementosAdmin/panelesAdmin/archivos.php' ?>
        </div>

        <div class="contenedor-body" id="modulo10" style='display:none'>
            <?php include 'complementosAdmin/panelesAdmin/comentarios.php' ?>
        </div>
        <div class="contenedor-body" id="modulo11" style='display:none'>
            <?php include 'complementosAdmin/panelesAdmin/ofertas.php' ?>
        </div>

        <div class="contenedor-body" id="modulo12" style='display:none'>
            <?php include 'complementosAdmin/panelesAdmin/Postulaciones.php' ?>
        </div>


        <div class="contenedor-body" id="modulo13" style='display:none'>
            <?php include 'complementosAdmin/panelesAdmin/experienciaAcademica.php' ?>
        </div>

        <div class="contenedor-body" id="modulo14" style='display:none'>
            <?php include 'complementosAdmin/panelesAdmin/experienciaLaboral.php' ?>
        </div>

        <div class="contenedor-body" id="modulo15">
            <?php include 'complementosAdmin/panelesAdmin/perfilAdministrador.php' ?>
        </div>

        <div class="contenedor-body" id="modulo17" style="display:none">
            <?php include 'App/Views/Supervisor/complementos/formularios/ingresarCurso.php' ?>
        </div>


    </div>

    <?php include_once 'complementosAdmin/body-page/parteInferior.php'; ?>

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
    <script src="../../../../Public/js/administrador.js"></script>
    <script src="../../../../public/js/perfil.js"></script>


    <!-- JS card -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- sweetalert2 -->
    <script src="../../../../public/js/sweetalert2.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!--Modal-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>


</body>

</html>