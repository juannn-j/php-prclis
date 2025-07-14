<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar Clientes</title>
</head>
<body>
    <?php include "menu.php"; ?>
    <?php include "menuClientes.php"; ?>
    <div>
        <h1>Cargar Clientes</h1>
        <hr>
        <table border="1">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Telefonos</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cli) { ?>
                    <tr>
                        <td><?= $cli->getIdcliente() ?></td>
                        <td><?= $cli->getNombres() ?></td>
                        <td><?= $cli->getApellidos() ?></td>
                        <td><?= $cli->getTelefono() ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>