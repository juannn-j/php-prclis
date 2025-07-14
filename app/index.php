<?php
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
require_once "controller/UsuarioController.php";
require_once "controller/ProyectoController.php";
require_once "controller/ClienteController.php";
require_once "controller/AsignacionController.php";

$accion = isset($_GET["accion"]) ? $_GET["accion"] : "validarUsuario";

if (!isset($_SESSION['usuario']) && $accion !== 'validarUsuario' && $accion !== 'logout') {
    header('Location: index.php?accion=validarUsuario');
    exit;
}

switch ($accion) {
    case "validarUsuario":
        $controller = new UsuarioController();
        $controller->validar();
        break;
    case "cargarMenu":
        header("Location: menu.php");
        break;
    case "logout":
        session_unset();
        session_destroy();
        header("Location: index.php?accion=validarUsuario");
        exit;
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
    case "borrarAsignacion":
        $controller = new AsignacionController();
        $controller->borrar();
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
