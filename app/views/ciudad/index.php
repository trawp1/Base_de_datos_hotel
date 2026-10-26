<h1>Lista ciudades</h1>


<a href="/Base_de_datos_hotel/public/ciudad/crear">
    <button type="button">Agregar ciudad</button>
</a>

<a href="/Base_de_datos_hotel/public/ciudad/editar">
    <button type="button">Editar ciudad</button>
</a>


<br><br>


<table border="1">
    <tr>
        <th>nombre_ciudad</th>
        <th>departamento</th>
        <th>id_ciudad</th>
        <th>Acciones</th>
    </tr>

    <?php
    try {
        foreach ($ciudad as $ciudadItem) {
    ?>
            <tr>
                <td>
                    <?= htmlspecialchars($ciudadItem['nombre_ciudad']) ?>
                </td>

                <td>
                    <?= htmlspecialchars($ciudadItem['departamento']) ?>
                </td>

                <td>
                    <?= (int) $ciudadItem['id_ciudad'] ?>
                </td>

                <td>
                    <form
                        action="/Base_de_datos_hotel/public/ciudad/eliminar"
                        method="POST"
                        onsubmit="return confirm('¿Seguro que deseas eliminar esta ciudad?');">

                        <input
                            type="hidden"
                            name="id_ciudad"
                            value="<?= (int) $ciudadItem['id_ciudad'] ?>">

                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
    <?php
        }
    } catch (Exception $ey) {
        echo "<tr><td colspan='4'>Ocurrió un error al mostrar las ciudades.</td></tr>";
        echo $ey->getMessage();
    }
    ?>
</table>