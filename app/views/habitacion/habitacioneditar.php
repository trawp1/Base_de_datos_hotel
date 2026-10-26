<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar habitaciones</title>
</head>

<body>

    <h1>Editar todas las habitaciones</h1>

    <form action="/base_de_datos_hotel/public/habitacion/editar"
        method="POST">

        <table border="1">
            <tr>
                <th>Número de habitación</th>
                <th>Disponibilidad</th>
                <th>Tipo de pago</th>
                <th>Monto a pagar</th>
                <th>Cantidad de personas</th>
                <th>Reservada</th>
                <th>Cantidad de toallas</th>
                <th>Documentos</th>
            </tr>

            <?php foreach ($habitacion as $habitacionItem) { ?>
                <?php $numero = (string) $habitacionItem['numero_de_habitacion']; ?>

                <tr>
                    <td>
                        <?= htmlspecialchars($numero, ENT_QUOTES, 'UTF-8') ?>
                    </td>

                    <td>
                        <input type="text"
                            name="habitaciones[<?= htmlspecialchars($numero, ENT_QUOTES, 'UTF-8') ?>][disponibilidad]"
                            value="<?= htmlspecialchars((string) $habitacionItem['disponibilidad'], ENT_QUOTES, 'UTF-8') ?>"
                            required>
                    </td>

                    <td>
                        <input type="text"
                            name="habitaciones[<?= htmlspecialchars($numero, ENT_QUOTES, 'UTF-8') ?>][tipo_de_pago]"
                            value="<?= htmlspecialchars((string) $habitacionItem['tipo_de_pago'], ENT_QUOTES, 'UTF-8') ?>"
                            required>
                    </td>

                    <td>
                        <input type="number" step="0.01" min="0"
                            name="habitaciones[<?= htmlspecialchars($numero, ENT_QUOTES, 'UTF-8') ?>][monto_a_pagar]"
                            value="<?= htmlspecialchars((string) $habitacionItem['monto_a_pagar'], ENT_QUOTES, 'UTF-8') ?>"
                            required>
                    </td>

                    <td>
                        <input type="number" min="1"
                            name="habitaciones[<?= htmlspecialchars($numero, ENT_QUOTES, 'UTF-8') ?>][cantidad_de_personas]"
                            value="<?= htmlspecialchars((string) $habitacionItem['cantidad_de_personas'], ENT_QUOTES, 'UTF-8') ?>"
                            required>
                    </td>

                    <td>
                        <input type="text"
                            name="habitaciones[<?= htmlspecialchars($numero, ENT_QUOTES, 'UTF-8') ?>][reservada]"
                            value="<?= htmlspecialchars((string) $habitacionItem['reservada'], ENT_QUOTES, 'UTF-8') ?>"
                            required>
                    </td>

                    <td>
                        <input type="number" min="0"
                            name="habitaciones[<?= htmlspecialchars($numero, ENT_QUOTES, 'UTF-8') ?>][cantidad_de_toallas]"
                            value="<?= htmlspecialchars((string) $habitacionItem['cantidad_de_toallas'], ENT_QUOTES, 'UTF-8') ?>"
                            required>
                    </td>

                    <td>
                        <input type="text"
                            name="habitaciones[<?= htmlspecialchars($numero, ENT_QUOTES, 'UTF-8') ?>][documentos]"
                            value="<?= htmlspecialchars((string) $habitacionItem['documentos'], ENT_QUOTES, 'UTF-8') ?>"
                            required>
                    </td>
                </tr>
            <?php } ?>
        </table>

        <br>

        <button type="submit">Guardar todos los cambios</button>
    </form>

    <br>

    <a href="/base_de_datos_hotel/public/habitacion">
        Volver al listado
    </a>

</body>

</html>