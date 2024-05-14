<?php
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
<link rel="stylesheet" href="../../../../Public/css/muroAlumnos.css">
<div class="container mt-5">
<form method="POST"  class="form" style="padding: 30px 30px 0 30px;">
        <div class="post-container">
            <textarea name="comentario" placeholder="¿Qué estás pensando?" Required></textarea>
            <input type="hidden" name="sw" value="publicar">
            <button name="Publicar" value="Publicar">Publicar</button>
            </form>
        </div>
    </div>