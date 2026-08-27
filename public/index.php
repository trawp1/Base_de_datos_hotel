<?php

$pagina = $_GET["pagina"] ?? "inicio";

switch ($pagina) {

    case "cliente":
        require_once "../app/controllers/clientecontroller.php";
        break;

    case "habitacion":
        require_once "../app/controllers/habitacioncontroller.php";
        break;

    case "departamento":
        require_once "../app/controllers/departamentocontroller.php";
        break;

    case "ciudad":
        require_once "../app/controllers/ciudadcontroller.php";
        break;

    case "tipodocumento":
        require_once "../app/controllers/tipodocumentocontroller.php";
        break;

    case "tipopago":
        require_once "../app/controllers/tipopagocontroller.php";
        break;

    case "reservacion":
        require_once "../app/controllers/reservacioncontroller.php";
        break;

    case "registro":
        require_once "../app/controllers/registrocontroller.php";
        break;

    case "descripregistro":
        require_once "../app/controllers/descripregistrocontroller.php";
        break;

    case "venta":
        require_once "../app/controllers/ventacontroller.php";
        break;

    case "descripventa":
        require_once "../app/controllers/descripventacontroller.php";
        break;

    default:
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Sistema Hotel</title>

</head>

<body>

<h1>Sistema de Gestión del Hotel</h1>

<h2>Registrar información</h2>

<a href="?pagina=departamento">
    Departamento
</a>

<br><br>

<a href="?pagina=ciudad">
    Ciudad
</a>

<br><br>

<a href="?pagina=tipodocumento">
    Tipo de Documento
</a>

<br><br>

<a href="?pagina=cliente">
    Cliente
</a>

<br><br>

<a href="?pagina=habitacion">
    Habitación
</a>

<br><br>

<a href="?pagina=tipopago">
    Tipo de Pago
</a>

<br><br>

<a href="?pagina=reservacion">
    Reservación
</a>

<br><br>

<a href="?pagina=descripregistro">
    Descripción de Registro
</a>

<br><br>

<a href="?pagina=registro">
    Registro
</a>

<br><br>

<a href="?pagina=venta">
    Venta
</a>

<br><br>

<a href="?pagina=descripventa">
    Descripción de Venta
</a>

</body>

</html>

<?php
        break;
}

