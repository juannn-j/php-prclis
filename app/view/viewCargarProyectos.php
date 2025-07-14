<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar Proyectos</title>
</head>
<body>
    <?php include "menu.php"; ?>
    <br>
    <?php include "menuProyectos.php"; ?>
    <div>
        <h1>Cargar Proyectos</h1>
        <hr>
        <table border="1">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($proyectos as $pro) { ?>
                    <tr>
                        <td><?= $pro->getIdproyecto() ?></td>
                        <td><?= $pro->getNombre() ?></td>
                        <td><?= $pro->getDescripcion() ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html> 