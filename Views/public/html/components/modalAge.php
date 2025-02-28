<!-- Modal de verificación de edad -->
<div id="age-modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-80 backdrop-blur-md z-50 transition-opacity duration-300">
    <div class="bg-[#f3f3f3] p-8 rounded-2xl shadow-lg text-center max-w-md w-full">
    <h1 class="text-4xl font-bold mb-10"><?= $texts[$lang]['welcome'] ?></h1>
        <h2 class="text-3xl font-bold mb-4">¿Eres mayor de edad?</h2>
            <p class="mb-6 text-lg">Debes tener al menos 18 años para entrar.</p>
        <div class="flex space-x-4">
            <button id="btn-yes" class="w-1/2 py-3 bg-green-500 hover:bg-green-700 text-white font-bold rounded-lg transition-all duration-300">Sí, soy mayor</button>
            <button id="btn-no" class="w-1/2 py-3 bg-red-500 hover:bg-red-700 text-white font-bold rounded-lg transition-all duration-300">No, salir</button>
        </div>
    </div>
</div>

<script>
    // Modal home 18 years old
    document.addEventListener("DOMContentLoaded", function() {
        const ageModal = document.getElementById("age-modal");
        const btnYes = document.getElementById("btn-yes");
        const btnNo = document.getElementById("btn-no");

        // Verificar si ya aceptó la edad
        if (localStorage.getItem("isAdult") !== "true") {
            ageModal.style.display = "flex"; // Mostrar modal
            document.body.classList.add("modal-open"); // Bloquear scroll
        }

        btnYes.addEventListener("click", function() {
            localStorage.setItem("isAdult", "true");
            ageModal.style.display = "none";
            document.body.classList.remove("modal-open");
        });

        btnNo.addEventListener("click", function() {
            window.location.href = "https://www.google.com"; // Redirigir fuera del sitio
        });
    });
</script>