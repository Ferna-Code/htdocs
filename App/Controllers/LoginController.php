
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
                 default:
                     break;
             }
         }
     }

     public function logout()
     {
         if (session_status() == PHP_SESSION_NONE) {
             session_start();
         }
         unset($_SESSION['idperfil']);
         unset($_SESSION['rut']);
         unset($_SESSION['errorsesionfallida']);
         session_destroy();
     
         // Controlar el caché del navegador
         header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
         header('Cache-Control: post-check=0, pre-check=0', false);
         header('Pragma: no-cache');
     
         header('Location: http://localhost/');
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
            default:
                break;
        }

        echo "<script language='javascript'>window.location='" . $_SESSION['pagina_local'] . "'</script>;";
        exit();
    }


    private function ValidarSesion()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $rut = isset($_POST['rut']) ? trim(htmlspecialchars($_POST['rut'])) : '';
        $clave = isset($_POST['clave']) ? trim(htmlspecialchars($_POST['clave'])) : '';
        if (empty($rut) || empty($clave)) {
            $_SESSION['errorsesionfallida'] = 'RUT y clave son obligatorios';
            return;
        }
        $accessModel = new Access_model();
        $loginResult = $accessModel->iniciarSesion($rut, $clave);
        if ($loginResult) {
            unset($_SESSION['errorsesionfallida']);
            $idperfil = $loginResult['idperfil'];
            $_SESSION['idperfil'] = $idperfil;
            $_SESSION['rut'] = $rut;
            $this->checklevelPage($idperfil); 
        } else {
            $_SESSION['errorsesionfallida'] = 'Usuario no existe o clave inválida';
        }
    }
    
}
