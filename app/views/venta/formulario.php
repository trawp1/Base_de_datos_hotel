<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Venta</title>
</head>

<body>

<h1>Registrar Venta</h1>

<?php if (isset($mensaje)) echo "<p>$mensaje</p>"; ?>

<form method="POST">

    <label>Número de documento:</label>

    <input
        type="number"
        name="nDocumento"
        required
    >

    <br><br>

    <label>Documento del cliente:</label>

    <input
        type="number"
        name="nDocumentoClient"
        required
    >

    <br><br>

    <label>Fecha de venta:</label>

    <input
        type="date"
        name="fechaVenta"
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

    <label>IVA:</label>

    <input
        type="number"
        step="0.01"
        name="ivaVenta"
        required
    >

    <br><br>

    <label>Valor de venta:</label>

    <input
        type="number"
        step="0.01"
        name="valorVenta"
        required
    >

    <br><br>

    <button type="submit">
        Guardar Venta
    </button>

</form>

</body>
</html>