<?php

require_once __DIR__ . "/../../config/database.php";

class cliente 
{

private $connection;

public function __construct()
{
    $database = new database ();
    $this->connection = $database->connect();
}

public function getAll()
{
       try {
             $sql = "SELECT 
                        documento,
                        nombres,
                        apellidos,
                        telefono,
                        correo,
                        fecha_de_llegada,
                        id_ciudad
                    from cliente";


        } catch (PDOException $n) {

            echo "Ocurrió un error en la tabla clientes: " . $n->getMessage();

            return [];

        }
}


}