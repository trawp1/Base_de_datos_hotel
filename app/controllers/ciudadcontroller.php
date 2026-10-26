<?php

require_once __DIR__ . "/../models/ciudad.php";
class ciudadcontroller
{
    public function index()
    {
        $ciudadModel = new ciudad();
        $ciudad = $ciudadModel->getAll();

        require_once  __DIR__ . "/../views/ciudad/index.php";
    }


    public function crear()
    {
        require_once __DIR__ . "/../views/ciudad/ciudadcrear.php";
    }

    public function guardar()
    {
        $nombre_ciudad = $_POST['nombre_ciudad'];
        $departamento = $_POST['departamento'];

        $ciudadModel = new ciudad();

        $resultado = $ciudadModel->guardar(
            $nombre_ciudad,
            $departamento
        );

        if ($resultado) {

            header("Location: /Base_de_datos_hotel/public/ciudad");
            exit;
        } else {

            echo "No se pudo guardar la ciudad.";
        }
    }




    public function mostrarEditar()
    {
        $ciudadModel = new ciudad();


        $ciudad = $ciudadModel->getAll();


        require_once __DIR__ . "/../views/ciudad/ciudadeditar.php";
    }


    /*
    editar por id                   

    public function editar()
    {
        $id_ciudad = filter_input(INPUT_POST, 'id_ciudad', FILTER_VALIDATE_INT);
        $nombre_ciudad = trim($_POST['nombre_ciudad'] ?? '');
        $departamento = trim($_POST['departamento'] ?? '');

        if (
            !$id_ciudad || $id_ciudad <= 0 ||
            $nombre_ciudad === '' || $departamento === ''
        ) {
            exit("Todos los campos son obligatorios.");
        }

        $ciudadModel = new ciudad();

        $resultado = $ciudadModel->editar(
            $id_ciudad,
            $nombre_ciudad,
            $departamento
        );

        if ($resultado) {
            header("Location: /Base_de_datos_hotel/public/ciudad");
            exit;
        }

        echo "No se pudo actualizar la ciudad.";
    }

*/




    public function editarTodas()
    {
        $ciudades = $_POST['ciudades'] ?? [];

        if (!is_array($ciudades) || empty($ciudades)) {
            exit("No se recibieron ciudades para actualizar.");
        }

        $ciudadModel = new ciudad();

        if ($ciudadModel->editarTodas($ciudades)) {
            header("Location: /Base_de_datos_hotel/public/ciudad");
            exit;
        }

        echo "No se pudieron actualizar las ciudades.";
    }

    function borrar() {}



    

    public function eliminar()
{
    $id_ciudad = filter_input(
        INPUT_POST,
        'id_ciudad',
        FILTER_VALIDATE_INT
    );

    if (!$id_ciudad || $id_ciudad <= 0) {
        exit("El ID de la ciudad no es válido.");
    }

    $ciudadModel = new ciudad();

    if ($ciudadModel->eliminar($id_ciudad)) {
        header("Location: /base_de_datos_hotel/public/ciudad");
        exit;
    }

    echo "No se pudo eliminar la ciudad. Puede estar relacionada con otros registros.";
}
}
