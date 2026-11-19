
<h1>Lista clientes</h1>

<a href="/base_de_datos_hotel/public/cliente/crear">
    <button type="button">Agregar cliente</button>
</a>

<a href="/base_de_datos_hotel/public/cliente/editar">
    <button type="button">Editar todos los clientes</button>
</a>

<br><br>

<table border="1">

    <tr>
        <th>Documento</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Teléfono</th>
        <th>Correo</th>
        <th>Fecha de llegada</th>
        <th>ID Ciudad</th>
        <th>🗑️</th>
    </tr>

    <?php

    try {

        foreach ($cliente as $clienteItem) {

    ?>

        <tr>

            <td><?= htmlspecialchars($clienteItem['documento']) ?></td>
            <td><?= htmlspecialchars($clienteItem['nombres']) ?></td>
            <td><?= htmlspecialchars($clienteItem['apellidos']) ?></td>
            <td><?= htmlspecialchars($clienteItem['telefono']) ?></td>
            <td><?= htmlspecialchars($clienteItem['correo']) ?></td>
            <td><?= htmlspecialchars($clienteItem['fecha_de_llegada']) ?></td>
            <td><?= htmlspecialchars($clienteItem['id_ciudad']) ?></td>

            <td>
                <form
                    action="/base_de_datos_hotel/public/cliente/eliminar"
                    method="POST"
                    onsubmit="return confirm('¿Seguro que deseas eliminar este cliente?');">

                    <input
                        type="hidden"
                        name="documento"
                        value="<?= htmlspecialchars($clienteItem['documento']) ?>">

                    <button type="submit">Eliminar</button>

                </form>
            </td>

        </tr>

    <?php

        }

    } catch (Exception $e) {

        echo "<tr>";
        echo "<td colspan='8'>Ocurrió un error al mostrar los clientes.</td>";
        echo "</tr>";

    }

    ?>

</table>
