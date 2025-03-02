<?php
require_once __DIR__ . "/config/Conexion.php";

header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = filter_var(trim($_POST['nombre']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $telefono = preg_replace('/\D/', '', $_POST['telefono']); // Elimina caracteres no numéricos
    $pais = filter_var(trim($_POST['pais']), FILTER_SANITIZE_STRING);
    $ciudad = filter_var(trim($_POST['ciudad']), FILTER_SANITIZE_STRING);
    $mensaje = htmlspecialchars(trim($_POST['mensaje']));

    $errores = [];

    // Validaciones
    if (empty($nombre)) $errores[] = "El nombre es obligatorio.";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errores[] = "El correo electrónico no es válido.";
    if (empty($telefono) || !preg_match('/^[0-9]{7,15}$/', $telefono)) $errores[] = "El teléfono debe tener entre 7 y 15 dígitos.";
    if (empty($pais)) $errores[] = "El país es obligatorio.";
    if (empty($ciudad)) $errores[] = "La ciudad es obligatoria.";
    if (empty($mensaje)) $errores[] = "El mensaje no puede estar vacío.";

    if (!empty($errores)) {
        echo json_encode(["status" => "error", "errors" => $errores]);
        exit;
    }

    try {
        $conexion = new Conexion();
        $pdo = $conexion->getConexion();

        $sql = "INSERT INTO contactos (nombre, email, telefono, pais, ciudad, mensaje) 
                VALUES (:nombre, :email, :telefono, :pais, :ciudad, :mensaje)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':telefono', $telefono, PDO::PARAM_STR);
        $stmt->bindParam(':pais', $pais, PDO::PARAM_STR);
        $stmt->bindParam(':ciudad', $ciudad, PDO::PARAM_STR);
        $stmt->bindParam(':mensaje', $mensaje, PDO::PARAM_STR);
        
        if ($stmt->execute()) {
            echo json_encode(["status" => "success", "message" => "✅ Datos enviados correctamente, en breve nos contactaremos contigo."]);
        } else {
            echo json_encode(["status" => "error", "message" => "❌ Error al guardar los datos."]);
        }

        // Cerrar conexión
        $pdo = null;
    } catch (PDOException $e) {
        error_log("Error en la base de datos: " . $e->getMessage());
        echo json_encode(["status" => "error", "message" => "❌ Ha ocurrido un error, inténtalo nuevamente."]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "❌ Acceso denegado."]);
}
?>
