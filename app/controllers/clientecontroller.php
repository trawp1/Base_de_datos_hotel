<?php

require_once __DIR__ . "/../../config/database.php";
require_once __DIR__ . "/../models/cliente.php";

$database = new Database();
$conexion = $database->conectar();

$cliente = new Cliente($conexion);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $documento = $_POST["nDocumentoCliente"];
    $tipoDoc = $_POST["idTipoDoc"];
    $nombre = $_POST["nombreCliente"];
    $ciudad = $_POST["idCiudad"];
    $departamento = $_POST["idDepartamento"];
    $telefono = $_POST["telefonoCliente"];
    $direccion = $_POST["direccionCliente"];
    $correo = $_POST["correoCliente"];

    try {

        $cliente->guardar(
            $documento,
            $tipoDoc,
            $nombre,
            $ciudad,
            $departamento,
            $telefono,
            $direccion,
            $correo
        );

        $mensaje = "Cliente registrado correctamente.";

    } catch (PDOException $e) {

        $mensaje = "Error: " . $e->getMessage();

    }
}

$tiposDocumento = $cliente->obtenerTiposDocumento();
$ciudades = $cliente->obtenerCiudades();
$departamentos = $cliente->obtenerDepartamentos();

require_once __DIR__ . "/../views/cliente/formulario.php";