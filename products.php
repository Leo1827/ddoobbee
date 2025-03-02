<!-- english/spanish module -->
<?php include 'lang/en-es.php'; ?>
<?php include 'lang/lang_page.php'; ?>
<?php require_once __DIR__ . "/config/config.php";?>
<?php
$productos = include 'productos/productos.php';
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
    <!-- style -->
    <link type="text/css" rel="stylesheet" href="Views/public/css/style.css"  >
    <title>DDOOBBEE</title>

</head>
<body class="text-[#33135c]">
    <!-- Preloader -->
    <div id="preloader">
        <img src="https://i.gifer.com/5RTK.gif" alt="Cargando..." width="200">
    </div>
    <!-- modal age 18 years old -->
    <?php include 'Views/public/html/components/modalAge.php'; ?>
    <!-- nav and main -->
    <?php $page = 'products'; include __DIR__ . "/Views/public/html/components/navbar.php"; ?>
    <!-- Content -->
    <section class="md:px-32 p-10 py-12 mt-32">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center mb-10 text-gray-800">Productos</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
                <?php
                $productos = [
                    ["id" => 1, "nombre" => "Chocolate", "imagen" => "Views/public/images/product_1/1.jpg"],
                    ["id" => 2, "nombre" => "Fresa", "imagen" => "Views/public/images/product_2/1.jpg"],
                    ["id" => 3, "nombre" => "Indubious Black", "imagen" => "Views/public/images/product_3/1.jpg"],
                    ["id" => 4, "nombre" => "Bonkers Brown", "imagen" => "Views/public/images/product_4/1.jpg"],
                    ["id" => 5, "nombre" => "Grinders", "imagen" => "Views/public/images/product_5/1.png"],
                    ["id" => 5, "nombre" => "Bandejas", "imagen" => "Views/public/images/product_6/1.jpg"],
                ];

                foreach ($productos as $producto) :
                ?>
                <div class="relative group overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300">
                    <img src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>" 
                        class="w-full h-96 object-cover transform group-hover:scale-110 transition-all duration-500">

                    <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-80 group-hover:opacity-100 transition-all duration-500"></div>

                    <div class="absolute bottom-5 left-5 right-5 text-white">
                        <h3 class="text-2xl font-semibold drop-shadow-md"><?php echo $producto['nombre']; ?></h3>
                    </div>
                    
                    <a href="product_single.php?id=<?= urlencode($producto['id']) ?>"
                        class="absolute bottom-4 right-2 bg-green-600 text-white px-5 py-2 rounded-lg text-sm opacity-0 group-hover:opacity-100 transition-all duration-500 shadow-md hover:bg-green-700"
                        >
                        Más Información
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Separator -->
    <?php include 'Views/public/html/components/separator.php'; ?>

    <script>
        document.getElementById('next').addEventListener('click', function () {
            document.getElementById('carousel').scrollBy({ left: 300, behavior: 'smooth' });
        });

        document.getElementById('prev').addEventListener('click', function () {
            document.getElementById('carousel').scrollBy({ left: -300, behavior: 'smooth' });
        });
    </script>
    
    <!-- Footer -->
    <?php include __DIR__ . "/Views/public/html/components/footer.php";?>

    <!-- Swiper JS antes de main.js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="Views/public/js/main.js"></script>

    
</body>
</html>
