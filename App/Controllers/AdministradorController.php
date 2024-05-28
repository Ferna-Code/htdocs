<?php
session_start();
require_once __DIR__ . '/../DAO/Administrador/Impl/AdministradorDaoImpl.php';
require_once __DIR__ . '/../Models/adminPublicaciones_model.php';

class AdministradorController{
    public function index(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/index.php';  //carpeta/vista
        include VIEWS_PATH . 'Layout/footer.php';
    }


    public function getPublicacion(){
        $admin = new AdministradorDaoImpl();
        $data = $admin->getPublicaciones();


        if($data instanceof mysqli_result){
            $result[] = array();
            while($row = $data->fetch_assoc()){
                $result[] = $row;
            }
            echo json_encode($result);
        }else{
            echo json_encode(['success' => false, 'message' => 'Error en la actualización de la tabla']);

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



}






