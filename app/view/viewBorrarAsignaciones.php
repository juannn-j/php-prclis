<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Asignacion</title>
</head>
<body>
    <?php include "menu.php"; ?>
    <?php include "menuAsignaciones.php"; ?>
    <div>
        <h1>Borrar Asignaciones</h1>
        <hr>
        <form action="index.php?accion=borrarAsignacion" method="post">
            <select name="cbxIda" id="cbxIda">
                <option>Seleccione Asignacion</option>
                <?php foreach ($asignaciones as $asig) { ?>
                    <option value="<?= $asig->getIdasignacion() ?>"><?= $asig->getIdasignacion() ?></option>
                <?php } ?>
            </select>
            <input type="submit" value="Borrar">
        </form>
    </div>
</body>
</html> 