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
}
?>
