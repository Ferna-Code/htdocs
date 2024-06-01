<?php
require_once __DIR__ . '/../expercienciaacademicaDAO.php';
require_once __DIR__ . '/../../../Models/eexpercienciaacademica_model.php';
require_once __DIR__ . '/../../../Models/conexion.php';
require_once __DIR__ . '/../../../Models/usuario_model.php';

class expercienciaacademicaDaoImpl implements expercienciaacademicaDao
{

    private $db;

    public function __construct()
    {
        $this->db = new conexion();
    }

    public function getData(expercienciaacademica_model $experiencia)
    {
        $rutusuario = $experiencia->getRutusuario();
        $sql = "SELECT ID, rutusuario, fechafinalizacion, titulobtenido, cursaactualmente, fechaCreacion, activo, fechaEliminacion FROM expercienciaacademica WHERE rutusuario = ? AND fechaEliminacion IS NULL";
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $rutusuario);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        $exacademica = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $exacademica[] = $row;
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        return $exacademica;
    }

    public function insert(expercienciaacademica_model $experiencia)
    {
        $sql = "INSERT INTO expercienciaacademica (rutusuario, fechafinalizacion, titulobtenido, cursaactualmente, fechaCreacion, activo) VALUES (?, ?, ?, ?, ?, ?)";
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);

        // Asignar valores a variables antes de pasarlas por referencia
        $rutusuario = $experiencia->getRutusuario();
        $fechafinalizacion = $experiencia->getFechafinalizacion();
        $titulobtenido = $experiencia->getTitulobtenido();
        $cursaactualmente = $experiencia->getCursaactualmente();
        $fechaCreacion = $experiencia->getFechaCreacion();
        $activo = $experiencia->getActivo();

        mysqli_stmt_bind_param(
            $stmt,
            "sssssi",
            $rutusuario,
            $fechafinalizacion,
            $titulobtenido,
            $cursaactualmente,
            $fechaCreacion,
            $activo
        );
        $result = mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        return $result;
    }

    public function update(expercienciaacademica_model $experiencia)
    {
        $sql = "UPDATE expercienciaacademica SET rutusuario = ?, fechafinalizacion = ?, titulobtenido = ?, cursaactualmente = ?, fechaCreacion = ?, activo = ? WHERE ID = ?";
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);

        // Asignar valores a variables antes de pasarlas por referencia
        $rutusuario = $experiencia->getRutusuario();
        $fechafinalizacion = $experiencia->getFechafinalizacion();
        $titulobtenido = $experiencia->getTitulobtenido();
        $cursaactualmente = $experiencia->getCursaactualmente();
        $fechaCreacion = $experiencia->getFechaCreacion();
        $activo = $experiencia->getActivo();
        $ID = $experiencia->getID();

        mysqli_stmt_bind_param(
            $stmt,
            "sssssssi",
            $rutusuario,
            $fechafinalizacion,
            $titulobtenido,
            $cursaactualmente,
            $fechaCreacion,
            $activo,
            $fechaEliminacion,
            $ID
        );
        $result = mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        return $result;
    }


    public function updateDelete(expercienciaacademica_model $experiencia)
    {
        $sql = "UPDATE expercienciaacademica SET fechaEliminacion = NOW() WHERE ID = ? and rutUsuario = ?";
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);

        // Asignar valores a variables antes de pasarlas por referencia
        $rutusuario = $experiencia->getRutusuario();
        $ID = $experiencia->getID();

        mysqli_stmt_bind_param($stmt, "is", $ID, $rutusuario);
        $result = mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        return $result;
    }

    public function delete(expercienciaacademica_model $experiencia)
    {
        $sql = "DELETE FROM expercienciaacademica WHERE ID = ? and rutusuario = ?";
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);

        // Asignar valores a variables antes de pasarlas por referencia
        $rutusuario = $experiencia->getRutusuario();
        $ID = $experiencia->getID();

        mysqli_stmt_bind_param($stmt, "is", $ID, $rutusuario);
        $result = mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        return $result;
    }


}


?>