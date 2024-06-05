<?php
session_start();
require_once __DIR__ . '/../DAO/Administrador/Impl/AdministradorDaoImpl.php';


class AdministradorController
{
    public function index()
    {
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/index.php';  //carpeta/vista
        include VIEWS_PATH . 'Layout/footer.php';
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


    /*
    public function deletePublicacion()
    {
        $admin = new AdministradorDaoImpl();
        $ids = json_decode(file_get_contents('php://input'), true)['ids'];

        $success = $admin->deletePublicaciones($ids);

        if ($success) {
            echo json_encode(['success' => true, 'message' => 'Publicaciones eliminadas correctamente.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error al eliminar las publicaciones.']);
        }
    }
    */

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
    /*public function crearCarrera(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/complementosAdmin/creaAdmin/creaCarrera.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }
    public function creaCategoria(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/complementosAdmin/creaAdmin/creaCategoria.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }
    public function creaCursos(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/complementosAdmin/creaAdmin/creaCursos.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }
    public function creaDiccionario(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/complementosAdmin/creaAdmin/creaDiccionario.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }
    public function creaPerfiles(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/complementosAdmin/creaAdmin/creaPerfiles.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }
    public function creaPublicaciones(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/complementosAdmin/creaAdmin/creaPublicaciones.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }
    public function creaReportes(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/complementosAdmin/creaAdmin/creaReportes.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }
    public function creaUsuarios(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/complementosAdmin/creaAdmin/creaUsuarios.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }
    public function creaArchivos(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/creaAdmcomplementosAdmin/creaAdminin/creaArchivos.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }
    public function creaComentarios(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/complementosAdmin/creaAdmin/creaComentarios.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }
    public function creaOfertas(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/creaAdmin/creaOfertas.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }
    public function creaPostulaciones(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/complementosAdmin/creaAdmin/creaPostulaciones.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }
    public function creaCVabreviado(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/complementosAdmin/creaAdmin/creaCVabreviado.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }


    //-------------------------LLAMA A EDITAR---------------------------//
    

    public function editarArchivo(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/complementosAdmin/EditaAdmin/editarArchivo.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }

    public function editarCarrera(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/complementosAdmin/EditaAdmin/editarCarrera.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }

    public function editarCategoria(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/complementosAdmin/EditaAdmin/editarCategoria.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }

    public function editarComentarios(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/complementosAdmin/EditaAdmin/editarComentarios.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }

    public function editarCursos(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/complementosAdmin/EditaAdmin/editarCursos.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }

    public function editarCVabreviado(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/complementosAdmin/EditaAdmin/editarCVabreviado.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }

    public function editarDiccionario(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/complementosAdmin/EditaAdmin/editarDiccionario.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }

    public function editarOfertas(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/complementosAdmin/EditaAdmin/editarOfertas.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }

    public function editarPerfiles(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/complementosAdmin/EditaAdmin/editarPerfiles.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }

    public function editarPostulaciones(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/complementosAdmin/EditaAdmin/editarPostulaciones.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }

    public function editarPublicaciones(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/complementosAdmin/EditaAdmin/editarPublicaciones.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }

    public function editarReportes(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/complementosAdmin/EditaAdmin/editarReportes.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }

    public function editarUsuario(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/complementosAdmin/EditaAdmin/editarUsuario.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }
*/
