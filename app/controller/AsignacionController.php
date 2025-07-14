<?php
require_once "model/AsignacionModel.php";
require_once "model/Asignacion.php";
require_once "model/ProyectoModel.php";
require_once "model/Proyecto.php";
require_once "model/ClienteModel.php";
require_once "model/Cliente.php";

class AsignacionController
{
    public function guardar()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $model = new AsignacionModel();
            $asignacion = new Asignacion();
            $asignacion->setFechainicio($_POST["txtFinit"]);
            $asignacion->setFechafinal($_POST["txtFend"]);
            $asignacion->setEstado($_POST["txtEst"]);
            $asignacion->setIdproyecto($_POST["cbxIdp"]);
            $asignacion->setIdcliente($_POST["cbxIdc"]);
            $model->guardar($asignacion);
            header("Location: index.php?accion=cargarAsignacion");
        } else {
            $proyectoModel = new ProyectoModel();
            $clienteModel = new ClienteModel();
            $proyectos = $proyectoModel->cargar();
            $clientes = $clienteModel->cargar();
            require_once "view/viewGuardarAsignaciones.php";
        }
    }
    
    public function cargar()
    {
        $model = new AsignacionModel();
        $asignaciones = $model->cargar();
        require_once "view/viewCargarAsignaciones.php";
    }
    
    public function modificar()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $model = new AsignacionModel();
            $asignacion = new Asignacion();
            $asignacion->setIdasignacion($_POST["cbxIda"]);
            $asignacion->setFechainicio($_POST["txtFinit"]);
            $asignacion->setFechafinal($_POST["txtFend"]);
            $asignacion->setEstado($_POST["txtEst"]);
            $asignacion->setIdproyecto($_POST["cbxIdp"]);
            $asignacion->setIdcliente($_POST["cbxIdc"]);
            $model->modificar($asignacion);
            header("Location: index.php?accion=cargarAsignacion");
        } else {
            $asignacionModel = new AsignacionModel();
            $proyectoModel = new ProyectoModel();
            $clienteModel = new ClienteModel();
            $asignaciones = $asignacionModel->cargar();
            $proyectos = $proyectoModel->cargar();
            $clientes = $clienteModel->cargar();
            require_once "view/viewModificarAsignaciones.php";
        }
    }
    
    public function borrar()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $model = new AsignacionModel();
            $model->borrar($_POST["cbxIda"]);
            header("Location: index.php?accion=cargarAsignacion");
        } else {
            $model = new AsignacionModel();
            $asignaciones = $model->cargar();
            require_once "view/viewBorrarAsignaciones.php";
        }
    }

    public function cargarPorProyecto()
    {
        $proyectoModel = new ProyectoModel();
        $proyectos = $proyectoModel->cargar();
        $asignaciones = null;
        $idProyectoSeleccionado = null;
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["txtIdp"])) {
            $model = new AsignacionModel();
            $asignacion = new Asignacion();
            $asignacion->setIdproyecto($_POST["txtIdp"]);
            $asignaciones = $model->cargarPorProyecto($asignacion);
            $idProyectoSeleccionado = $_POST["txtIdp"];
        }
        require_once "view/viewCargarPorProyecto.php";
    }

    public function cargarPorCliente()
    {
        $clienteModel = new ClienteModel();
        $clientes = $clienteModel->cargar();
        $asignaciones = null;
        $idClienteSeleccionado = null;
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["txtIdc"])) {
            $model = new AsignacionModel();
            $asignacion = new Asignacion();
            $asignacion->setIdcliente($_POST["txtIdc"]);
            $asignaciones = $model->cargarPorCliente($asignacion);
            $idClienteSeleccionado = $_POST["txtIdc"];
        }
        require_once "view/viewCargarPorCliente.php";
    }
}
?>
