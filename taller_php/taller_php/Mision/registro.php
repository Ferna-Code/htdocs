 <!--Completar el Código que se requerirá a continuación-->
 <!--Recuperar las variables con los datos ingresados en el formulario. 
  Validar que el rut ingresado no se encuantre en la base de datos.
  Si ya existe un registro vinculado al rut ingresado:
	 Redirigir a crear_personal y entregar mensaje.
  Si no existe:
	 Insertar datos en tabla correspondiente.
	 Redirigir a crear_personal y mostrar mensaje.
Si las contraseñas no existen redirigir a crear_personal y mostrar mensaje. --> 	
<?php
include ('conexion.php');
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$rut = $_POST['rut'];
$cargo = $_POST['cargo'];
$pass = $_POST['contrasena1'];
$pass2 = $_POST['contrasena2'];

$verificar = "SELECT COUNT(*) FROM  personal WHERE rut = ?";
$consulta = mysqli_prepare($conexion, $verificar);
mysqli_stmt_bind_param($consulta, "s", $rut);
mysqli_stmt_execute($consulta);

mysqli_stmt_bind_result($consulta, $count);//obtenemos el recuento
mysqli_stmt_fetch($consulta);//obtenemos la cantidad de registros con el rut proporcionado
mysqli_stmt_close($consulta);
if($count > 0){
    header('Location: crear_personal.php?valida=si');
   
}else{
    if($pass != $pass2){
        header('Location: crear_personal.php?erronea=si');
    }else{
        $insert = "INSERT INTO personal(rut, nombre, apellido, cargo, contraseña)
        VALUES(?, ?, ?, ?, md5(?))";
        $prepareQuery = mysqli_prepare($conexion, $insert);
        mysqli_stmt_bind_param($prepareQuery, "sssss", $rut, $nombre, $apellido, $cargo, $pass);
        mysqli_stmt_execute($prepareQuery);
        header('Location: crear_personal.php?mensajeInsert=si');
    }
}

?>