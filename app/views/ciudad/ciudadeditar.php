<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar ciudad</title>
</head>
<body>

<h1>Editar todas las ciudades</h1>

<form action="/Base_de_datos_hotel/public/ciudad/editar"
      method="POST">

    <table border="1">

        <tr>
            <th>ID ciudad</th>
            <th>Nombre ciudad</th>
            <th>Departamento</th>
        </tr>

        <?php foreach ($ciudad as $ciudadItem) { ?>

            <tr>
                <td>
                    <?= $ciudadItem['id_ciudad'] ?>

                    <input
                        type="hidden"
                        name="ciudades[<?= $ciudadItem['id_ciudad'] ?>][id_ciudad]"
                        value="<?= $ciudadItem['id_ciudad'] ?>"
                    >
                </td>

                <td>
                    <input
                        type="text"
                        name="ciudades[<?= $ciudadItem['id_ciudad'] ?>][nombre_ciudad]"
                        value="<?= htmlspecialchars($ciudadItem['nombre_ciudad']) ?>"
                        required
                    >
                </td>

                <td>
                    <input
                        type="text"
                        name="ciudades[<?= $ciudadItem['id_ciudad'] ?>][departamento]"
                        value="<?= htmlspecialchars($ciudadItem['departamento']) ?>"
                        required
                    >
                </td>
            </tr>

        <?php } ?>

    </table>

    <br>

    <button type="submit">Guardar todos los cambios</button>

</form>

<br>

<a href="/Base_de_datos_hotel/public/ciudad">
    Volver al listado
</a>

</body>
</html>