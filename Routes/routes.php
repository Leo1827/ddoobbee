<?php
session_start();

require_once __DIR__ . "/../Controllers/AuthController.php";

$authController = new AuthController();

if (isset($_SESSION['users'])) {
    if (isset($_GET['accion'])) {
        switch ($_GET['accion']) {
            case 'logout':
                $authController->logout();
                break;
            default:
                header("Location: " . __DIR__ . "/../Views/public/html/home.php");
                exit;
        }
    } else {
        header("Location: " . __DIR__ . "/../Views/public/html/home.php");
        exit;
    }
} else {
    if (isset($_GET['accion'])) {
        switch ($_GET['accion']) {
            case 'login':
                case 'login':
                    $authController->login(); // No necesita parámetros porque ya los obtiene dentro de AuthController
                    break;
                
                break;
            default:
                require_once __DIR__ . "/../Views/public/html/login.php";
                break;
        }
    } else {
        require_once __DIR__ . "/../Views/public/html/home.php";
    }
}
?>
