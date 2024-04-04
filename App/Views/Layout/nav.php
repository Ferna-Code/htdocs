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
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo "/" . $_SESSION['pagina_local'] ?>">Inicio
                    </a>
                </li>
                <?php
            }
            if ($_SESSION['nivelUsuario'] == 1):
                ?>

                <li class="nav-item"><a class="nav-link" href="<?php echo SERVICIOS_URL; ?>">Administrador</a></li>
            <?php elseif ($_SESSION['nivelUsuario'] == 2): ?>

                <li class="nav-item"><a class="nav-link" href="<?php echo SERVICIOS_URL; ?>">Supervisor</a></li>
            <?php elseif ($_SESSION['nivelUsuario'] == 3): ?>

                <li class="nav-item"><a class="nav-link" href="<?php echo SERVICIOS_URL; ?>">Estudiante</a>
                </li>
            <?php endif; ?>
            <li class="nav-item">
                <form method="post" action="/Login">
                    <input type="submit" value="Cerrar sesión">
                    <input type="hidden" name="op" value="CERRAR_SESION">
                </form>
            </li>
        </ul>
    </div>