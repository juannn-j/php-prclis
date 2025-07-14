<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignaciones por Proyecto</title>
</head>
<body>
    <?php include "menu.php"; ?>
    <?php include "menuReportes.php"; ?>
    <div>
        <h1>Asignaciones por Proyecto</h1>
        <hr>
        <form action="index.php?accion=cargarPorProyecto" method="post">
            <select name="txtIdp" id="txtIdp">
                <option>Seleccione Proyecto</option>
                <?php foreach ($proyectos as $pro) { ?>
                    <option value="<?= $pro->getIdproyecto() ?>" <?= (isset($idProyectoSeleccionado) && $idProyectoSeleccionado == $pro->getIdproyecto()) ? 'selected' : '' ?>><?= $pro->getNombre() ?></option>
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
