<?php
require_once("Models/DAOLogin.php");

class AuthController {
    public function login() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $user = $_POST['email'] ?? ''; // Asegúrate de que el input coincide con el formulario
            $password = $_POST['password'] ?? '';
    
            $dao = new DAOLogin();
            $result = $dao->Login($user, $password);
    
            if ($result === "Inicio de sesión exitoso.") {
                $_SESSION["users"] = $user;
                header("Location: Views/admin/html/home.php");
                exit();
            } else {
                echo "<script>alert('$result'); window.location.href='index.php';</script>";
            }
        } else {
            require_once("Views/public/html/login.php");
        }
    }

    public function logout() {
        session_destroy();
        header("Location: index.php");
        exit();
    }

}
?>


