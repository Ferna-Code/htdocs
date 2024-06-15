<?php
require_once __DIR__ . '/../Database.php';

class PublicacionesModel
{
    private $db;
    private $publicacionesModel;
    private $publicaciones;

    public function __construct($db)
    {
        $this->db = $db;
        $this->publicacionesModel = array();
        $this->publicaciones = array();
    }



    public function contarPublicacionesHoy($rutUsuario)
    {
        $fecha_actual = date("Y-m-d");
        $sql = "SELECT COUNT(*) AS cantidad FROM publicaciones WHERE rutusuario = ? AND fechaCreacion = ? and fechaEliminacion is null";
        if ($stmt = mysqli_prepare($this->db->getConnection(), $sql)) {
            mysqli_stmt_bind_param($stmt, "ss", $rutUsuario, $fecha_actual);
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_bind_result($stmt, $cantidad);
                mysqli_stmt_fetch($stmt);
                mysqli_stmt_close($stmt);
                return $cantidad;
            }
        } else {
            die("Error al obtener el conteo de publicaciones: " . $this->db->error);
        }
    }


    public function guardarPublicacion($rutUsuario, $usuario_Publicacion)
{
    // Formato de fecha y hora
    $fecha_actual = date("Y-m-d H:i:s");
    $rut = $rutUsuario;
    
    // Divide la publicación en palabras individuales
    $publicacion = preg_split('/\s+/', $usuario_Publicacion);

    // Obtener palabras del diccionario
    $validateQuery = "SELECT * FROM diccionario";
    $stmt = mysqli_prepare($this->db->getConnection(), $validateQuery);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $palabras = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $palabras[] = $row['palabra'];
    }

    // Comparar cada palabra de la publicación con las palabras del diccionario
    $activate = 1;
    foreach ($publicacion as $word) {
        if (in_array($word, $palabras)) {
            $activate = 0;
            break;
        }
    }
   
    // Concatenar la publicación en una sola cadena de texto
    $publicacion_str = implode(' ', $publicacion);
    if($activate == 1){
         // Insertar la publicación en la base de datos
    $insertResult = $this->insertPublicacion($rut, $publicacion_str, $fecha_actual, $activate);
    return $insertResult;
    }else if($activate == 0){
     
        return false;
    }
   
}

public function insertPublicacion($rut_, $publicacion_, $fecha_actual_, $activate_)
{
    $validateQuery = "INSERT INTO publicaciones (rutusuario, publicacion, fechaCreacion, activate) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($this->db->getConnection(), $validateQuery);
    if (!$stmt) {
        die('Error en la preparación de la consulta: ' . mysqli_error($this->db->getConnection()));
    }
    mysqli_stmt_bind_param($stmt, "sssi", $rut_, $publicacion_, $fecha_actual_, $activate_);
    $result = mysqli_stmt_execute($stmt);
    if (!$result) {
        die('Error en la ejecución de la consulta: ' . mysqli_stmt_error($stmt));
    }
    return $result;
}


public function verPublicaciones()
{
    $publicaciones = array();
    $activated = 1;
    
    // Prepare the SQL statement
    $stmt = mysqli_prepare($this->db->getConnection(), "SELECT * FROM publicaciones WHERE activate = ? AND fechaEliminacion IS NULL ORDER BY id DESC");
    
    if ($stmt === false) {
        die('Error preparing the statement: ' . htmlspecialchars(mysqli_error($this->db->getConnection())));
    }

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "i", $activated);
    
    // Execute the statement
    mysqli_stmt_execute($stmt);
    
    // Get the result set
    $result = mysqli_stmt_get_result($stmt);
    
    // Fetch the results into an array
    while ($fila = mysqli_fetch_assoc($result)) {
        $publicaciones[] = $fila;
    }
    
    // Close the statement
    mysqli_stmt_close($stmt);

    return $publicaciones;
}

    public function verPublicacionesbyID($id)
    {
        $publicaciones = array();

        $consulta = mysqli_query($this->db->getConnection(), "SELECT * FROM publicaciones where id = $id");

        while ($fila = mysqli_fetch_assoc($consulta)) {

            $publicaciones[] = $fila;
        }

        return $publicaciones;
    }

    public function verPublicacionesUsuario($rut)
    {
        $publicaciones = array();
        $query = "SELECT * FROM publicaciones WHERE rutusuario = ? and fechaEliminacion is null order by id desc";
        if ($stmt = mysqli_prepare($this->db->getConnection(), $query)) {
            mysqli_stmt_bind_param($stmt, "s", $rut);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            while ($fila = mysqli_fetch_assoc($result)) {
                $publicaciones[] = $fila;
            }
            mysqli_stmt_close($stmt);
        } else {
            $publicaciones = "NO SE ENCONTRARON PUBLICACIONES" . $rut;
        }
        return $publicaciones;
    }

    
    

}


