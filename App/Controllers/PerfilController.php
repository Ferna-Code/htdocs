<?php

session_start(); // Asegúrate de que la sesión esté iniciada
$rut = $_SESSION['rut'];
class PerfilController{
    private $db;
    private $usuarioModel;

    public function __construct() {
        $this->db = new Database();
        $this->usuarioModel = new usuarioModel($this->db);
    }
    
    public function index(){
        include VIEWS_PATH . 'Perfil/index.php';
    }

    public function guardarDatosAlumno()
    {
        $targetDir = "uploads/";
        $rut = $_SESSION['rut'];
        if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
            $imageName = basename($_FILES["imagen"]["name"]);
            $targetFilePath = $targetDir . $imageName;
            $imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

            // Validar el tipo de archivo
            $allowedTypes = array("jpg", "jpeg", "png", "gif");
            if (in_array($imageFileType, $allowedTypes)) {
                // Mover el archivo subido al directorio objetivo
                if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $targetFilePath)) {
                    echo "La imagen " . htmlspecialchars($imageName) . " ha sido subida exitosamente.";

                    // Llamar al modelo para actualizar la ruta de la imagen en la base de datos
                    if ($this->usuarioModel->subirImagenUsuario($targetFilePath, $rut)) {
                        echo "La ruta de la imagen ha sido actualizada en la base de datos.";
                    } else {
                        echo "Hubo un error al actualizar la ruta de la imagen en la base de datos.";
                    }
                } else {
                    echo "Hubo un error al subir el archivo.";
                }
            } else {
                echo "Solo se permiten archivos JPG, JPEG, PNG y GIF.";
            }
        } else {
            echo "No se subió ningún archivo o hubo un error en la subida.";
        }
    }

    public function verUsuario($rut){
      $datosUsuario = $this->usuarioModel->verUsuariosRut($rut);
    }

    public function obtenerImagenUsuario($rut) {
        return $this->usuarioModel->obtenerRutaImagen($rut);
    }
}

