<?php
class Conexion {
    private $host = "localhost";
    private $dbname = "landing";
    private $user = "root"; // O el usuario de la BD
    private $password = ""; // O la contraseña de la BD
    private $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO("mysql:host={$this->host};dbname={$this->dbname};charset=utf8", $this->user, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public function getConexion() {
        return $this->pdo; // Método correcto para obtener la conexión
    }

    public function obtenerColumnas($sql, $params = []) {
        try {
            $stmt = $this->pdo->prepare($sql);
            foreach ($params as $key => $value) {
                $stmt->bindValue($key, $value);
            }
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error en consulta: " . $e->getMessage());
        }
    }

    public function ejecutar_query($sql, $params = []) {
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute($params);
    }

    public function ejecutarConsulta($sql, $parametros = []) {
        try {
            // Evita inyecciones
            $stmt = $this->pdo->prepare($sql);
            return $stmt->execute($parametros);
        } catch (PDOException $e) {
            die("Error en la consulta: " . $e->getMessage());
        }
    }
    
}
?>
