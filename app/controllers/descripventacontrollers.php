<?php

require_once __DIR__ . "/../../config/database.php";
require_once __DIR__ . "/../models/descripventa.php";

$database = new Database();
$conexion = $database->conectar();

$descripVenta = new DescripVenta($conexion);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $venta = $_POST["idVenta"];
    $unidad = $_POST["unidadVendida"];
    $valor = $_POST["valorUnitario"];

    try {

        $descripVenta->guardar(
            $venta,
            $unidad,
            $valor
        );

        $mensaje = "Descripción de venta registrada correctamente.";

    } catch (PDOException $e) {

        $mensaje = "Error: " . $e->getMessage();

    }
}

$ventas = $descripVenta->obtenerVentas();

require_once __DIR__ . "/../views/descripventa/formulario.php";