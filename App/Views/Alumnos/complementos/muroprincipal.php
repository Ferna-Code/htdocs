<?php
require_once ("App/Controllers/publicacionesController.php");
require_once ("App/Controllers/usuariosController.php");
require_once 'app/DAO/usuario/Impl/usuarioDaoImpl.php';


$comentario = '';
$sw = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['comentario'])) {
        $comentario = '';
    } else {
        $comentario = $_POST['comentario'];
    }
    if (!isset($_POST['sw'])) {
        $sw = '';
    } else {
        $sw = $_POST['sw'];
    }
}

if ($sw === 'publicar') {
    // Crear una instancia del controlador de publicaciones
    $controlador = new PublicacionesController();
    // Procesar la publicación
    $controlador->procesarPublicacion($comentario);
}
$controladorUsuarios = new usuariosController();

$controlador = new PublicacionesController();
$publicaciones = $controlador->mostrarPublicaciones();
?>

<link rel="stylesheet" href="../../../../Public/css/muroAlumnos.css">
<link rel="stylesheet" href="../../../../Public/css/cardspublicaciones.css">

<div class="container mt-2">
    <div class="main-content">
        <form method="POST" class="form" style="padding: 30px 30px 0 30px;">
            <div class="post-container">
                <textarea name="comentario" placeholder="¿Qué estás pensando?" Required></textarea>
                <input type="hidden" name="sw" value="publicar">
                <button type="submit" name="Publicar" value="Publicar">Publicar</button>
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
                            <span class="likes-count" id="likeId"><?php echo $p['nlikes']; ?></span>
                            <i class="far fa-thumbs-up like-action" data-id="<?php echo $p['id']; ?>"></i>
                        </div>
                        <div class="like-container">
                            <span class="reports-count"><?php echo $p['nreportes']; ?></span>
                            <i class="fa fa-flag report-action" data-id="<?php echo $p['id']; ?>"></i>
                        </div>
                        <i class="far fa-comment comment-action" data-id="<?php echo $p['id']; ?>"></i>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "No se encontraron publicaciones.";
        }
        ?>

        <div id="commentsModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <div id="modal-comments-container">
                    <!-- Aquí se mostrarán los comentarios -->
                </div>
                <form id="commentForm">
                    <input type="hidden" id="publicacionIdInput">
                    <textarea id="newComment" placeholder="Escribe tu comentario..." required></textarea>
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
                <p class="text-title">Ultimo Curso.</p>
                <p class="text-body"></p>
            </div>
            <button class="cardm-button" onclick="controlVisi6()">Ver Todos</button>
        </div>
        <div class="cardm">
            <div class="cardm-details">
                <p class="text-title">Ultima Oferta.</p>
                <p class="text-body"></p>
            </div>
            <button class="cardm-button" onclick="controlVisi6()">Ver Todos</button>
        </div>
        <div class="cardm">
            <div class="cardm-details">
                <p class="text-title">Nuevo Anuncio.</p>
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