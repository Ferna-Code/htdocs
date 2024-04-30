<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../Public/css/panelAdministrador.css">
    <link rel="stylesheet" href="../../../../Public/css/sb-admin-2.css"><!--CSS DE LA PAGINA-->
    <!--BOOSTRAPS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
    <title>Panel Administrador</title>
</head>

<body>
    <div class="contenedor">
        <div class="container-panel">
            <nav class="nav-ok">
                <div class="btn-sspp">
                    <a class="link-nav" href="#" onclick="controlVisi1()">Carreras</a>
                </div>
                <div class="btn-sspp">
                    <a class="link-nav" href="#" onclick="controlVisi2()">Categorias</a>
                </div>
                <div class="btn-sspp">
                    <a class="link-nav" href="#" onclick="controlVisi3()">Cursos</a>
                </div>
                <div class="btn-sspp">
                    <a class="link-nav" href="#" onclick="controlVisi4()">Diccionario</a>
                </div>
                <div class="btn-sspp">
                    <a class="link-nav" href="#" onclick="controlVisi5()">Perfiles</a>
                </div>
                <div class="btn-sspp">
                    <a class="link-nav" href="#" onclick="controlVisi6()">Publicaciones</a>
                </div>
                <div class="btn-sspp">
                    <a class="link-nav" href="#" onclick="controlVisi7()">Reportes</a>
                </div>
                <div class="btn-sspp">
                    <a class="link-nav" href="#" onclick="controlVisi8()">Usuarios</a>
                </div>
                <div class="btn-sspp">
                    <a class="link-nav" href="#" onclick="controlVisi9()">Archivos</a>
                </div>
                <div class="btn-sspp">
                    <a class="link-nav" href="#" onclick="controlVisi10()">Comentarios</a>
                </div>
                <div class="btn-sspp">
                    <a class="link-nav" href="#" onclick="controlVisi11()">Ofertas</a>
                </div>
                <div class="btn-sspp">
                    <a class="link-nav" href="#" onclick="controlVisi12()">Postulaciones</a>
                </div>
                <div class="btn-sspp">
                    <a class="link-nav" href="#" onclick="controlVisi13()">CV Abreviado</a>
                </div>
            </nav>
        </div>

        
        <div class="contenedor-body" id="modulo1">
            <?php include 'complementosAdmin/carreras.php' ?>
        </div>

        <div class="contenedor-body" id="modulo2" style="display:none">
            <?php include 'complementosAdmin/categorias.php' ?>
        </div>

        <div class="contenedor-body" id="modulo3" style="display:none">
            <?php include 'complementosAdmin/cursos.php' ?>
        </div>

        <div class="contenedor-body" id="modulo4" style="display:none">
            <?php include 'complementosAdmin/diccionario.php' ?>
        </div>

        <div class="contenedor-body" id="modulo5" style="display:none">
            <?php include 'complementosAdmin/perfiles.php' ?>
        </div>

        <div class="contenedor-body" id="modulo6" style="display:none">
            <?php include 'complementosAdmin/publicaciones.php' ?>
        </div>

        <div class="contenedor-body" id="modulo7" style="display:none">
            <?php include 'complementosAdmin/reportes.php' ?>
        </div>

        <div class="contenedor-body" id="modulo8" style="display:none">
            <?php include 'complementosAdmin/usuarios.php' ?>
        </div>

        <div class="contenedor-body" id="modulo9" style="display:none">
            <?php include 'complementosAdmin/archivos.php' ?>
        </div>

        <div class="contenedor-body" id="modulo10" style='display:none'>
            <?php include 'complementosAdmin/comentarios.php' ?>
        </div>
        <div class="contenedor-body" id="modulo11" style='display:none'>
            <?php include 'complementosAdmin/ofertas.php' ?>
        </div>
        
        <div class="contenedor-body" id="modulo12" style='display:none'>
            <?php include 'complementosAdmin/Postulaciones.php' ?>
        </div>

        <div class="contenedor-body" id="modulo13" style='display:none'>
            <?php include 'complementosAdmin/cv_abreviado.php' ?>
        </div>
            
    </div>


    <script src="../../../../public/js/supervisor.js"></script>
    <script src="../../../../public/js/nav.js"></script>
</body>

</html>