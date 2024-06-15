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
        <form method="POST" class="form" style="padding: 30px 30px 0 30px;">
            <div class="post-container">
                <textarea name="comentario" placeholder="¿Qué estás pensando?" Required></textarea>
                <input type="hidden" name="sw" value="publicar">
                <button name="Publicar" value="Publicar">Publicar</button>
            </div>
        </form>

        <hr>

        <?php
        if (is_array($publicaciones)) {
            foreach ($publicaciones as $p) {
                ?>
                <div class="tweet-card" data-publicacion-id="<?php echo $p['id']; ?>"
                    data-rutusuario="<?php echo $p['rutusuario']; ?>">
                    <div class="imagen-container">
                        <img class="img" src="<?php
                        $admin = new usuarioDaoImpl();
                        $imagenUsuario = $admin->obtenerImagenUsuario($p['rutusuario']);
                        echo $imagenUsuario != "" ? $imagenUsuario : "/uploads/usuarioSinFoto.jpg";
                        ?>" alt="">
                    </div>

                    <div class="tweet-content">
                        <div class="tweet-text">
                            <p class="h1">
                                <?php
                                $nombreUsuario = $controladorUsuarios->buscarUsuario($p['rutusuario']);
                                foreach ($nombreUsuario as $usuario) {
                                    echo $usuario['nombre'];
                                }
                                ?>
                            </p>
                            <p class="p"><?php echo $p['publicacion']; ?></p>
                        </div>
                    </div>
                    <div class="tweet-actions">
                        <i><?php echo $p['fechaCreacion']; ?></i>
                        <div class="like-container">
                            <span class="likes-count"><?php echo $p['nlikes']; ?></span>
                            <i class="far fa-thumbs-up like-action" data-id="<?php echo $p['id']; ?>"></i>
                        </div>
                        <div class="like-container">
                            <span class="reports-count"><?php echo $p['nreportes']; ?></span>
                            <i class="fa fa-flag report-action" data-id="<?php echo $p['id']; ?>"></i>
                        </div>
                        <i class="far fa-comment comment-action" data-id="<?php echo $p['id']; ?>"></i>
                        <i class="fa fa-trash delete-action" data-id="<?php echo $p['id']; ?>" aria-hidden="true"></i>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "No se encontraron publicaciones.";
        }
        ?>

        <div id="commentsModalp" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <div id="modal-comments-containerp">
                </div>
                <form id="commentFormp">
                    <input type="hidden" id="publicacionIdInputp">
                    <textarea id="newCommentp" placeholder="Escribe tu comentario..." required></textarea>
                    <button type="submit">Agregar comentario</button>
                </form>
            </div>
        </div>



    </div>

    <?php include_once 'body-page/parteDerecha.php'; ?>


    <div class="sidebar1">
        <h4 class="novedad"><i class="fa fa-newspaper-o"></i><strong> Novedades</strong></h4>
        <hr>
        <div class="cardm">
            <div class="cardm-details">
                <p class="text-title">TITULO 1.</p>
                <p class="text-body"></p>
            </div>
            <button class="cardm-button" onclick="controlVisi6()">Ver Todos</button>
        </div>
        <div class="cardm">
            <div class="cardm-details">
                <p class="text-title">TIULO 2.</p>
                <p class="text-body"></p>
            </div>
            <button class="cardm-button" onclick="controlVisi6()">Ver Todos</button>
        </div>
        <div class="cardm">
            <div class="cardm-details">
                <p class="text-title">TITULO 3.</p>
                <p class="text-body"></p>
            </div>
            <button class="cardm-button" onclick="controlVisi6()">Ver Todos</button>
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
        window.history.replaceState(null, null, window.location.pathname);
    }, 0)
</script>