<?php
$slides = [
    [
        'img' => 'Views/public/images/product.png',
        'alt' => 'Ghost',
        'title1' => $texts[$lang]['titleSwiper1'],
        'text1' => $texts[$lang]['textSwiper1'],
        'title2' => $texts[$lang]['titleSwiper2'],
        'title3' => $texts[$lang]['titleSwiper3'],
        'text2' => $texts[$lang]['textSwiper2'],
        'btnText' => $texts[$lang]['btnSwiper1'],
        'btnLink' => 'product_single.php?id=' . urlencode(1) // Reemplaza con el ID real
    ],
    [
        'img' => 'Views/public/images/product1.png',
        'alt' => 'Ghost',
        'title1' => 'Adino & Grahami',
        'text1' => 'No words can describe them',
        'title2' => '#2 Top Best Duo',
        'title3' => 'BRING BACK <br> MY COTTON <br> CANDY',
        'text2' => 'Adino steals cotton candy from his brother and eats them all in one bite, a hungry beast. Grahami can no longer contain his anger towards Adino.',
        'btnText' => 'Book Now',
        'btnLink' => 'product_single.php?id=' . urlencode(2) // Reemplaza con el ID real
    ],
    [
        'img' => 'Views/public/images/product2.png',
        'alt' => 'Ghost',
        'title1' => 'Captain Sem',
        'text1' => 'Veteran Spooky Ghost',
        'title2' => '#3 Top Scariest Ghost',
        'title3' => 'RESPAWN <br> THE SPOOKY <br> SKULL',
        'text2' => 'In search for cute little puppy, Captain Sem has come back from his tragic death. With his hogwarts certified power he promises to be a hero for all of ghostkind.',
        'btnText' => 'Book Now',
        'btnLink' => 'product_single.php?id=' . urlencode(3) // Reemplaza con el ID real
    ]
];
?>

<!-- Contenedor del slider -->
<section class="mx-auto px-4 mt-20 opacity-0 translate-y-10 transition-all duration-1000 ease-in-out" id="home">
    <div class="swiper-container relative">
        <div class="swiper-wrapper">
            <?php foreach ($slides as $slide): ?>
                <div class="swiper-slide flex flex-col md:flex-row items-center justify-center p-8 rounded-lg">
                    <div class="flex flex-col items-center">
                        <img src="<?= $slide['img'] ?>" alt="<?= $slide['alt'] ?>" class="w-60 md:w-96">
                        <div class="text-center mt-4">
                            <h4 class="text-xl font-bold text-gray-900"><?= $slide['title1'] ?></h4>
                            <span class="text-sm text-gray-500"><?= $slide['text1'] ?></span>
                        </div>
                    </div>
                    <div class="text-center ml-6 md:text-left">
                        <h3 class="text-lg font-semibold"><?= $slide['title2'] ?></h3>
                        <h1 class="text-3xl md:text-5xl font-bold leading-tight"><?= $slide['title3'] ?></h1>
                        <p class="mt-4 text-gray-600 max-w-md"><?= $slide['text2'] ?></p>
                        <div class="mt-6 flex gap-4">
                            <a href="<?= $slide['btnLink'] ?>" class="bg-[#33135c] text-white py-2 px-5 rounded-md shadow-md hover:bg-orange-700">
                                <?= $slide['btnText'] ?>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Botones de navegación -->
        <div class="swiper-button-prev text-[#33135c]"></div>
        <div class="swiper-button-next text-[#33135c]"></div>

        <!-- Paginación -->
        <div class="swiper-pagination"></div>
    </div>
</section>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="Views/public/js/main.js"></script>
