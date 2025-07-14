<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
require_once "controller/UsuarioController.php";
require_once "controller/ProyectoController.php";
require_once "controller/ClienteController.php";
require_once "controller/AsignacionController.php";

$accion = isset($_GET["accion"]) ? $_GET["accion"] : "cargarCliente";

switch ($accion) {
    case "validarUsuario":
        $controller = new UsuarioController();
        $controller->validar();
        break;
    case "guardarProyecto":
        $controller = new ProyectoController();
        $controller->guardar();
        break;
    case "cargarProyecto":
        $controller = new ProyectoController();
        $controller->cargar();
        break;
    case "modificarProyecto":
        $controller = new ProyectoController();
        $controller->modificar();
        break;
    case "borrarProyecto":
        $controller = new ProyectoController();
        $controller->borrar();
        break;
    case "guardarCliente":
        $controller = new ClienteController();
        $controller->guardar();
        break;
    case "cargarCliente":
        $controller = new ClienteController();
        $controller->cargar();
        break;
    case "modificarCliente":
        $controller = new ClienteController();
        $controller->modificar();
        break;
    case "borrarCliente":
        $controller = new ClienteController();
        $controller->borrar();
        break;
    case "guardarAsignacion":
        $controller = new AsignacionController();
        $controller->guardar();
        break;
    case "cargarAsignacion":
        $controller = new AsignacionController();
        $controller->cargar();
        break;
    case "modificarAsignacion":
        $controller = new AsignacionController();
        $controller->modificar();
        break;
    case "cargarPorProyecto":
        $controller = new AsignacionController();
        $controller->cargarPorProyecto();
        break;
    case "cargarPorCliente":
        $controller = new AsignacionController();
        $controller->cargarPorCliente();
        break;
}
?>
