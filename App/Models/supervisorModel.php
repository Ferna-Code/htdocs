<?php
class SupervisorModel
{
    //CATEGORIA
    private $nuevaCategoria;
    private $idCategoria;

    //CURSO
    private $categoriaCurso;
    private $nombreCurso;
    private $descripcionCurso;
    private $fechaInicio;
    private $link;
    private $activo;
    private $centro;
    private $idCurso;

    //USUARIOS
    private $nombre;
    private $rut;
    private $nacimiento;
    private $direccion;
    private $telefono;
    private $perfilUsuario;
    private $correo;
    private $carrera;
    private $avance;
    private $cargoUsuario;
    private $estado;

    //PERFIL
    private $nuevoPerfil;

    //PALABRA
    private $palabra;


    //GET

    //CATEGORIA
    public function getNuevaCategoria(){
        return $this->nuevaCategoria;
    }
    public function getIdCategoria(){
        return $this->idCategoria;
    }

    //PERFIL
    public function getPerfil(){
        return $this->nuevoPerfil;
    }

    //PALABRA
    public function getPalabra(){
        return $this->palabra;
    }

    //CURSO
    public function getCategoriaCurso(){
        return $this->categoriaCurso;
    }
    public function getNombreCurso(){
        return $this->nombreCurso;
    }
    public function getDescripcionCurso(){
        return $this->descripcionCurso;
    }
    public function getFechaInicio(){
        return $this->fechaInicio;
    }
    public function getLink(){
        return $this->link;
    }
    public function getactivo(){
        return $this->activo;
    }

    public function getCentro(){
        return $this->centro;
    }

    public function getIdCurso(){
        return $this->idCurso;
    }

    //USUARIO
    public function getNombreUsuario(){
        return $this->nombre;
    }
    public function getRut(){
        return $this->rut;
    }
    public function getNacimiento(){
        return $this->nacimiento;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function getPerfilUsuario(){
        return $this->perfilUsuario;
    }
    public function getCorreo(){
        return $this->correo;
    }
    public function getCarrera(){
        return $this->carrera;
    }
    public function getAvance(){
        return $this->avance;
    }
    public function getCargoUsuario(){
        return $this->cargoUsuario;
    }
    public function getEstado(){
        return $this->estado;
    }

    //SET

    //CATEGORIA
    public function setNuevaCategoria($nuevaCategoria){
        $this->nuevaCategoria=$nuevaCategoria;
    }
    public function SetIdCategoria($idCategoria){
        $this->idCategoria=$idCategoria;
    }

    //PERFIL
    public function setPerfil($perfil){
        $this->nuevoPerfil=$perfil;
    }

    //PALABRA
    public function setPalabra($palabra){
        $this->palabra=$palabra;
    }

    //CURSO
    public function setCategoriaCurso($categoriaCurso){
        $this->categoriaCurso=$categoriaCurso;
    }
    public function setNombreCurso($nombreCurso){
        $this->nombreCurso=$nombreCurso;
    }
    public function setDescripcionCurso($descripcionCurso){
        $this->descripcionCurso=$descripcionCurso;
    }
    public function setFechaInicio($fechaInicio){
        $this->fechaInicio=$fechaInicio;
    }
    public function setLink($link){
        $this->link=$link;
    }
    public function setactivo($activo){
        $this->activo=$activo;
    }

    public function setCentro($centro){
        $this->centro = $centro;
    }

    public function setIdCurso($idCurso){
        $this->idCurso = $idCurso;
    }

    //USUARIO
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function setRut($rut){
        $this->rut=$rut;
    }
    public function setNacimiento($nacimiento){
        $this->nacimiento=$nacimiento;
    }
    public function setDireccion($direccion){
        $this->direccion=$direccion;
    }
    public function setTelefono($telefono){
        $this->telefono=$telefono;
    }
    public function setPerfilUsuario($perfilUsuario){
        $this->perfilUsuario=$perfilUsuario;
    }
    public function setCorreo($correo){
        $this->correo=$correo;
    }
    public function setCarrera($carrera){
        $this->carrera=$carrera;
    }
    public function setAvance($avance){
        $this->avance=$avance;
    }
    public function setCargoUsuario($cargoUsuario){
        $this->cargoUsuario=$cargoUsuario;
    }
    public function setEstado($estado){
        $this->estado=$estado;
    }

}
