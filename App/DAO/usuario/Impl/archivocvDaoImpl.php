<?php
require_once __DIR__ . '/../archivocvDao.php';
require_once __DIR__ . '/../../../Models/archivocv_model.php';
require_once __DIR__ . '/../../../Models/conexion.php';

class archivocvDaoImpl implements archivocvDao
{

    private $db;

    public function __construct()
    {
        $this->db = new conexion();
    }

    public function getData($rutusuario)
    {
        $sql = "SELECT id, rutusuario, documento, fechaCreacion FROM cvarchivos WHERE rutusuario = ?";
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $rutusuario);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        $documentos = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $documentos[] = $row;
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        return $documentos;
    }

    public function getId($rutusuario)
    {
        $sql = "SELECT id FROM cvarchivos WHERE rutusuario = ?";
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $rutusuario);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_row($result); 
        $id = $row[0];
        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        return $id;
    }

    public function updateDocumento($id, $rutusuario, $documento)
    {
        $sql = "UPDATE cvarchivos SET documento = ? WHERE rutusuario = ? and id = ?";
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);

        mysqli_stmt_bind_param(
            $stmt,
            "ssi",
            $documento,
            $rutusuario,
            $id
        );

        $result = mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        return $result;
    }

    public function insertarDocumento(archivocv $documento)
    {
        $sql = "INSERT INTO cvarchivos (rutusuario, documento, fechaCreacion) VALUES (?, ?, now() )";
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);

        $rutusuario = $documento->getRutusuario();
        $documento = $documento->getDocumento();

        mysqli_stmt_bind_param(
            $stmt,
            "ss",
            $rutusuario,
            $documento
        );

        $result = mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        return $result;
    }



}