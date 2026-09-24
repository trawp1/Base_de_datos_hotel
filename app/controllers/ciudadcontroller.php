<?php

require_once __DIR__ . "/../models/ciudad.php";
class ciudadcontroller{
    public function index(){
        $ciudad = new ciudad();
        $ciudadItem = $ciudad->getAll();

        require_once  __DIR__ . "/../views/ciudad/index.php";
    }
}

?>