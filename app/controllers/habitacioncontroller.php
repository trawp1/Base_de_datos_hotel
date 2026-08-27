<?php

require_once __DIR__ . "/../../config/database.php";
require_once __DIR__ . "/../models/habitacion.php";

$database = new Database();
$conexion = $database->conectar();

$habitacion = new Habitacion($conexion);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero = $_POST["numeroHabitacion"];
    $disponibilidad = $_POST["disponibilidad"];
    $camas = $_POST["cantidadCamas"];

    try {

        $habitacion->guardar(
            $numero,
            $disponibilidad,
            $camas
        );

        $mensaje = "Habitación registrada correctamente.";

    } catch (PDOException $e) {

        $mensaje = "Error: " . $e->getMessage();

    }
}

require_once __DIR__ . "/../views/habitacion/formulario.php";