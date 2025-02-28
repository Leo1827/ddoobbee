<?php

require_once __DIR__ . "/../config/Conexion.php";

class DAOLogin {
    
    public function Login($user, $password) {
        $conexion = new Conexion();
        $sql = "SELECT password_user FROM users WHERE email_user = :usuario"; 
        $res = $conexion->obtenerColumnas($sql, [":usuario" => $user]); 
    
        if (!$res) {
            return "Error: Usuario no encontrado.";
        }
        
        if (isset($res[0]['password_user'])) {
            $hashp = $res[0]['password_user'];
            if (password_verify($password, $hashp)) {
                return "Inicio de sesión exitoso.";
            } else {
                return "Error: Contraseña incorrecta.";
            }
        } else {
            return "Error: No se pudo obtener la contraseña del usuario.";
        }
    }
    
}
?>
