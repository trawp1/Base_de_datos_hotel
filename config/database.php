<?php

class Database
{
    private $host = "localhost";
    private $db_name = "hotel";
    private $username = "root";
    private $password = "";


public function conectar(){
    return new pdo ("mysql host{$this->host}",
    $this->username,
    $this->password
    
    );
}



}
