<?php

class Asignacion
{
    private $idasignacion;
    private $fechainicio;
    private $fechafinal;
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
    public function getFechainicio()
    {
        return $this->fechainicio;
    }
    public function setFechainicio($fechainicio)
    {
        $this->fechainicio = $fechainicio;
    }
    public function getFechafinal()
    {
        return $this->fechafinal;
    }
    public function setFechafinal($fechafinal)
    {
        $this->fechafinal = $fechafinal;
    }
}
?>
