<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Reservación</title>
</head>

<body>

<h1>Registrar Reservación</h1>

<?php if (isset($mensaje)) echo "<p>$mensaje</p>"; ?>

<form method="POST">

    <label>Día de reserva:</label>

    <input
        type="number"
        name="diaReserva"
        min="1"
        max="31"
        required
    >

    <br><br>

    <label>Habitación:</label>

    <select name="idHabitacion" required>

        <option value="">Seleccione</option>

        <?php foreach ($habitaciones as $habitacion) { ?>

            <option value="<?php echo $habitacion["idHabitacion"]; ?>">

                Habitación
                <?php echo $habitacion["numeroHabitacion"]; ?>

            </option>

        <?php } ?>

    </select>

    <br><br>

    <label>Cantidad de reservas:</label>

    <input
        type="number"
        name="cantidadReservas"
        min="1"
        required
    >

    <br><br>

    <button type="submit">
        Guardar Reservación
    </button>

</form>

</body>
</html>