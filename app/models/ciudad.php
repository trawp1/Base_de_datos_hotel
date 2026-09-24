<?php

require_once __DIR__ . "/../../config/database.php";

class ciudad 
{
    private $connection;

    public function __construct()
    {
        $database = new database();
        $this->connection = $database->connect();
    }

    public function getAll()
    {
        try{
            $sql = "SELECT 
                        nombre_ciudad,
                        departamento,
                        id_ciudad
                    from ciudad";

        } catch (PDOException $p) {

            echo "Ocurrió un error " . $p->getMessage();

            return [];

        }
    }
}

?>