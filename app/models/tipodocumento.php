<?php

class TipoDocumento
{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function guardar($tipoDocu)
    {
        $sql = "INSERT INTO tipoDocumento
                (tipoDocu)
                VALUES
                (:tipo)";

        $stmt = $this->conexion->prepare($sql);

        $stmt->bindParam(":tipo", $tipoDocu);

        return $stmt->execute();
    }
}