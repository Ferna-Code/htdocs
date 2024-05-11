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
<style>
.contenedorPublicaciones{
  width: 80%;
  height: 300px;
  background-color: #fbdf93;
  border-radius: 47px 47px 47px 47px;
  -moz-border-radius: 47px 47px 47px 47px;
  -webkit-border-radius: 47px 47px 47px 47px;
  border: 0px solid #000000;
  text-align: center;
  margin-top: 5%;
}
.btn-publicar {
    border: 1px solid white;
    padding: 8px 20px;
    text-decoration: none;
    border-radius: 5px;
    background: orange;
    display: inline-block;
    text-align: center;
    width: 123px;
    color: white;
    font-size: 15px;
}
.tablaPublicaciones{
  width: 80%;
  height: 300px;
  background-color: #fbdf93;
  border-radius: 47px 47px 47px 47px;
  -moz-border-radius: 47px 47px 47px 47px;
  -webkit-border-radius: 47px 47px 47px 47px;
  border: 0px solid #000000;
  text-align: center;
  margin-top: 5%;
}
  </style>


<body>

<?php if(isset($_GET['mensaje'])) :  ?>

<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong><?php echo  $_GET['mensaje'] ?></strong> 
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php endif ?>

<div class="contenedorPublicaciones">
    <form method="POST"  class="form" style="padding: 30px 30px 0 30px;">
        <h4 style="text-align: center;">Publicación</h4>
        <br>
        <div class="row">
            <div class="col">
                <textarea  class="form-control dimensiones" name="comentario" value="<?php echo htmlspecialchars($comentario); ?>"placeholder="Tus comentarios" Required></textarea><br>
                <input type="hidden" name="sw" value="publicar">
                <input type="submit" class="btn btn-publicar w-100 center-block" name="Publicar" value="Publicar"><br>
                          
            </div>
            </div>
    </form>
    </div>
<!--
    <div>
    <section style="margin: 10px;">


<table id="tableUsers" class="tabla table ">
    <style>
        .tabla {
            width: 100%;
        }
    </style>

    <thead>
        <tr>
            <th>Usuario</th>
            <th>Publicación </th>
            <th>Fecha </th>
        </tr>
    </thead>

    <?php
    foreach ($DetallePubliaciones as $fila) {
        ?>
        <tbody>
            <tr>
                <td>
                    <?= $fila['rutusuario'] ?>
                </td>
                <td>
                    <?= $fila['publicacion'] ?>
                </td>
                <td>
                <?= $fila['fechaCreacion'] ?>
                </td>
                </td>
            </tr>
        </tbody>
        <?php
    }
    ?>
</table>
</section>

    </div>
-->
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