<?php

require_once __DIR__ . "/../../config/database.php";

class habitacion
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
                        numero_de_habitacion,
                        disponibilidad,
                        tipo_de_pago,
                        monto_a_pagar,
                        cantidad_de_personas,
                        reservada,
                        cantidad_de_toallas,
                        documentos
                    FROM habitacion";

            $stmt = $this->connection->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $n) {

            echo "Ocurrió un error en la tabla habitaciones: " . $n->getMessage();

            return [];
        }
    }

    public function guardar(
        $numero_de_habitacion,
        $disponibilidad,
        $tipo_de_pago,
        $monto_a_pagar,
        $cantidad_de_personas,
        $reservada,
        $cantidad_de_toallas,
        $documentos
    ) {
        try {

            $sql = "INSERT INTO habitacion
        (
            numero_de_habitacion,
            disponibilidad,
            tipo_de_pago,
            monto_a_pagar,
            cantidad_de_personas,
            reservada,
            cantidad_de_toallas,
            documentos
        )
        VALUES
        (
            :numero_de_habitacion,
            :disponibilidad,
            :tipo_de_pago,
            :monto_a_pagar,
            :cantidad_de_personas,
            :reservada,
            :cantidad_de_toallas,
            :documentos
        )";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindParam(":numero_de_habitacion", $numero_de_habitacion);
            $stmt->bindParam(":disponibilidad", $disponibilidad);
            $stmt->bindParam(":tipo_de_pago", $tipo_de_pago);
            $stmt->bindParam(":monto_a_pagar", $monto_a_pagar);
            $stmt->bindParam(":cantidad_de_personas", $cantidad_de_personas);
            $stmt->bindParam(":reservada", $reservada);
            $stmt->bindParam(":cantidad_de_toallas", $cantidad_de_toallas);
            $stmt->bindParam(":documentos", $documentos);

            return $stmt->execute();
        } catch (PDOException $v) {

            echo "Error al guardar la habitación: " . $v->getMessage();

            return false;
        }
    }


    public function editarTodas($habitaciones)
    {
        try {
            $this->connection->beginTransaction();

            $sql = "UPDATE habitacion
                SET disponibilidad = :disponibilidad,
                    tipo_de_pago = :tipo_de_pago,
                    monto_a_pagar = :monto_a_pagar,
                    cantidad_de_personas = :cantidad_de_personas,
                    reservada = :reservada,
                    cantidad_de_toallas = :cantidad_de_toallas,
                    documentos = :documentos
                WHERE numero_de_habitacion = :numero_de_habitacion";

            $stmt = $this->connection->prepare($sql);

            foreach ($habitaciones as $numero => $datos) {
                $numero_de_habitacion = trim((string) $numero);

                $disponibilidad = trim($datos['disponibilidad'] ?? '');
                $tipo_de_pago = trim($datos['tipo_de_pago'] ?? '');
                $monto_a_pagar = trim((string) ($datos['monto_a_pagar'] ?? ''));
                $cantidad_de_personas = trim((string) ($datos['cantidad_de_personas'] ?? ''));
                $reservada = trim($datos['reservada'] ?? '');
                $cantidad_de_toallas = trim((string) ($datos['cantidad_de_toallas'] ?? ''));
                $documentos = trim((string) ($datos['documentos'] ?? ''));

                if (
                    $numero_de_habitacion === '' ||
                    $disponibilidad === '' ||
                    $tipo_de_pago === '' ||
                    $monto_a_pagar === '' ||
                    $cantidad_de_personas === '' ||
                    $reservada === '' ||
                    $cantidad_de_toallas === '' ||
                    $documentos === ''
                ) {
                    throw new Exception("Todos los campos son obligatorios.");
                }

                $stmt->execute([
                    ':disponibilidad' => $disponibilidad,
                    ':tipo_de_pago' => $tipo_de_pago,
                    ':monto_a_pagar' => $monto_a_pagar,
                    ':cantidad_de_personas' => $cantidad_de_personas,
                    ':reservada' => $reservada,
                    ':cantidad_de_toallas' => $cantidad_de_toallas,
                    ':documentos' => $documentos,
                    ':numero_de_habitacion' => $numero_de_habitacion
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
