<?php

class Cliente
{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function guardar(
        $nDocumentoCliente,
        $idTipoDoc,
        $nombreCliente,
        $idCiudad,
        $idDepartamento,
        $telefonoCliente,
        $direccionCliente,
        $correoCliente
    ) {

        $sql = "INSERT INTO clientes
        (
            nDocumentoCliente,
            idTipoDoc,
            nombreCliente,
            idCiudad,
            idDepartamento,
            telefonoCliente,
            direccionCliente,
            correoCliente
        )
        VALUES
        (
            :documento,
            :tipoDoc,
            :nombre,
            :ciudad,
            :departamento,
            :telefono,
            :direccion,
            :correo
        )";

        $stmt = $this->conexion->prepare($sql);

        $stmt->bindParam(":documento", $nDocumentoCliente);
        $stmt->bindParam(":tipoDoc", $idTipoDoc);
        $stmt->bindParam(":nombre", $nombreCliente);
        $stmt->bindParam(":ciudad", $idCiudad);
        $stmt->bindParam(":departamento", $idDepartamento);
        $stmt->bindParam(":telefono", $telefonoCliente);
        $stmt->bindParam(":direccion", $direccionCliente);
        $stmt->bindParam(":correo", $correoCliente);

        return $stmt->execute();
    }

    public function obtenerTiposDocumento()
    {
        $sql = "SELECT * FROM tipoDocumento";

        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerCiudades()
    {
        $sql = "SELECT * FROM ciudad";

        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerDepartamentos()
    {
        $sql = "SELECT * FROM departamento";

        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}