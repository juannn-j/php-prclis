<?php
class Proyecto
{
    private $idproyecto;
    private $nombre;
    private $descripcion;
    private $fechainicio;
    protected $fechafinal;

    public function getIdproyecto()
    {
        return $this->idproyecto;
    }
    public function setIdproyecto($idproyecto)
    {
        $this->idproyecto = $idproyecto;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
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
