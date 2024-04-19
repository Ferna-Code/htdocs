<?php

class AdministradorController{
    public function index(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/index.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }

    public function crearCarrera(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/creaAdmin/creaCarrera.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }
    public function creaCategoria(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/creaAdmin/creaCategoria.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }
    public function creaCursos(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/creaAdmin/creaCursos.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }
    public function creaDiccionario(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/creaAdmin/creaDiccionario.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }
    public function creaPerfiles(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/creaAdmin/creaPerfiles.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }
    public function creaPublicaciones(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/creaAdmin/creaPublicaciones.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }
    public function creaReportes(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/creaAdmin/creaReportes.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }
    public function creaUsuarios(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/creaAdmin/creaUsuarios.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }
    public function creaArchivos(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/creaAdmin/creaArchivos.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }
    public function creaComentarios(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/creaAdmin/creaComentarios.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }
    public function creaOfertas(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/creaAdmin/creaOfertas.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }
    public function creaPostulaciones(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/creaAdmin/creaPostulaciones.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }
    public function creaCVabreviado(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/creaAdmin/creaCVabreviado.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }

    //LLAMA A EDITAR

    public function editarArchivo(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/editaAdmin/editarArchivo.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }

    public function editarCarrera(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/editaAdmin/editarCarrera.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }

    public function editarCategoria(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/editaAdmin/editarCategoria.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }

    public function editarComentarios(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/editaAdmin/editarComentarios.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }

    public function editarCursos(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/editaAdmin/editarCursos.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }

    public function editarCVabreviado(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/editaAdmin/editarCVabreviado.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }

    public function editarDiccionario(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/editaAdmin/editarDiccionario.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }

    public function editarOfertas(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/editaAdmin/editarOfertas.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }

    public function editarPerfiles(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/editaAdmin/editarPerfiles.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }

    public function editarPostulaciones(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/editaAdmin/editarPostulaciones.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }

    public function editarPublicaciones(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/editaAdmin/editarPublicaciones.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }

    public function editarReportes(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/editaAdmin/editarReportes.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }

    public function editarUsuario(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Administrador/editaAdmin/editarUsuario.php';  //carpeta/vista
        //include VIEWS_PATH . 'Layout/footer.php';
    }
}






