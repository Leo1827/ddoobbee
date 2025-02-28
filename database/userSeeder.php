<?php
    require_once __DIR__ . "../config/Conexion.php";

    $conexion = new Conexion();
    $password = "admin123";
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (email_user, user, password_user) VALUES (:email, :user, :password)";
    $conexion->ejecutarConsulta($sql, [
        ':email' => 'admin@example.com',
        ':user' => 'admin',
        ':password' => $hash
    ]);

    echo "✅ Usuario registrado correctamente.";
?>
