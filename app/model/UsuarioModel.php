<?php
require_once "../config/DB.php";
require_once "../model/Usuario.php";

class UsuarioModel
{
    private $db;
    public function __construct()
    {
        $this->db = DB::conectar();
    }

    public function validar(Usuario $usuario)
    {
        $sql = "select passwd from usuario where correo = :correo";
        $ps = $this->db->prepare($sql);
        $ps->bindParam(":correo", $usuario->getCorreo());
        $ps->execute();
        $row = $ps->fetch();
        return $row ? $usuario->getPasswd() === $row["passwd"] : false;
    }
}
?>
