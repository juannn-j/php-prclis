<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Cliente</title>
</head>
<body>
    <?php include "menu.php"; ?>
    <br>
    <?php include "menuClientes.php"; ?>
    <div>
        <h1>Borrar Clientes</h1>
        <hr>
        <form action="index.php?accion=borrarCliente" method="post">
            <select name="cbxIdc" id="cbxIdc">
                <option>Seleccione Cliente</option>
                <?php foreach ($clientes as $cli) { ?>
                    <option value="<?= $cli->getIdcliente() ?>"><?= $cli->getNombres() ?></option>
                <?php } ?>
            </select>
            <input type="submit" value="Borrar">
        </form>
    </div>
</body>
</html>
