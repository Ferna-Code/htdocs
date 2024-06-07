<?php
session_start();
require_once __DIR__ . '/../DAO/Administrador/Impl/AdministradorDaoImpl.php';


class AdministradorController
{
    public function index()
    {
        require_once VIEWS_PATH . 'Layout/nav.php';
        require_once VIEWS_PATH . 'Administrador/index.php';  //carpeta/vista
        require_once VIEWS_PATH . 'Layout/footer.php';
    }

    //------------ CARRERA -----------//

    public function getCarrera()
    {
        $admin = new AdministradorDaoImpl();
        $data = $admin->getCarreras();

        if ($data instanceof mysqli_result) {
            $result = [];
            while ($row = $data->fetch_assoc()) {
                $result[] = $row;
            }
            echo json_encode($result);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización de la tabla']);
        }
    }




    //------------ CATEGORIA -----------//
    public function getCategoria()
    {
        $admin = new AdministradorDaoImpl();
        $data = $admin->getCategorias();

        if ($data instanceof mysqli_result) {
            $result = [];
            while ($row = $data->fetch_assoc()) {
                $result[] = $row;
            }
            echo json_encode($result);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización de la tabla']);
        }
    }



    //------------ CURSO -----------//
    public function getCurso()
    {
        $admin = new AdministradorDaoImpl();
        $data = $admin->getCursos();

        if ($data instanceof mysqli_result) {
            $result = [];
            while ($row = $data->fetch_assoc()) {
                $result[] = $row;
            }
            echo json_encode($result);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización de la tabla']);
        }
    }



    //------------ DICCIONARIO -----------//
    public function getDiccionario()
    {
        $admin = new AdministradorDaoImpl();
        $data = $admin->getDiccionario();

        if ($data instanceof mysqli_result) {
            $result = [];
            while ($row = $data->fetch_assoc()) {
                $result[] = $row;
            }
            echo json_encode($result);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización de la tabla']);
        }
    }


    //------------ PERFIL -----------//
    public function getPerfil()
    {
        $admin = new AdministradorDaoImpl();
        $data = $admin->getPerfiles();

        if ($data instanceof mysqli_result) {
            $result = [];
            while ($row = $data->fetch_assoc()) {
                $result[] = $row;
            }
            echo json_encode($result);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización de la tabla']);
        }
    }


    //------------ PUBLICACION -----------//
    public function getPublicacion()
    {
        $admin = new AdministradorDaoImpl();
        $data = $admin->getPublicaciones();

        if ($data instanceof mysqli_result) {
            $result = [];
            while ($row = $data->fetch_assoc()) {
                $result[] = $row;
            }
            echo json_encode($result);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización de la tabla']);
        }
    }



    //------------ REPORTE -----------//
    public function getReportes()
    {
        $admin = new AdministradorDaoImpl();
        $data = $admin->getReportes();

        if ($data instanceof mysqli_result) {
            $result = [];
            while ($row = $data->fetch_assoc()) {
                $result[] = $row;
            }
            echo json_encode($result);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización de la tabla']);
        }
    }


    //------------ USUARIOS -----------//
    public function getUsuarios()
    {
        $admin = new AdministradorDaoImpl();
        $data = $admin->getUsuarios();

        if ($data instanceof mysqli_result) {
            $result = [];
            while ($row = $data->fetch_assoc()) {
                $result[] = $row;
            }
            echo json_encode($result);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización de la tabla']);
        }
    }


    //------------ CVARCHIVOS -----------//
    public function getArchivos()
    {
        $admin = new AdministradorDaoImpl();
        $data = $admin->getArchivos();

        if ($data instanceof mysqli_result) {
            $result = [];
            while ($row = $data->fetch_assoc()) {
                $result[] = $row;
            }
            echo json_encode($result);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización de la tabla']);
        }
    }


    //------------ COMENTARIOS -----------//
    public function getComentarios()
    {
        $admin = new AdministradorDaoImpl();
        $data = $admin->getComentarios();

        if ($data instanceof mysqli_result) {
            $result = [];
            while ($row = $data->fetch_assoc()) {
                $result[] = $row;
            }
            echo json_encode($result);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización de la tabla']);
        }
    }

    //------------ OFERTAS -----------//
    public function getOfertas()
    {
        $admin = new AdministradorDaoImpl();
        $data = $admin->getOfertas();

        if ($data instanceof mysqli_result) {
            $result = [];
            while ($row = $data->fetch_assoc()) {
                $result[] = $row;
            }
            echo json_encode($result);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización de la tabla']);
        }
    }

    //------------ POSTULACIONES -----------//
    public function getPostulaciones()
    {
        $admin = new AdministradorDaoImpl();
        $data = $admin->getPostulaciones();

        if ($data instanceof mysqli_result) {
            $result = [];
            while ($row = $data->fetch_assoc()) {
                $result[] = $row;
            }
            echo json_encode($result);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización de la tabla']);
        }
    }


    //------------ EXP ACADEMICA -----------//
    public function getExpAcademica()
    {
        $admin = new AdministradorDaoImpl();
        $data = $admin->getExpAcademica();

        if ($data instanceof mysqli_result) {
            $result = [];
            while ($row = $data->fetch_assoc()) {
                $result[] = $row;
            }
            echo json_encode($result);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización de la tabla']);
        }
    }

    //------------ EXP LABORAL -----------//
    public function getExpLaboral()
    {
        $admin = new AdministradorDaoImpl();
        $data = $admin->getExpLaboral();

        if ($data instanceof mysqli_result) {
            $result = [];
            while ($row = $data->fetch_assoc()) {
                $result[] = $row;
            }
            echo json_encode($result);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización de la tabla']);
        }
    }


    //--------------DELETES-------------//

    public function deleteCarreras()
    {
        $admin = new AdministradorDaoImpl();
        $data = json_decode(file_get_contents('php://input'), true);
        $ids = $data['ids'];
        $result = $admin->deleteCarreras($ids);

        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error deleting rows controlercarrera']);
        }
    }

    public function deleteCategorias()
    {
        $admin = new AdministradorDaoImpl();
        $data = json_decode(file_get_contents('php://input'), true);
        $ids = $data['ids'];
        $result = $admin->deleteCategorias($ids);

        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error deleting rows controllerCategoria']);
        }
    }

    public function deleteCursos()
    {
        $admin = new AdministradorDaoImpl();
        $data = json_decode(file_get_contents('php://input'), true);
        $ids = $data['ids'];
        $result = $admin->deleteCursos($ids);

        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error deleting rows controllerCursos']);
        }
    }

    public function deleteDiccionario()
    {
        $admin = new AdministradorDaoImpl();
        $data = json_decode(file_get_contents('php://input'), true);
        $ids = $data['ids'];
        $result = $admin->deleteDiccionario($ids);

        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error deleting rows controllerDiccionario']);
        }
    }

    public function deletePerfiles()
    {
        $admin = new AdministradorDaoImpl();
        $data = json_decode(file_get_contents('php://input'), true);
        $ids = $data['ids'];
        $result = $admin->deletePerfiles($ids);

        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error deleting rows controllerPerfiles']);
        }
    }

    public function deletePublicaciones()
    {
        $admin = new AdministradorDaoImpl();
        $data = json_decode(file_get_contents('php://input'), true);
        $ids = $data['ids'];
        $result = $admin->deletePublicaciones($ids);

        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error deleting rows controllerPublicaciones']);
        }
    }

    public function deleteReportes()
    {
        $admin = new AdministradorDaoImpl();
        $data = json_decode(file_get_contents('php://input'), true);
        $ids = $data['ids'];
        $result = $admin->deleteReportes($ids);

        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error deleting rows controllerReportes']);
        }
    }

    public function deleteUsuarios()
    {
        $admin = new AdministradorDaoImpl();
        $data = json_decode(file_get_contents('php://input'), true);
        $ids = $data['ids'];
        $result = $admin->deleteUsuarios($ids);

        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error deleting rows controllerUsuarios']);
        }
    }

    public function deleteArchivos()
    {
        $admin = new AdministradorDaoImpl();
        $data = json_decode(file_get_contents('php://input'), true);
        $ids = $data['ids'];
        $result = $admin->deleteArchivos($ids);

        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error deleting rows controllerArchivos']);
        }
    }

    public function deleteComentarios()
    {
        $admin = new AdministradorDaoImpl();
        $data = json_decode(file_get_contents('php://input'), true);
        $ids = $data['ids'];
        $result = $admin->deleteComentarios($ids);

        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error deleting rows controllerComentarios']);
        }
    }

    public function deleteOfertas()
    {
        $admin = new AdministradorDaoImpl();
        $data = json_decode(file_get_contents('php://input'), true);
        $ids = $data['ids'];
        $result = $admin->deleteOfertas($ids);

        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error deleting rows controllerOfertas']);
        }
    }

    public function deletePostulaciones()
    {
        $admin = new AdministradorDaoImpl();
        $data = json_decode(file_get_contents('php://input'), true);
        $ids = $data['ids'];
        $result = $admin->deletePostulaciones($ids);

        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error deleting rows controllerPostulaciones']);
        }
    }

    public function deleteExpAcademica()
    {
        $admin = new AdministradorDaoImpl();
        $data = json_decode(file_get_contents('php://input'), true);
        $ids = $data['ids'];
        $result = $admin->deleteExpAcademica($ids);

        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error deleting rows controllerExpAcademica']);
        }
    }

    public function deleteExpLaboral()
    {
        $admin = new AdministradorDaoImpl();
        $data = json_decode(file_get_contents('php://input'), true);
        $ids = $data['ids'];
        $result = $admin->deleteExpLaboral($ids);

        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error deleting rows controllerExpLaboral']);
        }
    }





    //-------------------INSERT-----------------//

    public function insertCategoria()
    { //CATEGORIA

        $json = file_get_contents('php://input'); //escucha el input dentro del PHP
        $data = json_decode($json, true);
        echo "<script>alert('controlador')</script>";
        echo "<script>console.log('controlador')</script>";
        if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
            echo json_encode(['success' => false, 'message' => 'Error: Datos no recibidos' . json_last_error_msg() . '']);
            return;
        }
        $nuevaCategoria = $data['nuevaCategoria'];

        $admin = new AdministradorDaoImpl();
        $adminCategoria_model = new AdminCategoriasModel();
        $adminCategoria_model->setNuevaCategoria($nuevaCategoria);

        $result = $admin->insertCategoria($adminCategoria_model);

        if ($result) {
            echo json_encode(['success' => true, 'message' => 'Actualización exitosa']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la actualización']);
        }
    }
}
