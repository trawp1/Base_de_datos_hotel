<?php

require_once __DIR__ . "/../../config/database.php";

class cliente
{
    private $connection;

    public function __construct()
    {
        $database = new database();
        $this->connection = $database->connect();
    }

    public function getAll()
    {
        try {

            $sql = "SELECT
                        documento,
                        nombres,
                        apellidos,
                        telefono,
                        correo,
                        fecha_de_llegada,
                        id_ciudad
                    FROM cliente";

            $stmt = $this->connection->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {

            echo "Error al consultar clientes: " . $e->getMessage();
            return [];
        }
    }

    public function guardar(
        $documento,
        $nombres,
        $apellidos,
        $telefono,
        $correo,
        $fecha_de_llegada,
        $id_ciudad
    ) {
        try {

            $sql = "INSERT INTO cliente
                    (
                        documento,
                        nombres,
                        apellidos,
                        telefono,
                        correo,
                        fecha_de_llegada,
                        id_ciudad
                    )
                    VALUES
                    (
                        :documento,
                        :nombres,
                        :apellidos,
                        :telefono,
                        :correo,
                        :fecha_de_llegada,
                        :id_ciudad
                    )";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindParam(":documento", $documento);
            $stmt->bindParam(":nombres", $nombres);
            $stmt->bindParam(":apellidos", $apellidos);
            $stmt->bindParam(":telefono", $telefono);
            $stmt->bindParam(":correo", $correo);
            $stmt->bindParam(":fecha_de_llegada", $fecha_de_llegada);
            $stmt->bindParam(":id_ciudad", $id_ciudad);

            return $stmt->execute();
        } catch (PDOException $e) {

            echo "Error al guardar el cliente: " . $e->getMessage();
            return false;
        }
    }

   public function editarTodas($clientes)
{
    try {
        $this->connection->beginTransaction();

        $sql = "UPDATE cliente
                SET nombres = :nombres,
                    apellidos = :apellidos,
                    telefono = :telefono,
                    correo = :correo,
                    fecha_de_llegada = :fecha_de_llegada,
                    id_ciudad = :id_ciudad
                WHERE documento = :documento";

        $stmt = $this->connection->prepare($sql);

        foreach ($clientes as $documento => $datos) {
            $documento = trim((string) $documento);

            $nombres = trim($datos['nombres'] ?? '');
            $apellidos = trim($datos['apellidos'] ?? '');
            $telefono = trim($datos['telefono'] ?? '');
            $correo = trim($datos['correo'] ?? '');
            $fecha_de_llegada = trim($datos['fecha_de_llegada'] ?? '');
            $id_ciudad = trim((string) ($datos['id_ciudad'] ?? ''));

            if (
                $documento === '' ||
                $nombres === '' ||
                $apellidos === '' ||
                $telefono === '' ||
                $correo === '' ||
                $fecha_de_llegada === '' ||
                $id_ciudad === ''
            ) {
                throw new Exception("Todos los campos son obligatorios.");
            }

            $stmt->execute([
                ':nombres' => $nombres,
                ':apellidos' => $apellidos,
                ':telefono' => $telefono,
                ':correo' => $correo,
                ':fecha_de_llegada' => $fecha_de_llegada,
                ':id_ciudad' => $id_ciudad,
                ':documento' => $documento
            ]);
        }

        $this->connection->commit();
        return true;

    } catch (Throwable $e) {
        if ($this->connection->inTransaction()) {
            $this->connection->rollBack();
        }

        return false;
    }
}
}