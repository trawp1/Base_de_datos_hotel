<?php

class Reservacion
{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function guardar(
        $diaReserva,
        $idHabitacion,
        $cantidadReservas
    ) {

        $sql = "INSERT INTO reservaciones
        (
            diaReserva,
            idHabitacion,
            cantidadReservas
        )
        VALUES
        (
            :dia,
            :habitacion,
            :cantidad
        )";

        $stmt = $this->conexion->prepare($sql);

        $stmt->bindParam(":dia", $diaReserva);
        $stmt->bindParam(":habitacion", $idHabitacion);
        $stmt->bindParam(":cantidad", $cantidadReservas);

        return $stmt->execute();
    }

    public function obtenerHabitaciones()
    {
        $sql = "SELECT * FROM habitacion";

        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}