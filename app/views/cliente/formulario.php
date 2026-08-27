<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registrar Cliente</title>
</head>

<body>

<h1>Registrar Cliente</h1>

<?php if (isset($mensaje)) { ?>

    <p><?php echo $mensaje; ?></p>

<?php } ?>

<form method="POST">

    <label>Número de documento:</label>
    <input type="number" name="nDocumentoCliente" required>

    <br><br>

    <label>Tipo de documento:</label>

    <select name="idTipoDoc" required>

        <option value="">Seleccione</option>

        <?php foreach ($tiposDocumento as $tipo) { ?>

            <option value="<?php echo $tipo["idTipoDoc"]; ?>">
                <?php echo $tipo["tipoDocu"]; ?>
            </option>

        <?php } ?>

    </select>

    <br><br>

    <label>Nombre:</label>
    <input type="text" name="nombreCliente" required>

    <br><br>

    <label>Ciudad:</label>

    <select name="idCiudad" required>

        <option value="">Seleccione</option>

        <?php foreach ($ciudades as $ciudad) { ?>

            <option value="<?php echo $ciudad["idCiudad"]; ?>">
                <?php echo $ciudad["nombreCiudad"]; ?>
            </option>

        <?php } ?>

    </select>

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

    <label>Teléfono:</label>
    <input type="number" name="telefonoCliente">

    <br><br>

    <label>Dirección:</label>
    <input type="text" name="direccionCliente">

    <br><br>

    <label>Correo:</label>
    <input type="email" name="correoCliente">

    <br><br>

    <button type="submit">Registrar Cliente</button>

</form>

</body>
</html>