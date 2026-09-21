<?php

class Database
{
    private $host = "localhost";
    private $db_name = "base_de_datos_hotel";
    private $username = "root";
    private $password = "";


public function conectar(){
    return new pdo ("mysql host{$this->host}",
    $this->username,
    $this->password
    
    );
}



}
