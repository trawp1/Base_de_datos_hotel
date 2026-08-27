<?php

require_once __DIR__ . "/../../config/database.php";
require_once __DIR__ . "/../models/ciudad.php";

$database = new Database();
$conexion = $database->conectar();

$ciudad = new Ciudad($conexion);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombreCiudad"];
    $departamento = $_POST["idDepartamento"];

    try {

        $ciudad->guardar($nombre, $departamento);

        $mensaje = "Ciudad registrada correctamente.";

    } catch (PDOException $e) {

        $mensaje = "Error: " . $e->getMessage();

    }
}

$departamentos = $ciudad->obtenerDepartamentos();

require_once __DIR__ . "/../views/ciudad/formulario.php";