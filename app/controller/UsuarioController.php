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
            if ($model->validar($usuario)) {
                $_SESSION['usuario'] = $usuario->getCorreo();
                $_SESSION['logeado'] = true;
                header("Location: index.php?accion=cargarMenu");
                exit;
            } else {
                echo '<script>alert("Usuario o contraseña incorrectos");</script>';
                require_once "view/viewValidarUsuario.php";
            }
        } else {
            require_once "view/viewValidarUsuario.php";
        }
    }
}
?>
