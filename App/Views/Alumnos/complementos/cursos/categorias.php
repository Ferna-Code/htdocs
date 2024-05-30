<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['action'] === 'getData') {
    $controller = new categoriascontroller();
    $controller->getData();
    exit;
}
?>

<link rel="stylesheet" href="../../../../Public/css/categorias.css">
<section id="team">
    <div>
        <br><br><br>
        <div class="row">
        <div class="mb-3" id="categoriasContainer"></div>

        </div>
</section>
