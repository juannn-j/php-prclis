<?php
require_once "model/UsuarioModel.php";
require_once "model/Usuario.php";

class UsuarioController
{
    public function validar()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $model = new UsuarioModel();
            $usuario = new Usuario();
            $usuario->setCorreo($_POST["txtCorreo"]);
            $usuario->setPasswd($_POST["txtPasswd"]);
            $model->validar($usuario);
            header("Location: index.php");
        } else {
            require_once "view/viewValidarUsuario.php";
        }
    }
}
?>
