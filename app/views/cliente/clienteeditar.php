<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar clientes</title>
</head>
<body>

    <h1>Editar todos los clientes</h1>

    <form action="/base_de_datos_hotel/public/cliente/editar"
          method="POST">

        <table border="1">
            <tr>
                <th>Documento</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Fecha de llegada</th>
                <th>ID ciudad</th>
            </tr>

            <?php foreach ($cliente as $clienteItem) { ?>
                <tr>
                    <td>
                        <?= htmlspecialchars((string) $clienteItem['documento'], ENT_QUOTES, 'UTF-8') ?>
                    </td>

                    <td>
                        <input type="text"
                            name="clientes[<?= htmlspecialchars((string) $clienteItem['documento'], ENT_QUOTES, 'UTF-8') ?>][nombres]"
                            value="<?= htmlspecialchars($clienteItem['nombres'], ENT_QUOTES, 'UTF-8') ?>"
                            required>
                    </td>

                    <td>
                        <input type="text"
                            name="clientes[<?= htmlspecialchars((string) $clienteItem['documento'], ENT_QUOTES, 'UTF-8') ?>][apellidos]"
                            value="<?= htmlspecialchars($clienteItem['apellidos'], ENT_QUOTES, 'UTF-8') ?>"
                            required>
                    </td>

                    <td>
                        <input type="text"
                            name="clientes[<?= htmlspecialchars((string) $clienteItem['documento'], ENT_QUOTES, 'UTF-8') ?>][telefono]"
                            value="<?= htmlspecialchars($clienteItem['telefono'], ENT_QUOTES, 'UTF-8') ?>"
                            required>
                    </td>

                    <td>
                        <input type="email"
                            name="clientes[<?= htmlspecialchars((string) $clienteItem['documento'], ENT_QUOTES, 'UTF-8') ?>][correo]"
                            value="<?= htmlspecialchars($clienteItem['correo'], ENT_QUOTES, 'UTF-8') ?>"
                            required>
                    </td>

                    <td>
                        <input type="date"
                            name="clientes[<?= htmlspecialchars((string) $clienteItem['documento'], ENT_QUOTES, 'UTF-8') ?>][fecha_de_llegada]"
                            value="<?= htmlspecialchars($clienteItem['fecha_de_llegada'], ENT_QUOTES, 'UTF-8') ?>"
                            required>
                    </td>

                    <td>
                        <input type="number"
                            name="clientes[<?= htmlspecialchars((string) $clienteItem['documento'], ENT_QUOTES, 'UTF-8') ?>][id_ciudad]"
                            value="<?= htmlspecialchars((string) $clienteItem['id_ciudad'], ENT_QUOTES, 'UTF-8') ?>"
                            required>
                    </td>
                </tr>
            <?php } ?>
        </table>

        <br>

        <button type="submit">Guardar todos los cambios</button>
    </form>

    <br>

    <a href="/base_de_datos_hotel/public/cliente">
        Volver al listado
    </a>

</body>
</html>