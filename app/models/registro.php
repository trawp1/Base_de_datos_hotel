<?php

class Registro
{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function guardar(
        $nDocumentoCliente,
        $idReservacion,
        $idTipoPago,
        $idDescripRegistro
    ) {

        $sql = "INSERT INTO registro
        (
            nDocumentoCliente,
            idReservacion,
            idTipoPago,
            idDescripRegistro
        )
        VALUES
        (
            :cliente,
            :reservacion,
            :tipoPago,
            :descripcion
        )";

        $stmt = $this->conexion->prepare($sql);

        $stmt->bindParam(":cliente", $nDocumentoCliente);
        $stmt->bindParam(":reservacion", $idReservacion);
        $stmt->bindParam(":tipoPago", $idTipoPago);
        $stmt->bindParam(":descripcion", $idDescripRegistro);

        return $stmt->execute();
    }

    public function obtenerReservaciones()
    {
        $stmt = $this->conexion->query(
            "SELECT * FROM reservaciones"
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

    public function obtenerDescripciones()
    {
        $stmt = $this->conexion->query(
            "SELECT * FROM descripRegistro"
        );

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}