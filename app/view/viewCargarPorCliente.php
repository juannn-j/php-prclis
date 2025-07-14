<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignaciones por Cliente</title>
</head>
<body>
    <?php include "menu.php"; ?>
    <br>
    <?php include "menuReportes.php"; ?>
    <div>
        <h1>Asignaciones por Cliente</h1>
        <hr>
        <form action="index.php?accion=cargarPorCliente" method="post">
            <select name="txtIdc" id="txtIdc">
                <option>Seleccione Cliente</option>
                <?php foreach ($clientes as $cli) { ?>
                    <option value="<?= $cli->getIdcliente() ?>" <?= (isset($idClienteSeleccionado) && $idClienteSeleccionado == $cli->getIdcliente()) ? 'selected' : '' ?>><?= $cli->getNombres() ?></option>
                <?php } ?>
            </select>
            <input type="submit" value="Ver Asignaciones">
        </form>
        <?php if (isset($asignaciones)) { ?>
        <button type="button" onclick="window.print()">Imprimir reporte</button>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Final</th>
                    <th>Estado</th>
                    <th>ID Proyecto</th>
                    <th>ID Cliente</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($asignaciones as $asig) { ?>
                    <tr>
                        <td><?= $asig->getIdasignacion() ?></td>
                        <td><?= $asig->getFechainicio() ?></td>
                        <td><?= $asig->getFechafinal() ?></td>
                        <td><?= $asig->getEstado() ?></td>
                        <td><?= $asig->getIdproyecto() ?></td>
                        <td><?= $asig->getIdcliente() ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php } ?>
    </div>
</body>
</html>
