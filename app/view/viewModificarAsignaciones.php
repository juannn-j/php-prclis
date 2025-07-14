<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Asignacion</title>
</head>
<body>
    <?php include "menu.php"; ?>
    <?php include "menuAsignaciones.php"; ?>
    <div>
        <h1>Modificar Asignaciones</h1>
        <hr>
        <form action="index.php?accion=modificarAsignacion" method="post">
            <select name="cbxIda" id="cbxIda">
                <option>Seleccione Asignacion</option>
                <?php foreach ($asignaciones as $asig) { ?>
                    <option value="<?= $asig->getIdasignacion() ?>"><?= $asig->getIdasignacion() ?></option>
                <?php } ?>
            </select>
            <input type="date" name="txtFinit" placeHolder="Fecha Inicio">
            <input type="date" name="txtFend" placeHolder="Fecha Final">
            <select name="txtEst" id="txtEst">
                <option>Seleccione Estado</option>
                <option value="activo">Activo</option>
                <option value="pausado">Pausado</option>
                <option value="terminado">Terminado</option>
            </select>
            <select name="cbxIdp" id="cbxIdp">
                <option>Seleccione Proyecto</option>
                <?php foreach ($proyectos as $pro) { ?>
                    <option value="<?= $pro->getIdproyecto() ?>"><?= $pro->getNombre() ?></option>
                <?php } ?>
            </select>
            <select name="cbxIdc" id="cbxIdc">
                <option>Seleccione Cliente</option>
                <?php foreach ($clientes as $cli) { ?>
                    <option value="<?= $cli->getIdcliente() ?>"><?= $cli->getNombres() ?></option>
                <?php } ?>
            </select>
            <input type="submit" value="Modificar">
        </form>
    </div>
</body>
</html> 