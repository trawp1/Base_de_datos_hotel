<?php

require_once __DIR__ . "/../../config/database.php";
require_once __DIR__ . "/../models/registro.php";

$database = new Database();
$conexion = $database->conectar();

$registro = new Registro($conexion);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $cliente = $_POST["nDocumentoCliente"];
    $reservacion = $_POST["idReservacion"];
    $tipoPago = $_POST["idTipoPago"];
    $descripcion = $_POST["idDescripRegistro"];

    try {

        $registro->guardar(
            $cliente,
            $reservacion,
            $tipoPago,
            $descripcion
        );

        $mensaje = "Registro guardado correctamente.";

    } catch (PDOException $e) {

        $mensaje = "Error: " . $e->getMessage();

    }
}

$reservaciones = $registro->obtenerReservaciones();
$tiposPago = $registro->obtenerTiposPago();
$descripciones = $registro->obtenerDescripciones();

require_once __DIR__ . "/../views/registro/formulario.php";