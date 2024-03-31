<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./Public/css/estiloLogin.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="contenedor">
        <div class="mitad right">
           <div class="btn-form">
                
           </div>
        </div>
        <div class="mitad left">
            <div class="logo">
                <img src="./Public/img/Logo.png" alt="Logo_los_leones">
                <a href=""></a>
            </div>
            <div class="contForm">
                <h2>Ingrese sus datos:</h2>
                <form method="post" action="">
                    <input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre">
                    <input type="text" name="rut" id="rut" placeholder="Ingrese su rut">
                    <br>
                    <a href="#" class="linkLeft" target="_black">¿ Olvido su contraseña ?</a>
                    <br>
                    <?php
                    if ($showCreateTableButton):
                        ?>
                        <input type="submit" value="Ingresar">
                        <input type="hidden" name="op" value="VALIDAR">
                    <?php else: ?>
                        <input type="submit" value="Ingresar">
                        <input type="hidden" name="op" value="VALIDAR">
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>

</body>

</html>