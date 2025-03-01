<!-- english/spanish module -->
<?php include 'lang/en-es.php'; ?>
<?php include 'lang/lang_page.php'; ?>
<?php include 'config/config.php'; ?>

<?php
    // Cargar la lista de productos
    $productos = include __DIR__ . '/productos/productos.php';

    if (!is_array($productos)) {
        die("Error: No se pudo cargar la lista de productos.");
    }

    // Obtener el ID del producto desde la URL
    $id = $_GET['id'] ?? null;

    if (!$id || !isset($productos[$id])) {
        die("Error: Producto no encontrado.");
    }

    $producto = $productos[$id]; // Asignar el producto correcto
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Handcrafted papers for elevated experiences.">
    <meta name="keywords" content="cueros, fumar, weed, lujo, raw, rolling, premium, cannabis">
    <meta property="og:title" content="DDOOBBEE">
    <meta property="og:description" content="Estilo y exclusividad en cada calada.">
    <meta property="og:image" content="https://example.com/imagen.jpg">
    <meta property="og:url" content="https://example.com">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link type="text/css" rel="stylesheet" href="Views/public/css/style.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <title>DDOOBBEE</title>
</head>
<body class="text-[#33135c]">

    <!-- Preloader -->
    <div id="preloader" class="fixed inset-0 flex items-center justify-center bg-white z-50">
        <img src="https://i.gifer.com/5RTK.gif" alt="Cargando..." width="200">
    </div>

    <!-- nav and main -->
    <?php $page = 'products'; include __DIR__ . "../Views/public/html/components/navbar.php"; ?>

    <!-- Contenido Principal -->
    <div class="mx-auto px-4 mt-32 py-10">
        <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg p-6">
            <!-- Título -->
            <h1 class="text-3xl font-semibold text-center"><?= htmlspecialchars($producto['nombre']) ?></h1>
            <p class="text-center text-gray-600 mt-2"><?= htmlspecialchars($producto['descripcion']) ?></p>

            <!-- Carrusel de Imágenes -->
            <div class="swiper my-6">
                <div class="swiper-wrapper">
                    <?php foreach ($producto['imagenes'] as $imagen): ?>
                        <div class="swiper-slide flex justify-center">
                            <img src="<?= htmlspecialchars($imagen) ?>" class="w-full max-w-lg rounded-lg shadow-md" alt="<?= htmlspecialchars($producto['nombre']) ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- Controles del carrusel -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

            <!-- Detalles del producto -->
            <h2 class="text-xl font-medium mt-6">Detalles:</h2>
            <ul class="list-disc list-inside text-gray-700 mt-2">
                <?php foreach ($producto['detalles'] as $detalle): ?>
                    <li><?= htmlspecialchars($detalle) ?></li>
                <?php endforeach; ?>
            </ul>

            <!-- Botón de regreso -->
            <div class="text-center mt-6">
                <a href="productos.php" class="bg-[#33135c] text-white px-6 py-2 rounded-full shadow-md hover:bg-[#4a1f6f] transition duration-300">
                    ← Volver a Productos
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include __DIR__ . "../Views/public/html/components/footer.php"; ?>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Ocultar preloader cuando la página carga completamente
            document.getElementById("preloader").style.display = "none";

            // Inicializar Swiper.js correctamente
            const swiper = new Swiper('.swiper', {
                loop: true,
                autoplay: { delay: 3000, disableOnInteraction: false },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        });
    </script>

    <!-- Main JS -->
    <script src="Views/public/js/main.js"></script>

</body>
</html>
