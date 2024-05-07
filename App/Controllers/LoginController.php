<?php
session_start();
require_once __DIR__ . '/../Models/access_model.php';
require_once __DIR__ . '/../Models/usuarioModel.php';

class LoginController
{

    public function index()
    {
        $_SESSION['pagina_local'] = '/';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->ValidarSesion();
        }

        $accessModel = new Access_model();
        $tableName = "usuarios";
        $showCreateTableButton = $accessModel->tableExists($tableName);
        require VIEWS_PATH . 'Login/index.php';
    }

    private function handlePostRequests()//creamos la tabla, validamos user o logout
    {
        if (isset ($_POST['op'])) {
            switch ($_POST['op']) {
                case 'CREAR_TABLA':
                    $this->createTable();
                    break;
                case 'VALIDAR':
                    $this->handleAuthentication();
                    break;
                case 'CERRAR_SESION':
                    $this->logout();
                    break;
            }
        }
    }

    private function logout()
    {
        session_start();
        session_destroy();
        header("Location: /");
    }

    private function createTable()
    {
        $accessModel = new Access_model();
        $accessModel->createTable();
    }

    
   // private function handleAuthentication()//verificamos existencia y nivel de usuario
   // {
   //     
   //     //Obtenemos los valores del formulario si estan presentes y prevenir los ataques XSS
   //     $rut = htmlspecialchars($_POST['rut'] ?? '');
   //     $clave = htmlspecialchars($_POST['clave'] ?? '');
//
   //     $accessModel = new Access_model();
   //     $isUserValid = $accessModel->validateUser($rut, $clave);
   //     $_SESSION['nivelUsuario'] = $accessModel->getnivelusuario();
//
//
   //     if ($isUserValid) {
   //         
   //         $_SESSION['nivelUsuario'] = $accessModel->getNivelUsuario();
   //         $this->checklevelPage($_SESSION['nivelUsuario']);
   //         
   //     } else {
   //         echo "<script>alert('Usuario o contraseña incorrectos');</script>";
   //     }
   // }

private function checklevelPage($userLevel)//segun nivel se abre la sesion correspondiente
{

    switch ($userLevel) {
        case 1:
            $_SESSION['pagina_local'] = 'Administrador';
            break;
        case 2:
            $_SESSION['pagina_local'] = 'Supervisor';
            break;
        case 3:
            $_SESSION['pagina_local'] = 'Alumno';
            break;
    }

    echo"<script language='javascript'>window.location='".$_SESSION['pagina_local']."'</script>;";
    exit();
}

    
    private function ValidarSesion() {
        session_start();
        $rut = htmlspecialchars($_POST['rut'] ?? '');
        $clave = htmlspecialchars($_POST['clave'] ?? '');
        $accessModel = new Access_model();
        $loginResult = $accessModel->iniciarSesion($rut, $clave);
        if ($loginResult) {
            $idperfil = $loginResult['idperfil'];
            // Almacenar valores en la sesión
            $_SESSION['idperfil'] = $idperfil;
            $this->checklevelPage($idperfil); // Redirigir según nivel de acceso
        } else {
            // Autenticación fallida
            $_SESSION['error'] = 'Usuario no existe o clave inválida';
            echo 'Usuario no existe o clave inválida ';
            echo " rut: " . $rut . " clave: " . $clave;
            if (isset($_SESSION['idPerfil'])) {
                echo $_SESSION['idPerfil'];
            }
            exit();
        }
    }
    
}