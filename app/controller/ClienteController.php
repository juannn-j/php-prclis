<?php
require_once "../model/ClienteModel.php";
require_once "../model/Cliente.php";

class ClienteController
{
    public function guardar()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $model = new ClienteModel();
            $cliente = new Cliente();
            $cliente->setNombres($_POST["txtNom"]);
            $cliente->setApellidos($_POST["txtApl"]);
            $cliente->setTelefono($_POST["txtTel"]);
            $model->guardar($cliente);
        } else {
            require_once "../view/viewCLientes.php";
        }
    }
    public function cargar()
    {
        $model = new ClienteModel();
        $clientes = $model->cargar();
        require_once "../view/viewCargarClientes.php";
    }
    public function modificar()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $model = new ClienteModel();
            $cliente = new Cliente();
            $cliente->setNombres($_POST["txtNom"]);
            $cliente->setApellidos($_POST["txtApl"]);
            $cliente->setTelefono($_POST["txtTel"]);
            $cliente->setIdcliente($_POST["txtIdc"]);
            $model->modificar($cliente);
        } else {
            require_once "../view/viewCLientes.php";
        }
    }
    public function borrar()
    {
        if (isset($_GET["idc"])) {
            $model = new ClienteModel();
            $model->borrar($_GET["idc"]);
            header("Location: index.php?accion=cargarClientes");
        }
    }
}
?>
