<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registrar Habitación</title>
</head>

<body>

<h1>Registrar Habitación</h1>

<?php if (isset($mensaje)) { ?>

    <p><?php echo $mensaje; ?></p>

<?php } ?>

<form method="POST">

    <label>Número de habitación:</label>
    <input type="number" name="numeroHabitacion" required>

    <br><br>

    <label>Disponibilidad:</label>

    <select name="disponibilidad" required>

        <option value="">Seleccione</option>
        <option value="Disponible">Disponible</option>
        <option value="Ocupada">Ocupada</option>
        <option value="Mantenimiento">Mantenimiento</option>

    </select>

    <br><br>

    <label>Cantidad de camas:</label>
    <input type="number" name="cantidadCamas" min="1" required>

    <br><br>

    <button type="submit">
        Registrar Habitación
    </button>

</form>

</body>
</html>