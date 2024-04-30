<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../Public/css/panelAdministrador.css">
    <!--BOOSTRAPS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="../../../../Public/css/sb-admin-2.css"><!--CSS DE LA PAGINA-->
    <link rel="stylesheet" href="../../../../Public/css/global.css">

    <!-- Estilo card -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Panel Administrador</title>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include_once 'complementosAdmin/body-page/parteSuperior.php'; ?>

        
        <div class="contenedor-body" id="modulo1">
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
            <?php include 'complementosAdmin/panelesAdmin/cv_abreviado.php' ?>
        </div>
            
    </div>


    <script src="../../../../public/js/supervisor.js"></script>
    <script src="../../../../public/js/nav.js"></script>
</body>

</html>