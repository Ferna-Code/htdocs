<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../Public/css/panelAdministrador.css">
    <title>Administrador</title>
</head>
<body>
    <h1>Pagina administrador</h1>
    <?php
            //if(isset($_GET['action']) && $_GET['action'] == 'admin') {
            // Incluir el controlador del administrador
            //require_once('AdministradorController.php');
            // Crear una instancia del controlador
            //$administradorController = new AdministradorController();
            // Llamar al método index del controlador para mostrar la vista del administrador
            //$administradorController->index();
            // Terminar el script para evitar procesamiento adicional
            //exit();
        //}
    ?>
     <div class="container">
        <div class="container-panel">
            <nav class="nav-ok">
                <div class="btn-sspp">
                    <a class="enlace-nav" href="#" onclick="controlVisi1()">Carreras</a>
                </div>
                <div class="btn-sspp">
                    <a class="enlace-nav" href="#" onclick="controlVisi2()">Publicaciones</a>
                </div>
                <div class="btn-sspp">
                    <a class="enlace-nav" href="#" onclick="controlVisi3()">Carreras</a>
                </div>
                <div class="btn-sspp">
                    <a class="enlace-nav" href="#" onclick="controlVisi4()">Cursos</a>
                </div>
                <div class="btn-sspp">
                    <a class="enlace-nav" href="#" onclick="controlVisi5()">Perfiles</a>
                </div>
                <div class="btn-sspp">
                    <a class="enlace-nav" href="#" onclick="controlVisi6()">Usuarios</a>
                </div>
                <div class="btn-sspp">
                    <a class="enlace-nav" href="#" onclick="controlVisi7()">Categorias</a>
                </div>
                <div class="btn-sspp">
                    <a class="enlace-nav" href="#" onclick="controlVisi8()">Diccionario</a>
                </div>
            </nav>
        </div>
        <div class="container-body" id="modulo1">
            <?php include 'complementosAdmin/Carreras.php' ?>
        </div>

        <div class="container-body" id="modulo2" style="display:none">
            <?php include 'complementosAdmin/publicaciones.php' ?>
        </div>

        <div class="container-body" id="modulo3" style="display:none">
            <?php include 'complementosAdmin/carreras.php' ?>
        </div>

        <div class="container-body" id="modulo4" style="display:none">
            <?php include 'complementosAdmin/cursos.php' ?>
        </div>

        <div class="container-body" id="modulo5" style="display:none">
            <?php include 'complementosAdmin/perfiles.php' ?>
        </div>

        <div class="container-body" id="modulo6" style="display:none">
            <?php include 'complementosAdmin/usuarios.php' ?>
        </div>

        <div class="container-body" id="modulo7" style="display:none">
            <?php include 'complementosAdmin/categorias.php' ?>
        </div>

        <div class="container-body" id="modulo8" style="display:none">
            <?php include 'complementosAdmin/diccionario.php' ?>
        </div>
    </div>

    <script src="../../../../public/js/supervisor.js"></script>
</body>
</html>