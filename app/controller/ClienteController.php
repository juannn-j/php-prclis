<?php
require_once "model/ClienteModel.php";
require_once "model/Cliente.php";

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
            header("Location: index.php?accion=cargarCliente");
        } else {
            require_once "view/viewGuardarClientes.php";
        }
    }
    
    public function cargar()
    {
        $model = new ClienteModel();
        $clientes = $model->cargar();
        require_once "view/viewCargarClientes.php";
    }
    
    public function modificar()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $model = new ClienteModel();
            $cliente = new Cliente();
            $cliente->setIdcliente($_POST["cbxIdc"]);
            $cliente->setNombres($_POST["txtNom"]);
            $cliente->setApellidos($_POST["txtApl"]);
            $cliente->setTelefono($_POST["txtTel"]);
            $model->modificar($cliente);
            header("Location: index.php?accion=cargarCliente");
        } else {
            $model = new ClienteModel();
            $clientes = $model->cargar();
            require_once "view/viewModificarClientes.php";
        }
    }
    
    public function borrar()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $model = new ClienteModel();
            $model->borrar($_POST["cbxIdc"]);
            header("Location: index.php?accion=cargarCliente");
        } else {
            $model = new ClienteModel();
            $clientes = $model->cargar();
            require_once "view/viewBorrarClientes.php";
        }
    }
}
?>
