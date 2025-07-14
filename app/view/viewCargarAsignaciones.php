<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar Asignaciones</title>
</head>
<body>
    <?php include "menu.php"; ?>
    <?php include "menuAsignaciones.php"; ?>
    <div>
        <h1>Cargar Asignaciones</h1>
        <hr>
        <table border="1">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Final</th>
                    <th>Estado</th>
                    <th>Id Proyecto</th>
                    <th>Id Cliente</th>
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
    </div>
</body>
</html> 