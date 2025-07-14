<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar Cliente</title>
</head>
<body>
    <?php include "menu.php"; ?>
    <br>
    <?php include "menuClientes.php"; ?>
    <div>
        <h1>Guardar Clientes</h1>
        <hr>
        <form action="index.php?accion=guardarCliente" method="post">
            <input type="text" name="txtNom" placeHolder="Nombres">
            <input type="text" name="txtApl" placeHolder="Apellidos">
            <input type="text" name="txtTel" placeHolder="Telefono">
            <input type="submit" value="Guardar">
        </form>
    </div>
</body>
</html>
