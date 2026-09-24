<?php

class Database
{
    private $host;
    private $port;
    private $db_name;
    private $username;
    private $password;
    private $connection;


public function __construct()
{
 $env = parse_ini_file(__DIR__."/../.env");

    $this->host = $env['DB_host'];
    $this->port = $env['DB_port'];
    $this->db_name = $env['DB_name'];
    $this->username = $env['DB_username'];
    $this->password = $env['DB_password'];
}


public function connect(){
        try {

            $dsn = "mysql:host={$this->host};port={$this->port};dbname={$this->db_name}";

            $this->connection = new PDO(
                $dsn,
                $this->username,
                $this->password
            );

            $this->connection->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

            return $this->connection;

        } catch (PDOException $e) {

            echo "Ocurrió un error: " . $e->getMessage();

        }
    }


}
