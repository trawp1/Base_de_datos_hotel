<?php

class Venta
{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function guardar(
        $nDocumento,
        $nDocumentoClient,
        $fechaVenta,
        $idTipoPago,
        $ivaVenta,
        $valorVenta
    ) {

        $sql = "INSERT INTO venta
        (
            nDocumento,
            nDocumentoClient,
            fechaVenta,
            idTipoPago,
            ivaVenta,
            valorVenta
        )
        VALUES
        (
            :documento,
            :documentoCliente,
            :fecha,
            :tipoPago,
            :iva,
            :valor
        )";

        $stmt = $this->conexion->prepare($sql);

        $stmt->bindParam(":documento", $nDocumento);
        $stmt->bindParam(":documentoCliente", $nDocumentoClient);
        $stmt->bindParam(":fecha", $fechaVenta);
        $stmt->bindParam(":tipoPago", $idTipoPago);
        $stmt->bindParam(":iva", $ivaVenta);
        $stmt->bindParam(":valor", $valorVenta);

        return $stmt->execute();
    }

    public function obtenerTiposPago()
    {
        $stmt = $this->conexion->query(
            "SELECT * FROM tipoPago"
        );

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}