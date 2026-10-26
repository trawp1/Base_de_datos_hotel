<?php

require_once __DIR__ . "/../models/habitacion.php";

class habitacioncontroller
{
    public function index()
    {
        $habitacionModel = new habitacion();

        $habitacion = $habitacionModel->getAll();

        require_once __DIR__ . "/../views/habitacion/index.php";
    }

    public function crear()
    {
        require_once __DIR__ . "/../views/habitacion/habitacioncrear.php";
    }

    public function guardar()
    {
        $numero_de_habitacion = $_POST['numero_de_habitacion'];
        $disponibilidad = $_POST['disponibilidad'];
        $tipo_de_pago = $_POST['tipo_de_pago'];
        $monto_a_pagar = $_POST['monto_a_pagar'];
        $cantidad_de_personas = $_POST['cantidad_de_personas'];
        $reservada = $_POST['reservada'];
        $cantidad_de_toallas = $_POST['cantidad_de_toallas'];
        $documentos = $_POST['documentos'];

        $habitacionModel = new habitacion();

        $resultado = $habitacionModel->guardar(
            $numero_de_habitacion,
            $disponibilidad,
            $tipo_de_pago,
            $monto_a_pagar,
            $cantidad_de_personas,
            $reservada,
            $cantidad_de_toallas,
            $documentos
        );

        if ($resultado) {

            header("Location: /base_de_datos_hotel/public/habitacion");
            exit;
        } else {

            echo "No se pudo guardar la habitación.";
        }
    }

    public function mostrareditar()
    {
        $habitacionModel = new habitacion();
        $habitacion = $habitacionModel->getAll();

        require_once __DIR__ . "/../views/habitacion/habitacioneditar.php";
    }


    public function editartodas()
    {
        $habitaciones = $_POST['habitaciones'] ?? [];

        if (!is_array($habitaciones) || empty($habitaciones)) {
            exit("No se recibieron habitaciones para actualizar.");
        }

        $habitacionModel = new habitacion();

        if ($habitacionModel->editarTodas($habitaciones)) {
            header("Location: /base_de_datos_hotel/public/habitacion");
            exit;
        }

        echo "No se pudieron actualizar las habitaciones.";
    }
}
