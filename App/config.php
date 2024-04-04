<?php

//CONECCION BBDD    
define('db_host', 'localhost');
define('db_name', 'redleones');
define('BASE_URL', 'http://localhost/');
define('db_user', 'root');
define('de_pass', '12345678');

//Vistas
define('HOME_URL', BASE_URL . '/');
define('ADMIN_URL', BASE_URL . 'admin/');
define('RECEPCION_DIAGNOSTICO_URL', BASE_URL . 'recepcion/');
define('TINCION_URL', BASE_URL . 'tincion/');
define('DIAGNOSTICO_URL', BASE_URL . 'diagnostico/');
define('ACCESO_CLIENTE_URL', BASE_URL . 'accesoCliente/');
define('SERVICIOS_URL', BASE_URL . 'servicios');
define('PREGUNTAS_FRECUENTES_URL', BASE_URL . 'preguntas');


// Configuraci贸n de rutas
define('CONTROLLERS_PATH', __DIR__ . '/Controllers/');
define('MODELS_PATH', __DIR__ . '/Models/');
define('VIEWS_PATH', __DIR__ . '/Views/');
define('APP_PATH', __DIR__ . '/');
define('PUBLIC_PATH', '/');