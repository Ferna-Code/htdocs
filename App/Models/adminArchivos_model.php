<?php

class AdminArchivosModel
{
    private $IdArchivo;
    private $rutUsuario;
    private $documento;
    private $fechaCreacion;
    private $Activo;
    private $fechaEliminacion;

        //CARRERAS  
        public function getIdArchivo()
        {   return $this->IdArchivo; }

        public function getRutUsuario()
        {   return $this->rutUsuario; }

        public function getDocumento()
        {   return $this->documento; }

        public function getFCreacionArchivo()
        {   return $this->fechaCreacion; }

        public function getFEimnacionArchivo()
        {   return $this->fechaEliminacion; }
        


        public function setIdArchivo($IdArchivo)
        { return $this->IdArchivo = $IdArchivo; }

        public function setRutUsuario($rutUsuario)
        { return $this->rutUsuario = $rutUsuario; }

        public function setDocumento($documento)
        { return $this->documento = $documento; }

        public function setFCreacionArchivo($fechaCreacion)
        { return $this->fechaCreacion = $fechaCreacion; }

        public function setFEimnacionArchivo($fechaEliminacion)
        { return $this->fechaEliminacion = $fechaEliminacion; }

}
?>