<?php

require_once __DIR__ . "/../models/cliente.php";
class clientecontroller {
    public function index(){
        $cliente = new cliente();
        $clienteItem = $cliente->getall();

    require_once __DIR__ . "/../views/cliente/index.php";


    }
}


?>

