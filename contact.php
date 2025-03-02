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
<body class="text-[#57ac83] bg-[#f7e0c8]">
    <!-- Preloader -->
    <div id="preloader">
        <img src="https://i.gifer.com/5RTK.gif" alt="Cargando..." width="200">
    </div>

    <!-- nav and main -->
    <?php $page = 'contact'; include __DIR__ . "/Views/public/html/components/navbar.php"; ?>
    <!-- Content -->
    <section class="py-12 px-6 max-w-6xl mx-auto mt-32">
        <h3 class="text-6xl text-center mb-4">Contáctanos</h3>
        <p class="text-2xl text-gray-600 text-center mb-6">
            ¿Tienes alguna pregunta? Escríbenos o visítanos en nuestra ubicación en Ciudad de Panamá.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <!-- Información de Contacto -->
            <div class="shadow px-14 py-8 rounded-lg shadow">
                <h3 class="text-4xl mb-4">Nuestra Ubicación</h3>
                <p class="text-[#000] mb-2">
                    <strong class="bg-[#ca584e] p-1 rounded-lg px-2">Dirección:</strong> 
                    Panamá City, Panamá
                </p>
                <p class="text-[#000] mb-2">
                    <strong class="bg-[#ca584e] p-1 rounded-lg px-2">Teléfono:</strong> +
                    507 123 4567
                </p>
                <p class="text-[#000] mb-6">
                    <strong class="bg-[#ca584e] p-1 rounded-lg px-2">Email:</strong> cont
                    acto@example.com
                </p>

                <!-- Mapa interactivo -->
                <div class="relative w-full h-60">
                    <div id="mapa" class="absolute inset-0 bg-gray-300 flex items-center justify-center text-gray-500 cursor-pointer">
                        <span>Haz clic para ver el mapa</span>
                    </div>
                </div>
            </div>

            <!-- Formulario de contacto -->
            <div class="bg-[#57ac83] shadow border-l-8 border-b-4 border-[#333] px-14 py-8 rounded-lg shadow-lg">
                <h3 class="text-4xl text-white mb-4">Envíanos un mensaje</h3>

                <form action="add_contact.php" id="contactForm" method="POST">
                    <div class="mb-4">
                        <label 
                            class="block text-[#fff] mb-1">Nombre</label>
                        <input type="text" name="nombre" 
                            class="w-full bg-[#f3f3f3] text-[#000] border-l-4 border-b-4 border-[#ffae03] px-4 py-2 rounded-lg" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-[#fff] mb-1">Correo Electrónico</label>
                        <input type="email" name="email" 
                            class="w-full bg-[#f3f3f3] text-[#000] border-l-4 border-b-4 border-[#ffae03] px-4 py-2 rounded-lg" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-[#fff] mb-1">Teléfono</label>
                        <input type="number" name="telefono" 
                            class="w-full bg-[#f3f3f3] text-[#000] border-l-4 border-b-4 border-[#ffae03] px-4 py-2 rounded-lg" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-[#fff] mb-1">País</label>
                        <input type="text" name="pais" 
                            class="w-full bg-[#f3f3f3] text-[#000] border-l-4 border-b-4 border-[#ffae03] px-4 py-2 rounded-lg" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-[#fff] mb-1">Ciudad</label>
                        <input type="text" name="ciudad" 
                            class="w-full bg-[#f3f3f3] text-[#000] border-l-4 border-b-4 border-[#ffae03] px-4 py-2 rounded-lg" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-[#fff] mb-1">Mensaje</label>
                        <textarea name="mensaje" rows="4" 
                        class="w-full bg-[#f3f3f3] text-[#000] border-l-4 border-b-4 border-[#ffae03] px-4 rounded-lg" required></textarea>
                        
                    </div>
                    <button type="submit" class="w-full bg-[#ffae03] text-[#000] py-3 px-8 rounded-lg hover:bg-[#f7e0c8] transition">
                        Enviar Mensaje
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Separator -->
    <?php include 'Views/public/html/components/separator.php'; ?>
    <!-- Footer -->
    <?php include __DIR__ . "/Views/public/html/components/footer.php";?>


    <!-- Agrega esta línea en tu HTML -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="Views/public/js/main.js"></script>
    <script src="Views/public/js/form.js"></script>

</body>
</html>
