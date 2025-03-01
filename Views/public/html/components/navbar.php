<nav class="md:px-32 fixed top-0 left-0 w-full z-50 bg-[#f7e0c8] shadow border-b-2 border-[#f3533d]">
    <div class="container mx-auto flex justify-between items-center px-6 mt-2">
        <a href="index.php" class="text-3xl font-extrabold tracking-wide hover:text-4xl mt-4">
            DDOOBBEE
        </a>

        <div class="flex items-center space-x-6">
            <!-- Íconos de redes sociales -->
            <div class="hidden md:flex space-x-3">
                <a href="https://www.facebook.com/" target="_blank" 
                    class="w-10 h-10 flex items-center justify-center rounded-full bg-[#fff] border-2 border-[#edb01a] text-gray-600 hover:bg-gray-700 hover:text-white transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current text-[#cb5840]" viewBox="0 0 24 24">
                        <path d="M22,12A10,10,0,1,0,10,22V14H7v-2h3V9.5A3.5,3.5,0,0,1,13.5,6H17V8H13.5A1.5,1.5,0,0,0,12,9.5V12h4l-1,2H12v8A10,10,0,0,0,22,12Z"/>
                    </svg>
                </a>
                <a href="https://www.instagram.com/" target="_blank" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-300 text-gray-600 hover:bg-gray-700 hover:text-white transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                        <path d="M7,2A5,5,0,0,0,2,7V17a5,5,0,0,0,5,5H17a5,5,0,0,0,5-5V7A5,5,0,0,0,17,2ZM12,7A5,5,0,1,1,7,12,5,5,0,0,1,12,7Zm5,1a1,1,0,1,1-1,1A1,1,0,0,1,17,8Zm-5,2a3,3,0,1,0,3,3A3,3,0,0,0,12,10Z"/>
                    </svg>
                </a>
            </div>

            <!-- Selector de idioma -->
            <form method="POST">
                <select name="lang" onchange="this.form.submit()" 
                    class="md:px-4 sm:px-0 text-sm py-2 text-white font-semibold rounded-full bg-black bg-opacity-50 border-2 border-purple-300 hover:bg-purple-900 transition-all duration-300 cursor-pointer">
                    <option value="es" <?= $lang == 'es' ? 'selected' : '' ?>>🌿 Español</option>
                    <option value="en" <?= $lang == 'en' ? 'selected' : '' ?>>🔥 English</option>
                </select>
            </form>
        </div>

        <button id="menu-toggle" class="lg:hidden text-black text-3xl">
            ☰
        </button>
        
    </div>
    <!-- Ilustracion encima del menú -->
    <img src="Views/public/images/ilustraciones/1.png" alt="Decoración menú" 
        class="absolute left-1/2 top-6 hidden lg:flex transform -translate-x-1/2 w-100 z-50 pointer-events-none">

    <?php include 'menu.php'; ?>
</nav>
