<?php

require_once 'App/config.php';
require_once 'App/Router/router.php';
require_once 'App/Database.php';

$router = new Router();
$router->route();

?>

<script src="../../../../public/js/sweetalert2.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>