<?php

class AdminUsuariosModel
{
    private $rutUsuario;
    private $nombreUsuario;
    private $fechaNacimiento;
    private $IdPerfil;
    private $correo;
    private $IdCarrera;
    private $avance;
    private $cargo;
    private $clave;
    private $fechaCreacion;
    private $Activo;
    private $fechaEliminacion;

        //DICCIONARIO  

        public function getRutUsuario()
        {   return $this->rutUsuario; }

        public function getNombreUsuario()
        {   return $this->nombreUsuario; }

        public function getFNacimientoUsuario()
        {   return $this->fechaNacimiento; }

        public function getIdPerfilUsuario()
        {   return $this->IdPerfil; }

        public function getCorreoUsuario()
        {   return $this->correo; }

        public function getIdCarreraUsuario()
        {   return $this->IdCarrera; }
        
        public function getAvanceUsuario()
        {   return $this->avance; }

        public function getCargoUsuario()
        {   return $this->cargo; }

        public function getClaveUsuario()
        {   return $this->clave; }

        public function getFCreacionUsuario()
        {   return $this->fechaCreacion; }

        public function getActivoUsuario()
        {   return $this->Activo; }

        public function getFEliminacionUsuario()
        {   return $this->fechaEliminacion; }
        


        
        public function setRutUsuario($rutUsuario)
        { return $this->rutUsuario = $rutUsuario; }

        public function setNombreUsuario($nombreUsuario)
        { return $this->nombreUsuario = $nombreUsuario; }

        public function setFNacimientoUsuario($rutUsuario)
        { return $this->rutUsuario = $rutUsuario; }

        public function setIdPerfilUsuario($IdPerfil)
        { return $this->IdPerfil = $IdPerfil; }

        public function setCorreoUsuario($correo)
        { return $this->correo = $correo; }

        public function setIdCarreraUsuario($IdCarrera)
        { return $this->IdCarrera = $IdCarrera; }

        public function setAvanceUsuario($avance)
        { return $this->avance = $avance; }

        public function setCargoUsuario($cargo)
        { return $this->cargo = $cargo; }

        public function setClaveUsuario($clave)
        { return $this->clave = $clave; }

        public function setFCreacionUsuario($fechaCreacion)
        { return $this->fechaCreacion = $fechaCreacion; }

        public function setActivoUsuario($Activo)
        { return $this->Activo = $Activo; }

        public function setFEliminacionUsuario($fechaEliminacion)
        { return $this->fechaEliminacion = $fechaEliminacion; }

}
?>