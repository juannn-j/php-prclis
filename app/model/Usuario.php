<?php
class Usuario
{
    private $idusuario;
    private $correo;
    private $passwd;

    public function getIdusuario()
    {
        return $this->idusuario;
    }
    public function setIdusuario($idusuario)
    {
        $this->idusuario = $idusuario;
    }
    public function getCorreo()
    {
        return $this->correo;
    }
    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }
    public function getPasswd()
    {
        return $this->passwd;
    }
    public function setPasswd($passwd)
    {
        $this->passwd = $passwd;
    }
}
?>
