<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Cliente</title>
</head>
<body>
    <?php include "menu.php"; ?>
    <br>
    <?php include "menuClientes.php"; ?>
    <div>
        <h1>Modificar Clientes</h1>
        <hr>
        <form action="index.php?accion=modificarCliente" method="post">
            <select name="cbxIdc" id="cbxIdc">
                <option>Seleccione Cliente</option>
                <?php foreach ($clientes as $cli) { ?>
                    <option value="<?= $cli->getIdcliente() ?>"><?= $cli->getNombres() ?></option>
                <?php } ?>
            </select>
            <input type="text" name="txtNom" placeHolder="Nombres">
            <input type="text" name="txtApl" placeHolder="Apellidos">
            <input type="text" name="txtTel" placeHolder="Telefono">
            <input type="submit" value="Modificar">
        </form>
    </div>
</body>
</html>
