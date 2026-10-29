<?php

require_once __DIR__ . "/../models/cliente.php";

class clienteController
{
    public function index()
    {
        $clienteModel = new cliente();

        $cliente = $clienteModel->getAll();

        require_once __DIR__ . "/../views/cliente/index.php";
    }


    public function crear()
    {
        require_once __DIR__ . "/../views/cliente/clientecrear.php";
    }


    public function guardar()
    {
        $documento = $_POST['documento'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $fecha_de_llegada = $_POST['fecha_de_llegada'];
        $id_ciudad = $_POST['id_ciudad'];

        $clienteModel = new cliente();

        $resultado = $clienteModel->guardar(
            $documento,
            $nombres,
            $apellidos,
            $telefono,
            $correo,
            $fecha_de_llegada,
            $id_ciudad
        );

        if ($resultado) {

            header("Location: /base_de_datos_hotel/public/cliente");
            exit;
        } else {

            echo "No se pudo guardar el cliente.";
        }
    }


    public function mostrareditar()
    {
        $clienteModel = new cliente();
        $cliente = $clienteModel->getAll();

        require_once __DIR__ . "/../views/cliente/clienteeditar.php";
    }

    public function editartodas()
    {
        $clientes = $_POST['clientes'] ?? [];

        if (!is_array($clientes) || empty($clientes)) {
            exit("No se recibieron clientes para actualizar.");
        }

        $clienteModel = new cliente();

        if ($clienteModel->editarTodas($clientes)) {
            header("Location: /base_de_datos_hotel/public/cliente");
            exit;
        }

        echo "No se pudieron actualizar los clientes.";
    }


    public function eliminar()
    {
        
    }
}
