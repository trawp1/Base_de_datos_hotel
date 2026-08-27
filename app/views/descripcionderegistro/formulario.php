<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Descripción Registro</title>
</head>

<body>

<h1>Registrar Descripción del Registro</h1>

<?php if (isset($mensaje)) echo "<p>$mensaje</p>"; ?>

<form method="POST">

    <label>Cantidad de personas:</label>

    <input
        type="number"
        name="cantidadPersonas"
        min="1"
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

    <label>Días de habitación:</label>

    <input
        type="number"
        name="diasDeHabitacion"
        min="1"
        required
    >

    <br><br>

    <label>Cantidad de pago:</label>

    <input
        type="number"
        step="0.01"
        name="cantidadPago"
        required
    >

    <br><br>

    <label>Tipo de pago:</label>

    <select name="idTipoPago" required>

        <option value="">Seleccione</option>

        <?php foreach ($tiposPago as $tipo) { ?>

            <option value="<?php echo $tipo["idTipoPago"]; ?>">

                <?php echo $tipo["modoPago"]; ?>

            </option>

        <?php } ?>

    </select>

    <br><br>

    <button type="submit">
        Guardar
    </button>

</form>

</body>
</html>