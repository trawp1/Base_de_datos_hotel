<?php

require_once __DIR__ . "/../../config/database.php";
require_once __DIR__ . "/../models/venta.php";

$database = new Database();
$conexion = $database->conectar();

$venta = new Venta($conexion);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $documento = $_POST["nDocumento"];
    $documentoCliente = $_POST["nDocumentoClient"];
    $fecha = $_POST["fechaVenta"];
    $tipoPago = $_POST["idTipoPago"];
    $iva = $_POST["ivaVenta"];
    $valor = $_POST["valorVenta"];

    try {

        $venta->guardar(
            $documento,
            $documentoCliente,
            $fecha,
            $tipoPago,
            $iva,
            $valor
        );

        $mensaje = "Venta registrada correctamente.";

    } catch (PDOException $e) {

        $mensaje = "Error: " . $e->getMessage();

    }
}

$tiposPago = $venta->obtenerTiposPago();

require_once __DIR__ . "/../views/venta/formulario.php";