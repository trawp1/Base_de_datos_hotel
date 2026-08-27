<?php

class DescripVenta
{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function guardar(
        $idVenta,
        $unidadVendida,
        $valorUnitario
    ) {

        $sql = "INSERT INTO descripVenta
        (
            idVenta,
            unidadVendida,
            valorUnitario
        )
        VALUES
        (
            :venta,
            :unidad,
            :valor
        )";

        $stmt = $this->conexion->prepare($sql);

        $stmt->bindParam(":venta", $idVenta);
        $stmt->bindParam(":unidad", $unidadVendida);
        $stmt->bindParam(":valor", $valorUnitario);

        return $stmt->execute();
    }

    public function obtenerVentas()
    {
        $stmt = $this->conexion->query(
            "SELECT * FROM venta"
        );

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}