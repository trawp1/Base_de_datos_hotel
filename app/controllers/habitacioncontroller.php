<?php

require_once __DIR__ . "/../models/habitacion.php";
class habitacioncontroller {
    public function index(){
        $cliente = new habitacion();
        $clienteItem = $cliente->getall();

    require_once __DIR__ . "/../views/habitacion/index.php";


    }
}


?>