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
        } else {
            require_once "view/viewProyectos.php";
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
            $proyecto->setNombre($_POST["txtNom"]);
            $proyecto->setDescripcion($_POST["txtDes"]);
            $proyecto->setIdproyecto($_POST["txtIdp"]);
            $model->modificar($proyecto);
        } else {
            require_once "view/viewProyectos.php";
        }
    }

    public function borrar()
    {
        if (isset($_GET["idp"])) {
            $model = new ProyectoModel();
            $model->borrar($_GET["idp"]);
        }
    }
}
?>
