<?php

class publicaciones_model
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }


    public function conteoPublicaciones($rutUsuario)
    {
        $fecha_actual = date("Y-m-d");
        $sql = "select count(*) as cantidad from publicaciones where rut = ? and fechaCreacion = '$fecha_actual'";

        $result = $this->db->query($sql);
        if ($result) {
            $row = $result->fetch_assoc();
            return ($row) ? $row['cantidad'] : 0;
        } else {
            die("Error al obtener el conteo de publicaciones: " . $this->db->error);
        }
    }

    public function InsertaPublicacion($rutUsuario,$usuario_Publicacion,$fecha_actual)
    {
        
        $consulta="insert into publicaciones (rut, publicaciones,fechaCreacion) values (?,?,?)";
        if ($stmt = mysqli_prepare($this->db->getConnection(), $consulta)) {
            mysqli_stmt_bind_param($stmt, "sss", $rutUsuario, $usuario_Publicacion, $fecha_actual);
            if (mysqli_stmt_execute($stmt)) {
                 return true;
            } else {
                return false;
            }
        }

    }
}
?>
