<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Tipo de Pago</title>
</head>

<body>

<h1>Registrar Tipo de Pago</h1>

<?php if (isset($mensaje)) echo "<p>$mensaje</p>"; ?>

<form method="POST">

    <label>Modo de pago:</label>

    <select name="modoPago" required>

        <option value="">Seleccione</option>
        <option value="Efectivo">Efectivo</option>
        <option value="Tarjeta">Tarjeta</option>
        <option value="Transferencia">Transferencia</option>
        <option value="Nequi">Nequi</option>
        <option value="Daviplata">Daviplata</option>

    </select>

    <br><br>

    <button type="submit">
        Guardar
    </button>

</form>

</body>
</html>