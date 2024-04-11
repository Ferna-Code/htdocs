<head>
    <link rel="stylesheet" href="../../../../Public/css/nav.css">
</head>


<?php
session_start(); ?>

<div class="nav-contenedor">
    <div class="cont-img">
        <img src="../../../../Public/img/Logo.png" alt="">
    </div>
    <ul>

        <?php

        if (isset($_SESSION['nivelUsuario'])) {
            ?>
            <div class="item" id="item">
                <li class="nav-item">
                    <a class="enlace-nav" href="<?php echo "/" . $_SESSION['pagina_local'] ?>">Muro
                    </a>
                    <div id="line"></div>
                </li>

            </div>
            <?php
        }
        if ($_SESSION['nivelUsuario'] == 1):
            ?>
            <div class="item">
                <li class="nav-item"><a class="enlace-nav" href="<?php echo SERVICIOS_URL; ?>">Panel administrador</a></li>
            </div>
        <?php elseif ($_SESSION['nivelUsuario'] == 2): ?>
            
                <li class="nav-item"><a class="enlace-nav " href="<?php echo SERVICIOS_URL; ?>">Panel supervisor</a>
                    
                </li>
           
        <?php elseif ($_SESSION['nivelUsuario'] == 3): ?>
            <div class="item">
                <li class="nav-item"><a class="enlace-nav" href="<?php echo SERVICIOS_URL; ?>">Panel estudiante</a>
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