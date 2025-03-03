<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function getBaseUrl() {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'];

    // Detecta la raíz del proyecto dinámicamente
    $root = str_replace("/Views/admin/html", "", dirname($_SERVER['SCRIPT_NAME']));

    return rtrim($protocol . $host . $root, '/');
}

?>
<nav class="bg-white shadow-md w-full flex justify-between items-center p-4">
    <span class="text-[#000] font-semibold">
        <?php 
            if (isset($_SESSION['users']) && is_array($_SESSION['users']) && isset($_SESSION['users']['user'])) {
                echo "Bienvenido, " . htmlspecialchars($_SESSION['users']['user']);
            }
        
        ?>
    </span>
    <a href="<?= getBaseUrl(); ?>/?accion=logout" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
        Cerrar Sesión
    </a>
</nav>
