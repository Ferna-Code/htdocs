<?php
require("./App/Models/conexion.php");
require("./App/Models/importarDatos.php");
$conec = new conexion();
$conexion = $conec->conec();

$archivoContenedor = "";

$importador = new ImportarDatos($conexion);
if (isset($_POST['send'])) {
    if ($_FILES['excel']['size'] > 0) {
        //validamos que sea un excel
        if ($_FILES['excel']['type'] === 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') {
            $archivoContenedor = $_FILES['excel']['tmp_name'];
            $importador->importarDesdeExcel($archivoContenedor);
        } else {
            echo "<script>alert('Error el archivo no es un Excel')</script>";
        }
    } else {
        echo "<script>alert('No se a seleccionado ningun archivo')</script>";
    }
}

if (isset($_POST["crearRegistro"])) {
    $nombre = $_POST['nombre'];
    $rut = $_POST['rut'];
    $fecha = $_POST['fechaNacimiento'];
    $perfil = $_POST['perfil'];
    $correo = $_POST['correo'];
    $carrera = $_POST['carrera'];
    $semestre = $_POST['avance'];
    $cargo = $_POST['cargo'];
    if ($nombre != NULL || $rut != NULL || $fecha != NULL || $perfil != NULL || $correo != NULL || $carrera != NULL || $semestre != NULL || $cargo != NULL) {
        $importador->insertarDatos($rut, $nombre, $fecha, $perfil, $correo, $carrera, $semestre, $cargo);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../Public/css/formcursos.css">
    <link rel="stylesheet" href="../../../../Public/css/ofertas.css">
    <link rel="stylesheet" href="../../../../Public/css/registrarUsuario.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Ingresar usuario</title>
</head>

<body class="cuerpo">
    <div class="contenedor-principal centrarDiv">
        <div class="banner">
            <img src="../../../../Public/img/bannerempleos.png" alt="">
        </div>
        <h1>Ingresar usuarios </h1>
        <div class="">

            <form action="" name="insertarExcel" method="POST" enctype="multipart/form-data">
                <div class="formulario-cursos">
                    <div class="columna contenedor-seccion">
                        <label for="" class="form-label">Selecciona un archivo Excel</label>
                        <input type="file" name="excel" id="excel" class="form-control">
                        <button class="btn-oferta mt-3" name="send">Importar datos</button>
                    </div>
                </div>
            </form>


            <form method="POST" name="insertarDatos" class="form">
                <div class="formulario-cursos">

                    <div class="columna contenedor-seccion">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" required>

                        <label for="rut">RUT Usuario: </label>
                        <input type="text" id="rut" name="rut" required>

                        <label for="fechaNacimiento">Fecha de nacimiento:</label>
                        <input type="date" class="form-control" name="fechaNacimiento" required>

                        <label for="perfil">Perfil:</label>
                        <select name="perfil" id="perfil" required>
                            <option value="1">Administrador</option>
                            <option value="2">Supervisor</option>
                            <option value="3">Egresado</option>
                        </select>

                        <label for="correo">Correo electronico:</label>
                        <input type="text" class="form-control" name="correo" id="correo" required>

                        <label for="carrera">Carrera:</label>
                        <select name="carrera" id="carrera" required>
                            <option value="1">Técnico en Farmacia</option>
                            <option value="2">Técnico en prevención de riesgos</option>
                            <option value="3">Técnico en negocios y gestión comercial</option>
                        </select>

                        <label for="avance">Semestre:</label>
                        <select name="avance" id="avance" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="1">4</option>
                        </select>

                        <label for="cargo">Cargo:</label>
                        <input type="text" class="form-control" name="cargo" required>
                    </div>
                </div>
                <button type="submit" class="btn-oferta" name="crearRegistro">Agregar usuario</button>
                <a href="/Supervisor" class="btn-oferta">Volver</a>
            </form>
        </div>
    </div>
</body>

</html>

<!--$_SESSION['pagina_local'] = 'Supervisor'-->