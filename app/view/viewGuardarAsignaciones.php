<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar Asignacion</title>
</head>
<body>
    <?php include "menu.php"; ?>
    <?php include "menuAsignaciones.php"; ?>
    <div>
        <h1>Guardar Asignaciones</h1>
        <hr>
        <form action="index.php?accion=guardarAsignacion" method="post">
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
            <input type="submit" value="Guardar">
        </form>
    </div>
</body>
</html> 