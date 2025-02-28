<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $lang = $_SESSION['lang'] ?? 'es';

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['lang'])) {
        $_SESSION['lang'] = $_POST['lang'];
        header("Location: ".$_SERVER['PHP_SELF']); // Redirige para aplicar el cambio
        exit();
    }
?>