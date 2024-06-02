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
                <button type="button" name="Publicar" value="Publicar">Publicar</button>
            </div>
        </form>

        <hr>

        <?php
        if (is_array($publicaciones)) {
            foreach ($publicaciones as $p) {
                ?>
                <div>
                <div class="tweet-card">
                    <!-- Aquí se pueden colocar dinámicamente las imágenes de acuerdo a las publicaciones -->
                    <img class="img" src="<?php
                    $admin = new usuarioDaoImpl();
                    $imagenUsuario = $admin->obtenerImagenUsuario($p['rutusuario']);
                    if ($imagenUsuario != "") {
                        echo $imagenUsuario;
                    } else {
                        echo "/uploads/usuarioSinFoto.jpg";
                    }
                    ?>" alt="">
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
<<<<<<< HEAD
                <div>
                <form method="post" action="">
                <label id="record-<?php  echo $lista['id_pub'];?>">
                <input type="text" class="enviar-btn form-control input-sm" style="width: 800px;" placeholder="Escribe un comentario" name="comentario" id="comentario-<?php  echo $lista['id_pub'];?>">
                <input type="hidden" name="usuario"  >
                <input type="hidden" name="publicacion"  >
                <input type="hidden" name="avatar"  >
                <input type="hidden" name="nombre"  >
                </form>
                </div>
                </div>
            <?php
=======
                <?php
>>>>>>> c2b0245e525f8650d5961bb7cadfd6ae7f2c64d7
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