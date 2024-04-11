<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../Public/css/panelSupervisor.css">
    <!--BOOSTRAPS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="contenedor">
        <div class="container-panel">
            <nav class="nav-ok">
                <div class="btn-sspp">
                    <a class="link-nav" href="#" onclick="controlVisi1()">Reportes</a>
                </div>
                <div class="btn-sspp">
                    <a class="link-nav" href="#" onclick="controlVisi2()">Publicaciones</a>
                </div>
                <div class="btn-sspp">
                    <a class="link-nav" href="#" onclick="controlVisi3()">Carreras</a>
                </div>
                <div class="btn-sspp">
                    <a class="link-nav" href="#" onclick="controlVisi4()">Cursos</a>
                </div>
                <div class="btn-sspp">
                    <a class="link-nav" href="#" onclick="controlVisi5()">Perfiles</a>
                </div>
                <div class="btn-sspp">
                    <a class="link-nav" href="#" onclick="controlVisi6()">Usuarios</a>
                </div>
                <div class="btn-sspp">
                    <a class="link-nav" href="#" onclick="controlVisi7()">Categorias</a>
                </div>
                <div class="btn-sspp">
                    <a class="link-nav" href="#" onclick="controlVisi8()">Diccionario</a>
                </div>
            </nav>
        </div>
        <div class="contenedor-body" id="modulo1">
            <?php include 'complementos/reportes.php' ?>
        </div>

        <div class="contenedor-body" id="modulo2" style="display:none">
            <?php include 'complementos/publicaciones.php' ?>
        </div>

        <div class="contenedor-body" id="modulo3" style="display:none">
            <?php include 'complementos/carreras.php' ?>
        </div>

        <div class="contenedor-body" id="modulo4" style="display:none">
            <?php include 'complementos/cursos.php' ?>
        </div>

        <div class="contenedor-body" id="modulo5" style="display:none">
            <?php include 'complementos/perfiles.php' ?>
        </div>

        <div class="contenedor-body" id="modulo6" style="display:none">
            <?php include 'complementos/usuarios.php' ?>
        </div>

        <div class="contenedor-body" id="modulo7" style="display:none">
            <?php include 'complementos/categorias.php' ?>
        </div>

        <div class="contenedor-body" id="modulo8" style="display:none">
            <?php include 'complementos/diccionario.php' ?>
        </div>
    </div>

    <script src="../../../../public/js/supervisor.js"></script>
    <script src="../../../../public/js/nav.js"></script>
</body>

</html>