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

    private function handlePostRequests() //creamos la tabla, validamos user o logout
    {
        if (isset($_POST['op'])) {
            switch ($_POST['op']) {
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
        session_unset();
        session_destroy();  
        header("Location: /");
        exit();
    }

    private function handleAuthentication() //verificamos existencia y nivel de usuario
    {
        //Obtenemos los valores del formulario si estan presentes y prevenir los ataques XSS
        $rut = htmlspecialchars($_POST['rut'] ?? '');
        $clave = htmlspecialchars($_POST['clave'] ?? '');

        $accessModel = new Access_model();
        $isUserValid = $accessModel->validateUser($rut, $clave);

        if ($isUserValid) {
            $_SESSION['nivelUsuario'] = $accessModel->getNivelUsuario();
            $this->checklevelPage($_SESSION['nivelUsuario']);
        } else {
            echo "<script>alert('Usuario o contraseña incorrectos');</script>";
        }
    }

    private function checklevelPage($userLevel) //segun nivel se abre la sesion correspondiente
    {

        switch ($userLevel) {
            case 1:
                $_SESSION['pagina_local'] = 'Administrador';
                break;
            case 2:
                $_SESSION['pagina_local'] = 'Supervisor';
                break;
            case 3:
                $_SESSION['pagina_local'] = 'alumno';
                break;
        }

        echo "<script language='javascript'>window.location='" . $_SESSION['pagina_local'] . "'</script>;";
        exit();
    }
}
