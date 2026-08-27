<?php

class Habitacion
{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function guardar(
        $numeroHabitacion,
        $disponibilidad,
        $cantidadCamas
    ) {

        $sql = "INSERT INTO habitacion
        (
            numeroHabitacion,
            disponibilidad,
            cantidadCamas
        )
        VALUES
        (
            :numero,
            :disponibilidad,
            :camas
        )";

        $stmt = $this->conexion->prepare($sql);

        $stmt->bindParam(":numero", $numeroHabitacion);
        $stmt->bindParam(":disponibilidad", $disponibilidad);
        $stmt->bindParam(":camas", $cantidadCamas);

        return $stmt->execute();
    }
}