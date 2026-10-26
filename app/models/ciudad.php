<?php

require_once __DIR__ . "/../../config/database.php";

class ciudad
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
                        nombre_ciudad,
                        departamento,
                        id_ciudad
                    from ciudad";

            $stmt = $this->connection->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $p) {

            echo "Ocurrió un error " . $p->getMessage();

            return [];
        }
    }


    public function getById($id_ciudad)
    {
        $sql = "SELECT id_ciudad, nombre_ciudad, departamento
            FROM ciudad
            WHERE id_ciudad = :id_ciudad";

        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':id_ciudad', $id_ciudad, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }



    public function guardar(
        $nombre_ciudad,
        $departamento
    ) {
        try {

            $sql = "INSERT INTO ciudad
        (
            nombre_ciudad,
            departamento
        )
        VALUES
        (
            :nombre_ciudad,
            :departamento
        )";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindParam(":nombre_ciudad", $nombre_ciudad);
            $stmt->bindParam(":departamento", $departamento);

            return $stmt->execute();
        } catch (PDOException $u) {

            echo "Error al guardar la ciudad: " . $u->getMessage();
            return false;
        }
    }


    /*
    editar por id
    public function editar($id_ciudad, $nombre_ciudad, $departamento)
    {
        try {
            $sql = "UPDATE ciudad
                SET nombre_ciudad = :nombre_ciudad,
                    departamento = :departamento
                WHERE id_ciudad = :id_ciudad";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindParam(':nombre_ciudad', $nombre_ciudad);
            $stmt->bindParam(':departamento', $departamento);
            $stmt->bindParam(':id_ciudad', $id_ciudad, PDO::PARAM_INT);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error al editar la ciudad: " . $e->getMessage();
            return false;
        }
    }

    */


    
    public function editarTodas($ciudades)
    {
        try {
            $this->connection->beginTransaction();

            $sql = "UPDATE ciudad
                SET nombre_ciudad = :nombre_ciudad,
                    departamento = :departamento
                WHERE id_ciudad = :id_ciudad";

            $stmt = $this->connection->prepare($sql);

            foreach ($ciudades as $id => $datos) {

                $id_ciudad = filter_var(
                    $id,
                    FILTER_VALIDATE_INT
                );

                if (!$id_ciudad || $id_ciudad <= 0) {
                    throw new Exception("ID de ciudad no válido.");
                }

                $nombre_ciudad = trim($datos['nombre_ciudad'] ?? '');
                $departamento = trim($datos['departamento'] ?? '');

                if ($nombre_ciudad === '' || $departamento === '') {
                    throw new Exception("Los campos son obligatorios.");
                }

                $stmt->execute([
                    ':nombre_ciudad' => $nombre_ciudad,
                    ':departamento' => $departamento,
                    ':id_ciudad' => $id_ciudad
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







    public function eliminar($id_ciudad)
    {
        try {
            $sql = "DELETE FROM ciudad WHERE id_ciudad = :id_ciudad";

            $stmt = $this->connection->prepare($sql);
            $stmt->bindParam(':id_ciudad', $id_ciudad, PDO::PARAM_INT);

            $stmt->execute();

            return $stmt->rowCount() > 0;
        } catch (PDOException $e) {
            echo "Error al eliminar la ciudad: " . $e->getMessage();
            return false;
        }
    }
}
