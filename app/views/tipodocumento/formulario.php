<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Tipo de Documento</title>
</head>

<body>

<h1>Registrar Tipo de Documento</h1>

<?php if (isset($mensaje)) echo "<p>$mensaje</p>"; ?>

<form method="POST">

    <label>Tipo de documento:</label>

    <input
        type="text"
        name="tipoDocu"
        required
    >

    <br><br>

    <button type="submit">
        Guardar
    </button>

</form>

</body>
</html>