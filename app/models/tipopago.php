<?php

class TipoPago
{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function guardar($modoPago)
    {
        $sql = "INSERT INTO tipoPago
                (modoPago)
                VALUES
                (:modo)";

        $stmt = $this->conexion->prepare($sql);

        $stmt->bindParam(":modo", $modoPago);

        return $stmt->execute();
    }
}