<nav class="md:px-32 fixed top-0 left-0 w-full z-50 bg-[#f7e0c8] shadow border-b-4 border-[#f3533d]">
    <!-- Nube 1 -->
    <img src="Views/public/images/ilustraciones/3.png" alt="nube" 
        class="absolute top-0 left-2/2 w-[100px] ml-56 hidden lg:flex opacity-8 z-10 pointer-events-none">
    <!-- Nube 2 -->
    <img src="Views/public/images/ilustraciones/3.png" alt="nube" 
        class="absolute top-0 left-0 w-[180px] ml-4 mt-4 hidden lg:flex opacity-8 z-0 pointer-events-none">    
    <!-- Cara -->
    <img src="Views/public/images/ilustraciones/4.png" alt="flor" 
        class="absolute top-12 right-4 hidden lg:flex img-fluid opacity-8 z-0 pointer-events-none">

    <div class="container mx-auto flex justify-between items-center px-6 mt-2">
        <!-- logo -->
        <a href="index.php" class="border-2 bg-[#333] pb-1 pl-1 rounded-xl mt-4">
            <img src="Views/public/images/ilustraciones/logo.png" 
                class="lg:w-52 w-32 ml-2 border-2 border-[#eb9aa5] bg-[#cb5840] rounded-lg" alt="">
        </a>

        <div class="flex items-center space-x-6">
            <!-- Íconos de redes sociales -->
            <div class="hidden md:flex space-x-3">
                <span class="rounded-full bg-[#fff] w-12 h-12 shadow">
                    <a href="https://www.facebook.com/"target="_blank" 
                        class="w-10 h-10 ml-2 shadow flex items-center justify-center rounded-full bg-[#fff] border-2 border-[#edb01a] hover:bg-[#e994b9] transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current text-[#cb5840] hover:text-[#fff]" viewBox="0 0 24 24">
                            <path d="M22,12A10,10,0,1,0,10,22V14H7v-2h3V9.5A3.5,3.5,0,0,1,13.5,6H17V8H13.5A1.5,1.5,0,0,0,12,9.5V12h4l-1,2H12v8A10,10,0,0,0,22,12Z"/>
                        </svg>
                    </a>
                </span>
                <span class="rounded-full bg-[#fff] w-12 h-12 shadow">
                    <a href="https://www.instagram.com/" target="_blank" 
                        class="w-10 h-10 shadow ml-2 bg-[#fff] border-2 border-[#edb01a] hover:bg-[#e994b9]  flex items-center justify-center rounded-full transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current text-[#cb5840] hover:text-[#fff]" viewBox="0 0 24 24">
                            <path d="M7,2A5,5,0,0,0,2,7V17a5,5,0,0,0,5,5H17a5,5,0,0,0,5-5V7A5,5,0,0,0,17,2ZM12,7A5,5,0,1,1,7,12,5,5,0,0,1,12,7Zm5,1a1,1,0,1,1-1,1A1,1,0,0,1,17,8Zm-5,2a3,3,0,1,0,3,3A3,3,0,0,0,12,10Z"/>
                        </svg>
                    </a>
                </span>
            </div>

            <!-- Selector de idioma -->
            <form method="POST" class="bg-[#fff] pb-1 rounded-full mt-3 lg:mt-0">
                <select name="lang" onchange="this.form.submit()" 
                    class="md:px-4 text-[#cb5840] sm:px-0 text-sm py-2 ml-2 font-semibold rounded-full bg-[#fff] border-2 border-[#ffac06] hover:bg-[#e994b9] hover:text-[#fff] transition-all duration-300 cursor-pointer">
                    <option value="es" <?= $lang == 'es' ? 'selected' : '' ?>>🌿 Español</option>
                    <option value="en" <?= $lang == 'en' ? 'selected' : '' ?>>🔥 English</option>
                </select>
            </form>
        </div>

        <button id="menu-toggle" class="lg:hidden text-black text-3xl ml-5">
            ☰
        </button>
        
    </div>

    <!-- Barras -->
    <img src="Views/public/images/ilustraciones/1.png" alt="barras" 
        class="absolute barras_responsive left-1/2 top-6 hidden lg:flex transform -translate-x-1/2 w-100 z-50 pointer-events-none">


    <?php include 'menu.php'; ?>
</nav>
