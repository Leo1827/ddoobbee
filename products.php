<!-- english/spanish module -->
<?php include 'lang/en-es.php'; ?>
<?php include 'lang/lang_page.php'; ?>
<?php require_once __DIR__ . "/config/config.php";?>

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
    <!-- style -->
    <link type="text/css" rel="stylesheet" href="Views/public/css/style.css"  >
    <title>DDOOBBEE</title>

</head>
<body class="bg-[#f3f3f3] text-[#33135c] background_body">
    <!-- Preloader -->
    <div id="preloader">
        <img src="https://i.gifer.com/5RTK.gif" alt="Cargando..." width="200">
    </div>

    <!-- nav and main -->
    <?php $page = 'products'; include __DIR__ . "/Views/public/html/components/navbar.php"; ?>
    <!-- Content -->
    <section class="py-12 mt-32 px-6 max-w-7xl mx-auto">
        <h2 class="text-4xl font-bold text-center mb-4">Nuestros Productos</h2>
        <p class="text-lg text-center text-gray-600 mb-10">
            Descubre nuestra exclusiva selección de papeles para fumar <span class="font-semibold">DDOOBBEE Papers</span>. Diseñados para los amantes del estilo y la calidad.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Producto 1 -->
            <div class="bg-white shadow-lg rounded-2xl p-6 text-center transform hover:scale-105 transition duration-300">
                <div class="h-52 bg-gray-200 rounded-lg flex items-center justify-center">
                    <span class="text-gray-500">Imagen aquí</span>
                </div>
                <h3 class="text-xl font-semibold mt-4">DDOOBBEE Classic</h3>
                <p class="text-gray-600 mt-2">Papel ultra fino para una combustión lenta y uniforme.</p>
                <button class="mt-4 bg-[#33135c] text-white py-2 px-6 rounded-lg hover:bg-[#5a259a] transition">Ver más</button>
            </div>

            <!-- Producto 2 -->
            <div class="bg-white shadow-lg rounded-2xl p-6 text-center transform hover:scale-105 transition duration-300">
                <div class="h-52 bg-gray-200 rounded-lg flex items-center justify-center">
                    <span class="text-gray-500">Imagen aquí</span>
                </div>
                <h3 class="text-xl font-semibold mt-4">DDOOBBEE Gold</h3>
                <p class="text-gray-600 mt-2">Edición premium con diseño elegante y materiales ecológicos.</p>
                <button class="mt-4 bg-[#33135c] text-white py-2 px-6 rounded-lg hover:bg-[#5a259a] transition">Ver más</button>
            </div>

            <!-- Producto 3 -->
            <div class="bg-white shadow-lg rounded-2xl p-6 text-center transform hover:scale-105 transition duration-300">
                <div class="h-52 bg-gray-200 rounded-lg flex items-center justify-center">
                    <span class="text-gray-500">Imagen aquí</span>
                </div>
                <h3 class="text-xl font-semibold mt-4">DDOOBBEE Organic</h3>
                <p class="text-gray-600 mt-2">Papel 100% natural sin químicos añadidos, ideal para puristas.</p>
                <button class="mt-4 bg-[#33135c] text-white py-2 px-6 rounded-lg hover:bg-[#5a259a] transition">Ver más</button>
            </div>
        </div>
    </section>

    <!-- Swiper JS antes de main.js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="Views/public/js/main.js"></script>

    
</body>
</html>
