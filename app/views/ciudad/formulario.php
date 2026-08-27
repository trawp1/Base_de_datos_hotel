<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ciudad</title>
</head>

<body>

<h1>Registrar Ciudad</h1>

<?php if (isset($mensaje)) echo "<p>$mensaje</p>"; ?>

<form method="POST">

    <label>Nombre de la ciudad:</label>

    <input
        type="text"
        name="nombreCiudad"
        required
    >

    <br><br>

    <label>Departamento:</label>

    <select name="idDepartamento" required>

        <option value="">Seleccione</option>

        <?php foreach ($departamentos as $departamento) { ?>

            <option value="<?php echo $departamento["idDepartamento"]; ?>">

                <?php echo $departamento["nombreDepartamento"]; ?>

            </option>

        <?php } ?>

    </select>

    <br><br>

    <button type="submit">
        Guardar Ciudad
    </button>

</form>

</body>
</html>