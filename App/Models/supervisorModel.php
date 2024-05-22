<?php
class SupervisorModel
{
    private $nuevaCategoria;

    //GET
    public function getNuevaCategoria(){
        return $this->nuevaCategoria;
    }

    //SET
    public function setNuevaCategoria($nuevaCategoria){
        $this->nuevaCategoria=$nuevaCategoria;
    }

}
