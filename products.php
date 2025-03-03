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
<body class="text-[#33135c] bg-[#f7e0c8]">
    <!-- Preloader -->
    <div id="preloader">
        <img src="https://i.gifer.com/5RTK.gif" alt="Cargando..." width="200">
    </div>
    <!-- modal age 18 years old -->
    <?php include 'Views/public/html/components/modalAge.php'; ?>
    <!-- nav and main -->
    <?php $page = 'products'; include __DIR__ . "/Views/public/html/components/navbar.php"; ?>
    <!-- Seperator products title -->
    <section class="relative border-4 border-[#000] h-72 bg-fixed opacity-20 bg-center bg-cover flex items-center justify-center" 
        style="background-image: url('Views/public/images/parallax-background.jpg');">
        
    </section>

    <!-- Content -->
    <section class="md:px-32 p-10 pb-12 ">
    
        <div class="container mx-auto">
            <h2 class="text-6xl  border-l-8 border-[#ef5838] rounded-xl text-center sahdow-xl text-[#7c5eac]">
                Productos
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <?php
                    $productos = [
                        ["id" => 1, "nombre" => "Indubious black", "imagen" => "Views/public/images/product_1/1.png"],
                        ["id" => 2, "nombre" => "Bonkers Brown", "imagen" => "Views/public/images/product_2/1.png"],
                        ["id" => 3, "nombre" => "Uva", "imagen" => "Views/public/images/product_3/1.png"],
                        ["id" => 4, "nombre" => "Chocolate", "imagen" => "Views/public/images/product_4/1.png"],
                        ["id" => 5, "nombre" => "Fresa", "imagen" => "Views/public/images/product_5/1.png"],
                        ["id" => 6, "nombre" => "Pure Hemp", "imagen" => "Views/public/images/product_6/1.png"],
                        ["id" => 7, "nombre" => "Pre-enrolados", "imagen" => "Views/public/images/product_7/1.png"],
                        ["id" => 8, "nombre" => "Conos", "imagen" => "Views/public/images/product_7/2.png"],
                        ["id" => 9, "nombre" => "Filtro papel Blanco", "imagen" => "Views/public/images/product_8/1.png"],
                        ["id" => 10, "nombre" => "Filtro Chocolate", "imagen" => "Views/public/images/product_9/1.png"],
                        ["id" => 11, "nombre" => "Filtro papel crema", "imagen" => "Views/public/images/product_10/1.png"],
                        ["id" => 11, "nombre" => "Accesorios", "imagen" => "Views/public/images/product_11/1.png"],
                    ];

                    foreach ($productos as $producto) :
                ?>
                <div class="relative group rounded-xl psychedelic-bg border-b-2 border-l-4 border-[#333] transition-all duration-300 my-4">

                    <img src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>" 
                        class="w-full shadow h-96 object-cover transform group-hover:scale-110 transition-all duration-500">

                    <!-- <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-80 group-hover:opacity-100 transition-all duration-500"></div> -->

                    <div class="absolute top-4 left-5 right-5 text-[#333] bg-[#f7e0c8] rounded-lg" style="opacity: 70% !important;">
                        <h3 class="text-2xl ml-4 font-semibold drop-shadow-md p-1" style="opacity:95%;">
                            <?php echo $producto['nombre']; ?>
                        </h3>
                    </div>
                    
                    <a href="product_single.php?id= <?= urlencode($producto['id']) ?>"
                        class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-[#ca584e] text-white hover:text-[#000] px-5 py-2 rounded-lg text-sm opacity-0 group-hover:opacity-100 transition-all duration-500 shadow-md hover:bg-[#f7e0c8]"
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
