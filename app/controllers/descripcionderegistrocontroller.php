<?php

require_once __DIR__ . "/../../config/database.php";
require_once __DIR__ . "/../models/descripregistro.php";

$database = new Database();
$conexion = $database->conectar();

$descripRegistro = new DescripRegistro($conexion);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $personas = $_POST["cantidadPersonas"];
    $habitacion = $_POST["idHabitacion"];
    $dias = $_POST["diasDeHabitacion"];
    $pago = $_POST["cantidadPago"];
    $tipoPago = $_POST["idTipoPago"];

    try {

        $descripRegistro->guardar(
            $personas,
            $habitacion,
            $dias,
            $pago,
            $tipoPago
        );

        $mensaje = "Descripción registrada correctamente.";

    } catch (PDOException $e) {

        $mensaje = "Error: " . $e->getMessage();

    }
}

$habitaciones = $descripRegistro->obtenerHabitaciones();
$tiposPago = $descripRegistro->obtenerTiposPago();

require_once __DIR__ . "/../views/descripregistro/formulario.php";