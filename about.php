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
    <?php $page = 'about'; include __DIR__ . "/Views/public/html/components/navbar.php"; ?>
    <!-- Content -->
    <section class="py-12 px-6 max-w-6xl mx-auto text-center mt-32">
        <h2 class="text-4xl font-bold mb-4">Sobre DDOOBBEE</h2>
        <p class="text-lg text-gray-600 mb-6">
            En <span class="font-semibold">DDOOBBEE</span>, creamos papeles para fumar diseñados para quienes buscan calidad, exclusividad y una experiencia superior. 
            Nuestro enfoque es ofrecer materiales premium, ecológicos y con un diseño sofisticado.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <!-- Imagen -->
            <div class="h-80 bg-gray-200 rounded-lg flex items-center justify-center">
                <span class="text-gray-500">Imagen aquí</span>
            </div>

            <!-- Texto -->
            <div class="text-left">
                <h3 class="text-2xl font-semibold mb-2">Nuestra Filosofía</h3>
                <p class="text-gray-600 mb-4">
                    Nos inspiramos en la elegancia y el estilo de vida premium, combinando innovación con materiales sostenibles. 
                    Cada producto es diseñado para brindar una combustión perfecta y realzar tu experiencia.
                </p>
                <h3 class="text-2xl font-semibold mb-2">Compromiso con la Calidad</h3>
                <p class="text-gray-600">
                    Utilizamos procesos de fabricación de alta precisión para garantizar un papel ultra fino, libre de químicos y con la mejor textura. 
                    Fumar es un arte, y nuestros papeles están hechos para los más exigentes.
                </p>
            </div>
        </div>

        <button class="mt-10 bg-[#33135c] text-white py-3 px-8 rounded-lg hover:bg-[#5a259a] transition">
            Conoce más
        </button>
    </section>


    <!-- Swiper JS antes de main.js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="Views/public/js/main.js"></script>

    
</body>
</html>
