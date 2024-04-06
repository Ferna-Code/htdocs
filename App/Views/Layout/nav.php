<head>
    <link rel="stylesheet" href="../../../../Public/css/global.css">
</head>

<body>
    <?php
    session_start(); ?>

<header class="navbar navbar-light fixed-top" style="background-color: #9CD0FE;">
        <div class="container">
            <a class="navbar-brand" href="">
                <img src="" alt="" width="110" height="35">
            </a>
            <nav class="nav">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link text-blue" href=""><i class="fa-solid fa-house"></i>inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-blue" href=""> <i class="">Opcion</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-blue" href=""> <i class="">Opcion</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-blue" href=""> <i class="">Opcion</i></a>
                    </li>

                    <div class="m-1">
                        <button type="button" class="btn btn-outline-primary btn-sm ">Mi Perfil</button>
                    </div>
                    <div class="m-1">
                        <button type="button" class="btn btn-outline-warning btn-sm">Cerrar sesión</button>
                    </div>

                </ul>
            </nav>
        </div>
    </header>



    <div class="">
        <ul>
            <?php

            if (isset($_SESSION['nivelUsuario'])) {
                ?>
                <div class="item" id="item">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo "/" . $_SESSION['pagina_local'] ?>">Inicio
                        </a>
                        <div id="line"></div>
                    </li>
                   
                </div>
                <?php
            }
            if ($_SESSION['nivelUsuario'] == 1):
                ?>
                <div class="item">
                    <li class="nav-item"><a class="nav-link" href="<?php echo SERVICIOS_URL; ?>">Administrador</a></li>
                </div>
            <?php elseif ($_SESSION['nivelUsuario'] == 2): ?>
                <div class="item">
                    <li class="nav-item"><a class="nav-link" href="<?php echo SERVICIOS_URL; ?>">Supervisor</a></li>
                </div>
            <?php elseif ($_SESSION['nivelUsuario'] == 3): ?>
                <div class="item">
                    <li class="nav-item"><a class="nav-link" href="<?php echo SERVICIOS_URL; ?>">Estudiante</a>
                    </li>
                </div>
            <?php endif; ?>
            <div class="item-btn">
                <li class="nav-item">

                    <form method="post" action="/Login">
                        <input type="submit" value="Cerrar sesión">
                        <input type="hidden" name="op" value="CERRAR_SESION">
                    </form>
                </li>
            </div>
        </ul>
    </div>