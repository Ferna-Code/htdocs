<?php
require_once __DIR__ . '/../Database.php';

class PublicacionesModel {
    private $db;
    private $publicacionesModel;
    
    public function __construct($db) {
        $this->db = $db;
        $this->publicacionesModel = array();
    }



    public function contarPublicacionesHoy($rutUsuario) {
        $fecha_actual = date("Y-m-d");
        $sql = "SELECT COUNT(*) AS cantidad FROM publicaciones WHERE rutusuario = ? AND fechaCreacion = ?";
        if ($stmt = mysqli_prepare($this->db->getConnection(), $sql)) {
            mysqli_stmt_bind_param($stmt, "ss", $rutUsuario, $fecha_actual);
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_bind_result($stmt, $cantidad);
                mysqli_stmt_fetch($stmt);
                mysqli_stmt_close($stmt);
                return $cantidad;}
            } else {
                die("Error al obtener el conteo de publicaciones: " . $this->db->error);
            }
        }
    

    public function guardarPublicacion($rutUsuario, $usuario_Publicacion) {
        $fecha_actual = date("Y-m-d");
        $consulta = "INSERT INTO publicaciones (rutusuario, publicacion, fechaCreacion) VALUES (?, ?, ?)";
        if ($stmt = mysqli_prepare($this->db->getConnection(), $consulta)) {
            mysqli_stmt_bind_param($stmt, "sss", $rutUsuario, $usuario_Publicacion, $fecha_actual);
            if (mysqli_stmt_execute($stmt)) {
                return true;
            } else {
                return false;
            }
        } else {
            die("Error al preparar la consulta: " . $this->db->error);
        }
    }

}
?>
