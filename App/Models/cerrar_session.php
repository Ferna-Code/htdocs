<?php
        unset($_SESSION['idperfil']);
        unset($_SESSION['rut']);
        unset($_SESSION['errorsesionfallida']);
        session_destroy();
        usleep(5000000); // 1 segundo = 1,000,000 microsegundos
exit();
