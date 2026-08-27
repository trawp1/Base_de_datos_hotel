<?php

class Departamento
{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function guardar($nombreDepartamento)
    {
        $sql = "INSERT INTO departamento
                (nombreDepartamento)
                VALUES
                (:nombre)";

        $stmt = $this->conexion->prepare($sql);

        $stmt->bindParam(":nombre", $nombreDepartamento);

        return $stmt->execute();
    }
}