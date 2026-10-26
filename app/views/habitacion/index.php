<h1>Lista habitaciones</h1>


<a href="/base_de_datos_hotel/public/habitacion/crear">
    <button>Agregar habitacion</button>
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

    </tr>

    <?php foreach ($habitacion as $habitacionItem) { ?>

        <tr>

            <td><?= $habitacionItem['numero_de_habitacion'] ?></td>

            <td><?= $habitacionItem['disponibilidad'] ?></td>

            <td><?= $habitacionItem['tipo_de_pago'] ?></td>

            <td><?= $habitacionItem['monto_a_pagar'] ?></td>

            <td><?= $habitacionItem['cantidad_de_personas'] ?></td>

            <td><?= $habitacionItem['reservada'] ?></td>

            <td><?= $habitacionItem['cantidad_de_toallas'] ?></td>

            <td><?= $habitacionItem['documentos'] ?></td>

        </tr>

    <?php } ?>

</table>