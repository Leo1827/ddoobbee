<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
}
    $lang = $_SESSION['lang'] ?? 'es';

    // Textos en diferentes idiomas
    $texts = [
        'es' => [
            'welcome' => 'DDOOBBEE',
            // main
            'main1' => 'Inicio',
            'main2' => 'Productos',
            'main3' => 'Sobre nosotros',
            'main4' => 'Contacto',
            // swiper
            'titleSwiper1' => 'DDOOBBEE',
            'titleSwiper2' => '#1 Sabor inolvidable',
            'titleSwiper3' => 'Dulces Uvas',
            'textSwiper1' => 'Sabor, calidad y estilo',
            'textSwiper2' => 'PAPEL #9 DE SABOR PARA LIAR , COMBUSTION LENTA. SABOR STRAWBERRY/UVA. Cantidad de menos- DDOOBBEE/STRAWBERRY',
            'btnSwiper1' => 'Mas información',
        ],
        'en' => [
            'welcome' => 'DDOOBBEE',
            // main
            'main1' => 'Home',
            'main2' => 'Products',
            'main3' => 'About Us',
            'main4' => 'Contact',
            // swiper
            'titleSwiper1' => 'DDOOBBEE',
            'titleSwiper2' => '#1 Flavor Unique',
            'titleSwiper3' => 'Sweet grape',
            'textSwiper1' => 'Flavor, quality and style',
            'textSwiper2' => 'FLAVOR ROLLING PAPER #9, SLOW COMBUSTION. STRAWBERRY/GRAPE FLAVOR. Less quantity- DDOOBBE/STRAWBERRY',
            'btnSwiper1' => 'More info',
        ]
    ];
?>