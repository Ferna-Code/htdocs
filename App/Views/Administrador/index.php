<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
</head>
<body>
    <h1>Pagina administrador</h1>
    <?php
        if(isset($_GET['action']) && $_GET['action'] == 'admin') {
            // Incluir el controlador del administrador
            require_once('AdministradorController.php');
            // Crear una instancia del controlador
            $administradorController = new AdministradorController();
            // Llamar al método index del controlador para mostrar la vista del administrador
            $administradorController->index();
            // Terminar el script para evitar procesamiento adicional
            exit();
        }
    ?>
</body>
</html>