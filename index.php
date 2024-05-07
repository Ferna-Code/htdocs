<?php
error_reporting(E_ALL  ^  E_NOTICE  ^  E_WARNING ^E_DEPRECATED );
require_once 'App/config.php';
require_once 'App/Router/router.php';
require_once 'App/Database.php';

$router = new Router();
$router->route();