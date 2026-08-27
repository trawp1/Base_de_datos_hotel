<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Descripción Venta</title>
</head>

<body>

<h1>Registrar Descripción de Venta</h1>

<?php if (isset($mensaje)) echo "<p>$mensaje</p>"; ?>

<form method="POST">

    <label>Venta:</label>

    <select name="idVenta" required>

        <option value="">Seleccione</option>

        <?php foreach ($ventas as $venta) { ?>

            <option value="<?php echo $venta["idVenta"]; ?>">

                Venta
                <?php echo $venta["idVenta"]; ?>

            </option>

        <?php } ?>

    </select>

    <br><br>

    <label>Unidad vendida:</label>

    <input
        type="number"
        name="unidadVendida"
        min="1"
        required
    >

    <br><br>

    <label>Valor unitario:</label>

    <input
        type="number"
        step="0.01"
        name="valorUnitario"
        required
    >

    <br><br>

    <button type="submit">
        Guardar Descripción de Venta
    </button>

</form>

</body>
</html>