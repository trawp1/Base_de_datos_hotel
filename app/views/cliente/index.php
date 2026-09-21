<h1>lista clientes</h1>

<table border="1">

<tr>
    <th>documento</th>
    <th>nombres</th>
    <th>apellidos </th>
    <th>telefono </th>
    <th>correo </th>
    <th>fecha_de_llegada</th>
    <th>id_ciudad</th>
</tr>

<?php

try {

    foreach ($cliente as $clienteItem){
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
    } 
    catch (Exception $ey) {

    echo "<tr>";
    echo "<td colspan='3'>Ocurrió un error al mostrar las categorías.</td>";
    echo "</tr>"; $ey->getMessage();

}
?>
</table>