<?php

require_once __DIR__ . "/../../config/database.php";
require_once __DIR__ . "/../models/departamento.php";

$database = new Database();
$conexion = $database->conectar();

$departamento = new Departamento($conexion);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombreDepartamento"];

    try {

        $departamento->guardar($nombre);

        $mensaje = "Departamento registrado correctamente.";

    } catch (PDOException $e) {

        $mensaje = "Error: " . $e->getMessage();

    }
}

require_once __DIR__ . "/../views/departamento/formulario.php";