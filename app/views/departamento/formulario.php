<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Departamento</title>
</head>

<body>

<h1>Registrar Departamento</h1>

<?php if (isset($mensaje)) echo "<p>$mensaje</p>"; ?>

<form method="POST">

    <label>Nombre del departamento:</label>

    <input
        type="text"
        name="nombreDepartamento"
        required
    >

    <br><br>

    <button type="submit">
        Guardar Departamento
    </button>

</form>

</body>
</html>