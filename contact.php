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
<body class=" text-[#33135c] background_body">
    <!-- Preloader -->
    <div id="preloader">
        <img src="https://i.gifer.com/5RTK.gif" alt="Cargando..." width="200">
    </div>

    <!-- nav and main -->
    <?php $page = 'contact'; include __DIR__ . "/Views/public/html/components/navbar.php"; ?>
    <!-- Content -->
    <section class="py-12 px-6 max-w-6xl mx-auto text-center mt-32">
        <h2 class="text-4xl font-bold mb-4">Contáctanos</h2>
        <p class="text-lg text-gray-600 mb-6">
            ¿Tienes alguna pregunta? Escríbenos o visítanos en nuestra ubicación en Ciudad de Panamá.
        </p>

        <!-- Mapa interactivo -->
        <div class="relative w-full h-80 mb-10">
            <div id="mapa" class="absolute inset-0 bg-gray-300 flex items-center justify-center text-gray-500">
                <span>Haz clic para ver el mapa</span>
            </div>
        </div>

        <!-- Formulario de contacto -->
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-lg mx-auto">
            <h3 class="text-2xl font-semibold mb-4">Envíanos un mensaje</h3>
            <form action="procesar_contacto.php" method="POST">
                <div class="mb-4">
                    <label class="block text-left text-gray-700 font-medium mb-1">Nombre</label>
                    <input type="text" name="nombre" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#33135c]" required>
                </div>
                <div class="mb-4">
                    <label class="block text-left text-gray-700 font-medium mb-1">Correo Electrónico</label>
                    <input type="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#33135c]" required>
                </div>
                <div class="mb-4">
                    <label class="block text-left text-gray-700 font-medium mb-1">Mensaje</label>
                    <textarea name="mensaje" rows="4" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#33135c]" required></textarea>
                </div>
                <button type="submit" class="w-full bg-[#33135c] text-white py-3 px-8 rounded-lg hover:bg-[#5a259a] transition">
                    Enviar Mensaje
                </button>
            </form>
        </div>
    </section>

    <!-- Script para manejar el mapa -->
    <script>
        document.getElementById("mapa").addEventListener("click", function () {
            this.innerHTML = '<iframe class="w-full h-full rounded-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31443.328656303257!2d-79.54396062186913!3d8.983333270901732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8faca8a5b61e8b3d%3A0xc0b7d5e3dc26e2!2sPanam%C3%A1%20City%2C%20Panam%C3%A1!5e0!3m2!1sen!2s!4v1708976543210!5m2!1sen!2s" allowfullscreen="" loading="lazy"></iframe>';
        });
    </script>

    <!-- Footer -->
    <?php include __DIR__ . "/Views/public/html/components/footer.php";?>

    <!-- Swiper JS antes de main.js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="Views/public/js/main.js"></script>
    
</body>
</html>
