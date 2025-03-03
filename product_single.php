<!-- English/Spanish module -->
<?php include 'lang/en-es.php'; ?>
<?php include 'lang/lang_page.php'; ?>
<?php include 'config/config.php'; ?>

<?php
    // Cargar la lista de productos
    $productos = include __DIR__ . '/VO/productos.php';

    if (!is_array($productos)) {
        die("Error: No se pudo cargar la lista de productos.");
    }

    // Obtener el ID del producto desde la URL
    $id = isset($_GET['id']) ? trim($_GET['id']) : null;

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
<body class="text-[#33135c] bg-[#f7e0c8]">

    <!-- Preloader -->
    <div id="preloader" class="fixed inset-0 flex items-center justify-center bg-white z-50">
        <img src="https://i.gifer.com/5RTK.gif" alt="Cargando..." width="200">
    </div>

    <!-- nav and main -->
    <?php $page = 'products'; include __DIR__ . "/Views/public/html/components/navbar.php"; ?>

    <!-- Contenido Principal -->
    <div class="container mx-auto mt-16 lg:mt-32 py-10 px-4">
        <div class="bg-white rounded-xl shadow-rg p-8 max-w-6xl mx-auto bg-[#f3f3f3] border-b-8 border-[#333]">
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Columna izquierda: Carrusel de imágenes -->
                <div>
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <?php foreach ($producto['imagenes'] as $imagen): ?>
                                <div class="swiper-slide flex justify-center">
                                    <img src="<?= htmlspecialchars($imagen) ?>" class="w-full max-w-lg rounded-lg shadow-md" alt="<?= htmlspecialchars($producto['nombre']) ?>">
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>

                <!-- Columna derecha: Información del producto -->
                <div>
                    <span class="text-3xl font-semibold">DDOOBBEE</span>
                    <h1 class="text-3xl font-semibold"><?= htmlspecialchars($producto['nombre']) ?></h1>
                    <p class="text-gray-600 mt-2"><?= htmlspecialchars($producto['descripcion']) ?></p>

                    <!-- Detalles del producto -->
                    <h2 class="text-xl font-medium mt-6">Detalles:</h2>
                    <ul class="list-disc list-inside text-gray-700 mt-2">
                        <?php foreach ($producto['detalles'] as $detalle): ?>
                            <li><?= htmlspecialchars($detalle) ?></li>
                        <?php endforeach; ?>
                    </ul>

                    <!-- Botones -->
                    <div class="flex flex-col gap-4 mt-6">
                        <a href="<?= BASE_URL ?>contact.php" class="border-l-4 border-b-2 border-[#333] bg-[#ff6600] text-white px-6 py-2 rounded-full shadow-md text-center hover:bg-[#cc5200] transition duration-300">
                            📞 Contáctanos
                        </a>
                        <a href="products.php" class="bg-[#7c5eac] border-l-4 border-b-2 border-[#333] text-white px-6 py-2 rounded-full shadow-md text-center hover:bg-[#4a1f6f] transition duration-300">
                            ← Volver a Productos
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <?php include __DIR__ . "/Views/public/html/components/footer.php"; ?>

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
