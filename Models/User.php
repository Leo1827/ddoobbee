<?php
require_once __DIR__ . '/../config/database.php';

class User {
    public static function obtenerPorEmail($email) {
        $conexion = new Conexion(); // Crear instancia de la conexión
        $conn = $conexion->getConexion(); // Obtener la conexión

        $sql = "SELECT * FROM users WHERE email_user = :email";
        $stmt = $conn->prepare($sql);
        $stmt->execute([":email" => $email]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function verificarContraseña($password, $hash) {
        return password_verify($password, $hash);
    }
}
?>
