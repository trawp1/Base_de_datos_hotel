<?php

class DescripRegistro
{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function guardar(
        $cantidadPersonas,
        $idHabitacion,
        $diasDeHabitacion,
        $cantidadPago,
        $idTipoPago
    ) {

        $sql = "INSERT INTO descripRegistro
        (
            cantidadPersonas,
            idHabitacion,
            diasDeHabitacion,
            cantidadPago,
            idTipoPago
        )
        VALUES
        (
            :personas,
            :habitacion,
            :dias,
            :pago,
            :tipoPago
        )";

        $stmt = $this->conexion->prepare($sql);

        $stmt->bindParam(":personas", $cantidadPersonas);
        $stmt->bindParam(":habitacion", $idHabitacion);
        $stmt->bindParam(":dias", $diasDeHabitacion);
        $stmt->bindParam(":pago", $cantidadPago);
        $stmt->bindParam(":tipoPago", $idTipoPago);

        return $stmt->execute();
    }

    public function obtenerHabitaciones()
    {
        $stmt = $this->conexion->query(
            "SELECT * FROM habitacion"
        );

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerTiposPago()
    {
        $stmt = $this->conexion->query(
            "SELECT * FROM tipoPago"
        );

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}