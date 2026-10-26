<h1>Lista clientes</h1>

<a href="/base_de_datos_hotel/public/cliente/crear">
    <button>Agregar cliente</button>
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
    </tr>

<?php

try {

    foreach ($cliente as $clienteItem) {

?>

    <tr>

        <td><?= $clienteItem['documento'] ?></td>

        <td><?= $clienteItem['nombres'] ?></td>

        <td><?= $clienteItem['apellidos'] ?></td>

        <td><?= $clienteItem['telefono'] ?></td>

        <td><?= $clienteItem['correo'] ?></td>

        <td><?= $clienteItem['fecha_de_llegada'] ?></td>

        <td><?= $clienteItem['id_ciudad'] ?></td>

    </tr>

<?php

    }

} catch (Exception $e) {

    echo "<tr>";
    echo "<td colspan='7'>Ocurrió un error al mostrar los clientes.</td>";
    echo "</tr>";

}

?>

</table>