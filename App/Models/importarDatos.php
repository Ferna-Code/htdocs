<?php
require("./App/Models/alert_model.php");
require './vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\IOFactory;

class ImportarDatos
{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function importarDesdeExcel($archivoExcel)
    {
        $documento = IOFactory::load($archivoExcel);
        $hojaExcel = $documento->getActiveSheet();
        $filasExcel = $hojaExcel->getHighestDataRow();
        $datosAgregados = 0;
        $alerta = new  Alert_model();
        $palabrasProhibidas = ['system', 'mysql_query', '$_SERVER', '$_COOKIE', 'passthru', 'eval'];
        
        for ($fila = 2; $fila <= $filasExcel; $fila++) {
            $contieneProhibidas = false;
            $contenidoCeldas = [];
            foreach ($hojaExcel->getRowIterator($fila) as $row) {
                foreach ($row->getCellIterator() as $cell) {
                    $contenidoCeldas[] = $cell->getValue();
                }
            }
            foreach ($contenidoCeldas as $contenido) {
                foreach ($palabrasProhibidas as $palabra) {
                    if (stripos($contenido, $palabra) !== false) {
                        $contieneProhibidas = true;
                        return; 
                    }
                }
            }
            if (!$contieneProhibidas) {
                $this->insertarDatos(...$contenidoCeldas);
                $datosAgregados++;
            }
        }

        if ($datosAgregados > 0) {
            //echo "<script>alert('Se han agregado $datosAgregados usuarios a la base de datos')</script>";
            $mensaje = "Se han agregado $datosAgregados usuarios a la base de datos";
            $alerta->mensajeUsuario($mensaje);
        } else {
           // echo "<script>alert('No se han agregado ningun dato')</script>";
            $mensaje = "No se han agregado ningun dato";
            $alerta->mensajeUsuario($mensaje);
        }
    }


    public function claveAleatoria($length = 10)
    {
        return substr(str_shuffle(str_repeat($x = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
    }

    public function validarRut($rutVerificar)
    {
        // Verificar si el rut ya existe en la base de datos
        $consulta = "SELECT COUNT(*) AS contar FROM usuarios WHERE rut = ?";
        $prepareConsulta = mysqli_prepare($this->conexion, $consulta);
        mysqli_stmt_bind_param($prepareConsulta, "s", $rutVerificar);
        mysqli_stmt_execute($prepareConsulta);
        mysqli_stmt_bind_result($prepareConsulta, $contar);
        mysqli_stmt_fetch($prepareConsulta);
        mysqli_stmt_close($prepareConsulta);
        if ($contar == 0) {
            return true;
        } else {
            return false;
        }
    }

    public function insertarDatos($rut_, $nombre_, $nacimiento_, $idPerfil_, $correo_, $idCarrera_, $semestre_, $cargo_)
    {
        $miClaveOne = $this->claveAleatoria();
        $fechaNacimiento = date('Y-m-d', strtotime($nacimiento_)); // Convertir la fecha de nacimiento al formato correcto
        $validar = $this->validarRut($rut_);

        if ($validar == true) {
            $insert = "INSERT INTO usuarios(rut, nombre, fechaNacimiento, idperfil, correo, idcarrera, avance, cargo, clave, fechaCreacion, activo)
            VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), 1)";
            $prepareQuery = mysqli_prepare($this->conexion, $insert);
            mysqli_stmt_bind_param($prepareQuery, "sssisisss", $rut_, $nombre_, $fechaNacimiento, $idPerfil_, $correo_, $idCarrera_, $semestre_, $cargo_, $miClaveOne);
            $ejecutar = mysqli_stmt_execute($prepareQuery);
            mysqli_stmt_close($prepareQuery);
        } else {
            echo "<script>alert('El rut $rut_ ingresado ya se encuentra en la base de datos')</script>";
        }
    }
}
