<?php
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
    $host = $_SERVER['HTTP_HOST'];

    // Obtener la carpeta raíz eliminando "/Views/admin/html"
    $scriptPath = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
    $adminBase = preg_replace('#/Views/admin/html.*$#', '', $scriptPath);

    define("ADMIN_BASE_URL", "$protocol://$host$adminBase/Views/admin/html/");
    define("ADMIN_FOTO_URL", "$protocol://$host$adminBase/Views/admin/images/");
?>
<!-- btn movil -->
<button id="menu-toggle" class="md:hidden text-[#fff] bg-gray-800 p-2 rounded absolute top-4 left-4 z-50">
    ☰
</button>

<aside id="sidebar" class="bg-gray-800 text-white w-64 min-h-screen p-4 fixed md:relative z-32 transform -translate-x-full md:translate-x-0 transition-transform duration-300">
    <div class="text-center mb-6 mt-8">
        <img src="<?= ADMIN_FOTO_URL ?>/logo.png" alt="Logo" class="w-52 mx-auto">
        <h2 class="text-lg font-semibold">Admin Panel</h2>
    </div>
    <nav>
        <ul class="space-y-4">
            <li>
                <a href="<?= ADMIN_BASE_URL ?>/home.php" 
                    class="block px-4 py-2 rounded hover:bg-gray-700 <?= $current_page == 'home.php' ? 'bg-gray-700' : '' ?>">
                    Dashboard
                </a>
            </li>
            <li>
                <a href="<?= ADMIN_BASE_URL ?>clients.php" 
                    class="block px-4 py-2 rounded hover:bg-gray-700 <?= $current_page == 'clients.php' ? 'bg-gray-700' : '' ?>">
                    Clientes
                </a>
            </li>
        </ul>
    </nav>
</aside>
<script>
    document.getElementById("menu-toggle").addEventListener("click", function() {
        var sidebar = document.getElementById("sidebar");
        sidebar.classList.toggle("-translate-x-full");
    });
</script>

