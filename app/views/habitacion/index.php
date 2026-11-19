<h1>Lista habitaciones</h1>

<a href="/base_de_datos_hotel/public/habitacion/crear">
    <button type="button">Agregar habitación</button>
</a>

<a href="/base_de_datos_hotel/public/habitacion/editar">
    <button type="button">Editar todas las habitaciones</button>
</a>

<br><br>

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
        <th>🗑️</th>
    </tr>

    <?php foreach ($habitacion as $habitacionItem) { ?>

        <tr>

            <td><?= htmlspecialchars($habitacionItem['numero_de_habitacion']) ?></td>

            <td><?= htmlspecialchars($habitacionItem['disponibilidad']) ?></td>

            <td><?= htmlspecialchars($habitacionItem['tipo_de_pago']) ?></td>

            <td><?= htmlspecialchars($habitacionItem['monto_a_pagar']) ?></td>

            <td><?= htmlspecialchars($habitacionItem['cantidad_de_personas']) ?></td>

            <td><?= htmlspecialchars($habitacionItem['reservada']) ?></td>

            <td><?= htmlspecialchars($habitacionItem['cantidad_de_toallas']) ?></td>

            <td><?= htmlspecialchars($habitacionItem['documentos']) ?></td>

            <td>
                <form
                    action="/base_de_datos_hotel/public/habitacion/eliminar"
                    method="POST"
                    onsubmit="return confirm('¿Seguro que deseas eliminar esta habitación?');">

                    <input
                        type="hidden"
                        name="numero_de_habitacion"
                        value="<?= htmlspecialchars($habitacionItem['numero_de_habitacion']) ?>">

                    <button type="submit">Eliminar</button>

                </form>
            </td>

        </tr>

    <?php } ?>

</table>