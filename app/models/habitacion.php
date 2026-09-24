<?php

require_once __DIR__ . "/../../config/database.php";

class habitacion 
{
   private  $connection;

   public function __construct(){
    $database = new database ();
    $this->connection = $database->connect();
   }

   public function getAll(){
    try{
             $sql = "SELECT 
                        numero_de_habitacion,
                        disponibilidad,
                        tipo_de_pago,
                        monto_a_pagar,
                        cantidad_de_personas,
                        reservada,
                        cantidad_de_toallas,
                        documentos
                    from cliente";


        }catch (PDOException $n) {

            echo "Ocurrió un error en la tabla clientes: " . $n->getMessage();

            return [];

        }
   }
}