<section class="px-6 py-12 mt-10">
    <div class="container mx-auto">
        <h2 class="text-4xl font-bold text-center mb-10">Nuestros Productos</h2>

        <div class="relative">
            <div id="carousel" class="flex space-x-6 overflow-x-scroll scroll-smooth scrollbar-hide">
                <?php
                $productos = [
                    ["id" => 1, "nombre" => "Chocolate", "imagen" => "Views/public/images/product_1/1.jpg"],
                    ["id" => 2, "nombre" => "Fresa", "imagen" => "Views/public/images/product_2/1.jpg"],
                    ["id" => 3, "nombre" => "Indubious Black", "imagen" => "Views/public/images/product_3/1.jpg"],
                    ["id" => 4, "nombre" => "Bonkers Brown", "imagen" => "Views/public/images/product_4/1.jpg"],
                    ["id" => 5, "nombre" => "Grinders", "imagen" => "Views/public/images/product_5/1.png"],
                    ["id" => 6, "nombre" => "Bandejas", "imagen" => "Views/public/images/product_6/1.jpg"],
                ];

                foreach ($productos as $producto) :
                ?>
                <div class="min-w-[250px] relative rounded-xl shadow-lg overflow-hidden cursor-pointer" onclick="openGallery('<?php echo $producto['imagen']; ?>')">
                    <img src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>" 
                        class="w-full h-80 object-cover hover:scale-105 transition-transform duration-300">

                    <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-70 text-white p-4 text-center">
                        <h3 class="text-lg font-semibold"><?php echo $producto['nombre']; ?></h3>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Botones de Navegación -->
            <button id="prev" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-3 rounded-full shadow-md hover:bg-gray-700">
                &#10094;
            </button>
            <button id="next" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-3 rounded-full shadow-md hover:bg-gray-700">
                &#10095;
            </button>
        </div>
    </div>
</section>

<!-- Galería Modal -->
<div id="galleryModal" class="fixed inset-0 bg-black bg-opacity-90 flex items-center justify-center z-50 hidden">
    <div class="relative mb-52 sm:max-w-[90vw] md:max-w-[30vw] md:max-h-[30vh]">
        <button onclick="closeGallery()" class="absolute top-2 right-2 bg-white text-black p-2 rounded-full shadow-md">✖</button>
        <img id="galleryImage" class="max-w-full max-h-full rounded-lg shadow-lg">
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const carousel = document.getElementById("carousel");
    const prevBtn = document.getElementById("prev");
    const nextBtn = document.getElementById("next");

    prevBtn.addEventListener("click", () => {
        carousel.scrollBy({ left: -300, behavior: "smooth" });
    });

    nextBtn.addEventListener("click", () => {
        carousel.scrollBy({ left: 300, behavior: "smooth" });
    });
});

// Función para abrir la galería
function openGallery(imageSrc) {
    document.getElementById("galleryImage").src = imageSrc;
    document.getElementById("galleryModal").classList.remove("hidden");
}

// Función para cerrar la galería
function closeGallery() {
    document.getElementById("galleryModal").classList.add("hidden");
}
</script>
