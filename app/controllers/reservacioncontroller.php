<?php

require_once __DIR__ . "/../../config/database.php";
require_once __DIR__ . "/../models/reservacion.php";

$database = new Database();
$conexion = $database->conectar();

$reservacion = new Reservacion($conexion);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $dia = $_POST["diaReserva"];
    $habitacion = $_POST["idHabitacion"];
    $cantidad = $_POST["cantidadReservas"];

    try {

        $reservacion->guardar(
            $dia,
            $habitacion,
            $cantidad
        );

        $mensaje = "Reservación registrada correctamente.";

    } catch (PDOException $e) {

        $mensaje = "Error: " . $e->getMessage();

    }
}

$habitaciones = $reservacion->obtenerHabitaciones();

require_once __DIR__ . "/../views/reservacion/formulario.php";