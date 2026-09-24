<h1>lista ciudades</h1>

<table border="1">

<tr>
    <th>nombre_ciudad</th>
    <th>departamento</th>
    <th>id_ciudad</th>
</tr>

<?php

try {

    foreach ($ciudad as $ciudadItem){
?>
    <tr>
        <td><?= $ciudadItem['nombre_ciudad'] ?></td>
        <td><?= $ciudadItem['departamento'] ?></td>
        <td><?= $ciudadItem['id_ciudad'] ?></td>
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

    <form action="/ciudad" method="POST">
    <input type="text" name="nombre">
    <input type="text" name="categoria">
    <input type="number" name="precio">
    
    <botton type = "submit">guardar</botton>    



    </form>