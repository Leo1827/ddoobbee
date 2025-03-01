<!-- english/spanish module -->
<?php include 'lang/en-es.php'; ?>
<?php include 'lang/lang_page.php'; ?>
<?php require_once("config/config.php"); ?>
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
    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- style -->
    <link type="text/css" rel="stylesheet" href="Views/public/css/style.css"  >
    <title>DDOOBBEE</title>

</head>
<body class="text-[#feb101] bg-[#f7e0c8]">
    <!-- Preloader -->
    <div id="preloader">
        <img src="https://i.gifer.com/5RTK.gif" alt="Cargando..." width="200">
    </div>
    <!-- modal age 18 years old -->
    <?php include 'components/modalAge.php'; ?>
    <!-- nav and main -->
    <?php $page = "home"; include 'components/navbar.php'; ?>
    <!-- Swiper home -->
    <?php include 'components/swiper_home.php'; ?>
    <!-- Separator -->
    <?php include 'components/separator.php'; ?>

    <!-- Footer -->
    <?php include 'components/footer.php'; ?>
    <!-- Swiper JS antes de main.js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="Views/public/js/main.js"></script>
</body>
</html>
