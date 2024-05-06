<?php
//recuperar archivo
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
        //usamos la libreria phpspreadsheet para leer el archivo excel
        $documento = IOFactory::load($archivoExcel);
    
        //seleccionamos la hoja a leer
        $hojaExcel = $documento->getActiveSheet();
        //obtenemos la cantidad de filas de la hojaExcel
        $filasExcel = $hojaExcel->getHighestDataRow();
    
        $datosAgregados = 0;
        $palabrasProhibidas = ['system', 'mysql_query', '$_SERVER', '$_COOKIE', 'passthru', 'eval'];
    
        for ($fila = 2; $fila <= $filasExcel; $fila++) {
            $contieneProhibidas = false;
            $contenidoCeldas = [];
            //obtenemos el contenido de las celdas
            foreach ($hojaExcel->getRowIterator($fila) as $row) {
                foreach ($row->getCellIterator() as $cell) {
                    $contenidoCeldas[] = $cell->getValue();
                }
            }
            foreach ($contenidoCeldas as $contenido) {
                foreach ($palabrasProhibidas as $palabra) {
                    if (stripos($contenido, $palabra) !== false) {
                        $contieneProhibidas = true;
                        return; //salimos de ambos bucles si se encuentra una palabra prohibida
                    }
                }
            }
    
            if (!$contieneProhibidas) {
                // Insertar datos en la base de datos
                $this->insertarDatos(...$contenidoCeldas);//metodo abreviado para insertar los datos desde el arreglo
                $datosAgregados++;
            }
        }
    
        if ($datosAgregados > 0) {
            echo "<script>alert('Se han agregado $datosAgregados usuarios a la base de datos')</script>";
        } else {
            echo "<script>alert('No se han agregado ningun dato')</script>";
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

            //  if ($ejecutar) {
            //     header("Location: " . VIEWS_PATH ."Supervivor/complementos/confirmacion.php");
            //     exit();
            //  }
        } else {
            echo "<script>alert('El rut $rut_ ingresado ya se encuentra en la base de datos')</script>";
        }
    }
}
