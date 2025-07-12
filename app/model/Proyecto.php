<?php
class Proyecto
{
    private $idproyecto;
    private $nombre;
    private $descripcion;

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
}
?>
