<?php
session_start();

if (!isset($_SESSION['users'])) {
    $baseURL = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . "/landing_page/index.php";
    header("Location: $baseURL");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hol admin</h1>
</body>
</html>