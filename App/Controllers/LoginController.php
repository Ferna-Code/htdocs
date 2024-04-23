<?php
session_start();
require_once __DIR__ . '/../Models/access_model.php';

class LoginController
{

    public function index()
    {
        $_SESSION['pagina_local'] = '/';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->handlePostRequests();
        }

        $accessModel = new Access_model();
        $tableName = "usuario";
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
        session_destroy();
        echo "<script language='javascript'>window.location='/'</script>;";
        exit();
    }

    private function createTable()
    {
        $accessModel = new Access_model();
        $accessModel->createTable();
    }

    
    private function handleAuthentication()//verificamos existencia y nivel de usuario
    {
        $rut = htmlspecialchars($_POST['rut'] ?? '');
        $nombre = htmlspecialchars($_POST['nombre'] ?? '');

        $accessModel = new Access_model();
        $isUserValid = $accessModel->validateUser($nombre, $rut);

        if ($isUserValid) {
            $_SESSION['nivelUsuario'] = $accessModel->getNivelUsuario();
            //$_SESSION['pagina_local'] = 'Administrador';
            $this->checklevelPage($_SESSION['nivelUsuario']);
        } else {
            echo "<script>alert('Usuario o contraseña incorrectos');</script>";
        }
    }

    private function checklevelPage($userLevel)//segun nivel se abre la sesion correspondiente
    {

        if($userLevel == 1 || $userLevel == 2 || $userLevel == 3){
            $_SESSION['pagina_local'] = 'Home';
        }
        // switch ($userLevel) {
        //     case 1:
        //         $_SESSION['pagina_local'] = 'Administrador';
        //         break;
        //     case 2:
        //         $_SESSION['pagina_local'] = 'Perfil';
        //         break;
        //     case 3:
        //         $_SESSION['pagina_local'] = 'Home';
        //         break;
        // }

        echo"<script language='javascript'>window.location='".$_SESSION['pagina_local']."'</script>;";
        exit();
    }

    
}