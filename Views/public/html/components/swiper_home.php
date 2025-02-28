<!-- Contenedor del slider -->
<section class="mx-auto px-4 mt-20 opacity-0 translate-y-10 transition-all duration-1000 ease-in-out" id="home">
    <div class="swiper-container relative">
        <div class="swiper-wrapper">
            <!-- SLIDE 1 -->
            <div class="swiper-slide flex flex-col md:flex-row items-center justify-center bg-gray-100 p-8 rounded-lg">
                <div class="flex flex-col items-center">
                    <img src="Views/public/images/product.png" alt="Ghost" class="w-60 md:w-96">
                    <div class="text-center mt-4">
                        <h4 class="text-xl font-bold text-gray-900">
                            <?= $texts[$lang]['titleSwiper1'] ?>
                        </h4>
                        <span class="text-sm text-gray-500">
                            <?= $texts[$lang]['textSwiper1'] ?>
                        </span>
                    </div>
                </div>
                <div class="text-center ml-6 md:text-left">
                    <h3 class="text-lg font-semibold">
                        <?= $texts[$lang]['titleSwiper2'] ?>
                    </h3>
                    <h1 class="text-3xl md:text-5xl font-bold leading-tight">
                        <?= $texts[$lang]['titleSwiper3'] ?>
                    </h1>
                    <p class="mt-4 text-gray-600 max-w-md">
                        <?= $texts[$lang]['textSwiper2'] ?>
                    </p>
                    <div class="mt-6 flex gap-4">
                        <a href="#" class="bg-[#33135c] text-white py-2 px-5 rounded-md shadow-md hover:bg-orange-700">
                            <?= $texts[$lang]['btnSwiper1'] ?>
                        </a>
                    </div>
                </div>
            </div>

            <!-- SLIDE 2 -->
            <div class="swiper-slide flex flex-col md:flex-row items-center justify-center bg-gray-100 p-8 rounded-lg">
                <div class="flex flex-col items-center">
                    <img src="Views/public/images/product1.png" alt="Ghost" class="w-60 md:w-96">
                    <div class="text-center mt-4">
                        <h4 class="text-xl font-bold text-gray-900">Adino & Grahami</h4>
                        <span class="text-sm text-gray-500">No words can describe them</span>
                    </div>
                </div>
                <div class="ml-6 text-center md:text-left">
                    <h3 class="text-lg font-semibold">#2 Top Best Duo</h3>
                    <h1 class="text-3xl md:text-5xl font-bold leading-tight">BRING BACK <br> MY COTTON <br> CANDY</h1>
                    <p class="mt-4 text-gray-600 max-w-md">Adino steals cotton candy from his brother and eats them all in one bite, a hungry beast. Grahami can no longer contain his anger towards Adino.</p>
                    <div class="mt-6 flex gap-4">
                        <a href="#" class="bg-[#33135c] text-white py-2 px-5 rounded-md shadow-md hover:bg-orange-700">Book Now</a>
                        <a href="#" class="font-semibold flex items-center">Track Record <i class="bx bx-right-arrow-alt ml-1"></i></a>
                    </div>
                </div>
            </div>

            <!-- SLIDE 3 -->
            <div class="swiper-slide flex flex-col md:flex-row items-center justify-center bg-gray-100 p-8 rounded-lg">
                <div class="flex flex-col items-center">
                    <img src="Views/public/images/product2.png" alt="Ghost" class="w-60 md:w-96">
                    <div class="text-center mt-4">
                        <h4 class="text-xl font-bold text-gray-900">Captain Sem</h4>
                        <span class="text-sm text-gray-500">Veteran Spooky Ghost</span>
                    </div>
                </div>
                <div class="ml-6 text-center md:text-left">
                    <h3 class="text-lg font-semibold">#3 Top Scariest Ghost</h3>
                    <h1 class="text-3xl md:text-5xl font-bold leading-tight">RESPAWN <br> THE SPOOKY <br> SKULL</h1>
                    <p class="mt-4 text-gray-600 max-w-md">In search for cute little puppy, Captain Sem has come back from his tragic death. With his hogwarts certified power he promises to be a hero for all of ghostkind.</p>
                    <div class="mt-6 flex gap-4">
                        <a href="#" class="bg-[#33135c] text-white py-2 px-5 rounded-md shadow-md hover:bg-orange-700">Book Now</a>
                        <a href="#" class="font-semibold flex items-center">Track Record <i class="bx bx-right-arrow-alt ml-1"></i></a>
                    </div>
                </div>
            </div>
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
