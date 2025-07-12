<?php
class Cliente
{
    private $idcliente;
    private $nombres;
    private $apellidos;
    private $telefono;

    public function getIdcliente()
    {
        return $this->idcliente;
    }
    public function setIdcliente($idcliente)
    {
        $this->idcliente = $idcliente;
    }
    public function getNombres()
    {
        return $this->nombres;
    }
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
    }
    public function getApellidos()
    {
        return $this->apellidos;
    }
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }
}
?>
