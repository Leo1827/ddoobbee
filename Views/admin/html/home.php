<?php
session_start();

if (!isset($_SESSION['users'])) {
    $baseURL = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . "/landing_page/index.php";
    header("Location: $baseURL");
    exit;
}
?>
<?php
    $current_page = basename($_SERVER['PHP_SELF']); // Obtiene el nombre del archivo actual
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex">

    <?php include "components/sidebar.php"; ?>

    <div class="flex-1 flex flex-col min-h-screen">
        <?php include "components/nav.php"; ?>

        <main class="p-6">
            <h1 class="text-2xl font-bold">Dashboard</h1>
            <p>Bienvenido al panel de administración.</p>
        </main>

        <?php include "components/footer.php"; ?>
    </div>

</body>
</html>
