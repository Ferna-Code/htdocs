<head>
    <link rel="stylesheet" href="../../../../Public/css/global.css">
</head>

<body>
    <?php
    session_start(); ?>


    <div class="contenedor">
        <ul>
            <?php

            if (isset($_SESSION['nivelUsuario'])) {
                ?>
                <div class="item">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo "/" . $_SESSION['pagina_local'] ?>">Inicio
                        </a>
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