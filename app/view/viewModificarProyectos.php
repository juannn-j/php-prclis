<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Proyecto</title>
</head>
<body>
    <?php include "menu.php"; ?>
    <?php include "menuProyectos.php"; ?>
    <div>
        <h1>Modificar Proyectos</h1>
        <hr>
        <form action="index.php?accion=modificarProyecto" method="post">
            <select name="cbxIdp" id="cbxIdp">
                <option>Seleccione Proyecto</option>
                <?php foreach ($proyectos as $pro) { ?>
                    <option value="<?= $pro->getIdproyecto() ?>"><?= $pro->getNombre() ?></option>
                <?php } ?>
            </select>
            <input type="text" name="txtNom" placeHolder="Nombre">
            <input type="text" name="txtDes" placeHolder="Descripcion">
            <input type="submit" value="Modificar">
        </form>
    </div>
</body>
</html> 