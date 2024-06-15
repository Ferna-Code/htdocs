<?php
require_once 'C:\Xampp1\htdocs\App\DAO\postulaciones\postulacionesDAO.php';
require_once  'C:\Xampp1\htdocs\App\DAO\usuario\Impl\usuarioDaoImpl.php';
require_once __DIR__ . '/../../../Models/postulaciones_model.php';
require_once __DIR__ . '/../../../Models/conexion.php';
require_once 'C:\Xampp1\htdocs\App\DAO\usuario\Impl\ofertaDaoImpl.php';

class postulacionesDaoImpl implements postulacionesDAO
{

    private $db;

    public function __construct()
    {
        $this->db = new conexion();
    }

    public function getDatabyUser($rutUsuario)
    {}

    public function getAllData()
    {
        $sql = "SELECT * FROM postulaciones WHERE fechaEliminacion is null order by DESC";
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        $postulacion = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $postulacion[] = $row;
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        return $postulacion;
    }    

    public function getData($id)
    {
        $sql = "SELECT * FROM postulaciones WHERE id = ?";
        $conn = $this->db->conec();
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        $postulacion = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $postulacion[] = $row;
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        return $postulacion;
    }    


    public function insertData($rutUsuario,$idOferta){
         $oferta = new ofertaDaoImpl();
         $infoOferta = $oferta->getofertById($idOferta);
         $Egresado = new usuarioDaoImpl();
         $infoAlumno = $Egresado->getUsuario($rutUsuario);

         $rut = $rutUsuario;
         $idCarrera = $infoAlumno['idcarrera'];
         $rutEmpresa = $infoOferta['rutempresa'];
         
         $sql = 'insert into postulaciones (rutusuario,idcarrera,rutempresa,idoferta,fechaCreacion) Values (?,?,?,?,NOW())';
         $conn = $this->db->conec();
         $stmt = mysqli_prepare($conn, $sql);
         mysqli_stmt_bind_param($stmt, "sisi", $rut,$idCarrera,$rutEmpresa,$idOferta);
         $result = mysqli_stmt_execute($stmt);
         
         mysqli_stmt_close($stmt);
         mysqli_close($conn);
         return $result;

    }



}