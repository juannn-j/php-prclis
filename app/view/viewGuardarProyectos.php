<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar Proyecto</title>
</head>
<body>
    <?php include "menu.php"; ?>
    <br>
    <?php include "menuProyectos.php"; ?>
    <div>
        <h1>Guardar Proyectos</h1>
        <hr>
        <form action="index.php?accion=guardarProyecto" method="post">
            <input type="text" name="txtNom" placeHolder="Nombre">
            <input type="text" name="txtDes" placeHolder="Descripcion">
            <input type="submit" value="Guardar">
        </form>
    </div>
</body>
</html> 