<?php
session_start();
require_once("App/Controllers/publicacionesController.php");  

$comentario='';
$sw = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if(!isset($_POST['comentario']))	    {$comentario='';       }else{$comentario=$_POST['comentario'];}
    if(!isset($_POST['sw']))                {$sw='';                }else{$sw=$_POST['sw'];}
}

if ($sw === 'publicar') {
    // Crear una instancia del controlador de publicaciones
    $controlador = new PublicacionesController();
    // Procesar la publicación
    $controlador->procesarPublicacion($comentario);
}

?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" type="image/svg+xml" href="~/favicon.ico" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />

    <title>Muro Principal Red Leones</title>
</head>

<body>
<?php if(isset($_GET['mensaje'])) :  ?>

<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong><?php echo  $_GET['mensaje'] ?></strong> 
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php endif ?>

    <form method="POST"  class="form" style="padding: 100px 300px 0 300px;">
        <h2 style="text-align: center;">Publicación</h2>
        <br>
        <div class="row">
            <div class="col">
                <label for="comentario" style="text-align: center;">Publicación:</label>
                <textarea class="form-control" name="comentario" value="<?php echo htmlspecialchars($comentario); ?>"placeholder="Tus comentarios" Required></textarea><br>
                <input type="hidden" name="sw" value="publicar"><br>
                <input type="submit" class="btn btn-warning w-100 center-block" name="Publicar" value="Publicar">
                          
            </div>
            </div>
    </form>

    <script src="https://kit.fontawesome.com/4652dbea50.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>

</html>