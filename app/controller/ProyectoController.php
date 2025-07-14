<?php
require_once "model/ProyectoModel.php";
require_once "model/Proyecto.php";

class ProyectoController
{
    public function guardar()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $model = new ProyectoModel();
            $proyecto = new Proyecto();
            $proyecto->setNombre($_POST["txtNom"]);
            $proyecto->setDescripcion($_POST["txtDes"]);
            $model->guardar($proyecto);
            header("Location: index.php?accion=cargarProyecto");
        } else {
            require_once "view/viewGuardarProyectos.php";
        }
    }

    public function cargar()
    {
        $model = new ProyectoModel();
        $proyectos = $model->cargar();
        require_once "view/viewCargarProyectos.php";
    }

    public function modificar()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $model = new ProyectoModel();
            $proyecto = new Proyecto();
            $proyecto->setIdproyecto($_POST["cbxIdp"]);
            $proyecto->setNombre($_POST["txtNom"]);
            $proyecto->setDescripcion($_POST["txtDes"]);
            $model->modificar($proyecto);
            header("Location: index.php?accion=cargarProyecto");
        } else {
            $model = new ProyectoModel();
            $proyectos = $model->cargar();
            require_once "view/viewModificarProyectos.php";
        }
    }

    public function borrar()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $model = new ProyectoModel();
            $model->borrar($_POST["cbxIdp"]);
            header("Location: index.php?accion=cargarProyecto");
        } else {
            $model = new ProyectoModel();
            $proyectos = $model->cargar();
            require_once "view/viewBorrarProyectos.php";
        }
    }
}
?>
