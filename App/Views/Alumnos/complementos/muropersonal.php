<?php
require_once ("App/Controllers/publicacionesController.php");
require_once ("App/Controllers/usuariosController.php");

$controladorUsuarios = new usuariosController();
$controlador = new PublicacionesController();
$publicaciones = $controlador->mostrarPublicacionesUsuario($_SESSION['rut']);
?>

<link rel="stylesheet" href="../../../../Public/css/muroAlumnos.css">
<link rel="stylesheet" href="../../../../Public/css/cardspublicaciones.css">

<div class="container mt-2">
    <div class="main-content">
<br><br><br>

        <?php
        if (is_array($publicaciones)) {
            foreach ($publicaciones as $p) {
                ?>

                <div class="tweet-card">
                    <!-- Aquí se pueden colocar dinámicamente las imágenes de acuerdo a las publicaciones -->
                    <img class="img" src="../../../../Public/img/profe1.jpeg" alt="">
                    <div class="tweet-content">

                        <div class="tweet-text">
                            <p class="h1">
                                <?php $nombreUsuario = $controladorUsuarios->buscarUsuario($p['rutusuario']);
                                foreach ($nombreUsuario as $usuario) {
                                    echo $usuario['nombre'];
                                }
                                ?>
                            </p>
                            <p class="p"><?php echo $p['publicacion']; ?></p>
                        </div>
                    </div>
                    <div class="tweet-actions">
                        <!-- Aquí puedes colocar los íconos para las acciones -->
                        <i> <?php echo $p['fechaCreacion']; ?></i>
                        <i class="fa fa-flag"></i>
                        <i class="far fa-thumbs-up"></i>
                        <i class="far fa-comment"></i>
                    </div>
                </div>
            <?php
            }
        } else {
            echo "No se encontraron publicaciones.";
        }
        ?>
    </div>

    <?php include_once 'body-page/parteDerecha.php'; ?>


<div class="sidebar1">
    <h4 class="novedad"><i class="fa fa-newspaper-o"></i><strong> Novedades</strong></h4>
    <hr>
    <div class="card">
        <h5>RedLeones</h5>
        <p>!Felicidades por estar Aquí¡</p>
    </div>
    <div class="card">
        <h5>Nuevo Curso</h5>
        <p>INTERNET DE LAS COSAS</p>
    </div>
    <div class="card">
        <h5>Nueva Oferta</h5>
        <p>TÉCNICA O PROFESIONAL PARA SECCIÓN PROGRAMACIÓN Y
                                    CONTROL</p>
    </div>
</div>

</div>


<script src="../../../../public/js/sweetalert2.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    <?php if (isset($_SESSION['publicacionNoCreada']) && !empty($_SESSION['publicacionNoCreada'])): ?>
        publicacionNoCreada("<?php echo $_SESSION['publicacionNoCreada']; ?>"); 
        <?php unset($_SESSION['publicacionNoCreada']); ?>
    <?php endif; ?>

    <?php if (isset($_SESSION['publicacionCreada']) && !empty($_SESSION['publicacionCreada'])): ?>
        publicacionCreada("<?php echo $_SESSION['publicacionCreada']; ?>"); 
        <?php unset($_SESSION['publicacionCreada']); ?>
    <?php endif; ?>

    setTimeout(() => {
        window.history.replaceState(null,null,window.location.pathname);
    }, 0)
</script>