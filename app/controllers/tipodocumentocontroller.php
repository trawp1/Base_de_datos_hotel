<?php

require_once __DIR__ . "/../../config/database.php";
require_once __DIR__ . "/../models/tipodocumento.php";

$database = new Database();
$conexion = $database->conectar();

$tipoDocumento = new TipoDocumento($conexion);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $tipo = $_POST["tipoDocu"];

    try {

        $tipoDocumento->guardar($tipo);

        $mensaje = "Tipo de documento registrado correctamente.";

    } catch (PDOException $e) {

        $mensaje = "Error: " . $e->getMessage();

    }
}

require_once __DIR__ . "/../views/tipodocumento/formulario.php";