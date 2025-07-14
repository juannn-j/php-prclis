<?php
require_once "model/AsignacionModel.php";
require_once "model/Asignacion.php";

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
            header("Location: index.php");
        } else {
            require_once "view/viewAsignaciones.php";
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
            $asignacion->setFechainicio($_POST["txtFinit"]);
            $asignacion->setFechafinal($_POST["txtFend"]);
            $asignacion->setEstado($_POST["txtEst"]);
            $asignacion->setIdproyecto($_POST["cbxIdp"]);
            $asignacion->setIdcliente($_POST["cbxIdc"]);
            $asignacion->setIdasignacion($_POST["txtIda"]);
            $model->modificar($asignacion);
            header("Location: index.php");
        } else {
            require_once "view/viewAsignaciones.php";
        }
    }
    public function cargarPorProyecto()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $model = new AsignacionModel();
            $asignacion = new Asignacion();
            $asignacion->setIdproyecto($_POST["txtIdp"]);
            $model->cargarPorProyecto($asignacion);
            header("Location: index.php");
        } else {
            require_once "view/viewAsignaciones.php";
        }
    }
    public function cargarPorCliente()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $model = new AsignacionModel();
            $asignacion = new Asignacion();
            $asignacion->setIdcliente($_POST["txtIdc"]);
            $model->cargarPorCliente($asignacion);
            header("Location: index.php");
        } else {
            require_once "view/viewAsignaciones.php";
        }
    }
}
?>
