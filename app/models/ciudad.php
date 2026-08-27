<?php

class Ciudad
{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function guardar($nombreCiudad, $idDepartamento)
    {
        $sql = "INSERT INTO ciudad
                (
                    nombreCiudad,
                    idDepartamento
                )
                VALUES
                (
                    :nombre,
                    :departamento
                )";

        $stmt = $this->conexion->prepare($sql);

        $stmt->bindParam(":nombre", $nombreCiudad);
        $stmt->bindParam(":departamento", $idDepartamento);

        return $stmt->execute();
    }

    public function obtenerDepartamentos()
    {
        $sql = "SELECT * FROM departamento";

        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}