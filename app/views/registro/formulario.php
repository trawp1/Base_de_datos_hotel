<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>

<body>

<h1>Registrar Entrada</h1>

<?php if (isset($mensaje)) echo "<p>$mensaje</p>"; ?>

<form method="POST">

    <label>Número de documento del cliente:</label>

    <input
        type="number"
        name="nDocumentoCliente"
        required
    >

    <br><br>

    <label>Reservación:</label>

    <select name="idReservacion" required>

        <option value="">Seleccione</option>

        <?php foreach ($reservaciones as $reservacion) { ?>

            <option value="<?php echo $reservacion["idReservaciones"]; ?>">

                Reservación
                <?php echo $reservacion["idReservaciones"]; ?>

            </option>

        <?php } ?>

    </select>

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

    <label>Descripción del registro:</label>

    <select name="idDescripRegistro" required>

        <option value="">Seleccione</option>

        <?php foreach ($descripciones as $descripcion) { ?>

            <option value="<?php echo $descripcion["idDescripRegistro"]; ?>">

                Registro
                <?php echo $descripcion["idDescripRegistro"]; ?>

            </option>

        <?php } ?>

    </select>

    <br><br>

    <button type="submit">
        Guardar Registro
    </button>

</form>

</body>
</html>