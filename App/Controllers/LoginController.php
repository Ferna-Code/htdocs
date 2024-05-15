
<?php
//session_start();
require_once __DIR__ . '/../Models/access_model.php';

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

    private function handlePostRequests() //creamos la tabla, validamos user o logout
    {
        if (isset($_POST['op'])) {
            switch ($_POST['op']) {
                case 'VALIDAR':
                    $this->ValidarSesion();
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
        header("Location: /");
        exit();
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


    private function ValidarSesion()
    {
        session_start();
        $rut = htmlspecialchars($_POST['rut'] ?? '');
        $clave = htmlspecialchars($_POST['clave'] ?? '');
        $accessModel = new Access_model();
        $loginResult = $accessModel->iniciarSesion($rut, $clave);
        if ($loginResult) {
            $idperfil = $loginResult['idperfil'];
            // Almacenar valores en la sesión
            $_SESSION['idperfil'] = $idperfil;
            $_SESSION['rut'] = $rut;
            $this->checklevelPage($idperfil); // Redirigir según nivel de acceso
        } else {
        // Autenticación fallida
        $_SESSION['errorsesionfallida'] = true;
        $_SESSION['error_message'] = 'Usuario no existe o clave inválida';
        }
    }
}
