<?php

class Asignacion
{
    private $idasignacion;
    private $idproyecto;
    private $idcliente;

    public function getIdasignacion()
    {
        return $this->idasignacion;
    }
    public function setIdasignacion($idasignacion)
    {
        $this->idasignacion = $idasignacion;
    }
    public function getIdproyecto()
    {
        return $this->idproyecto;
    }
    public function setIdproyecto($idproyecto)
    {
        $this->idproyecto = $idproyecto;
    }
    public function getIdcliente()
    {
        return $this->idcliente;
    }
    public function setIdcliente($idcliente)
    {
        $this->idcliente = $idcliente;
    }
}
?>
