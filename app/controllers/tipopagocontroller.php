<?php

require_once __DIR__ . "/../../config/database.php";
require_once __DIR__ . "/../models/tipopago.php";

$database = new Database();
$conexion = $database->conectar();

$tipoPago = new TipoPago($conexion);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $modo = $_POST["modoPago"];

    try {

        $tipoPago->guardar($modo);

        $mensaje = "Tipo de pago registrado correctamente.";

    } catch (PDOException $e) {

        $mensaje = "Error: " . $e->getMessage();

    }
}

require_once __DIR__ . "/../views/tipopago/formulario.php";