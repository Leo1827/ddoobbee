<nav class="md:px-32 fixed top-0 left-0 w-full z-50">
    <div class="container mx-auto flex justify-between items-center px-6 mt-2">
        <a href="index.php" class="text-3xl font-extrabold tracking-wide hover:text-4xl">
            DDOOBBEE
        </a>

        <div class="flex items-center space-x-4">
            <form method="POST">
                <select name="lang" onchange="this.form.submit()" 
                    class="md:px-4 sm:px-0 text-sm py-2 text-white font-semibold rounded-full bg-black bg-opacity-50 border-2 border-purple-300 hover:bg-purple-900 transition-all duration-300 cursor-pointer">
                    <option value="es" <?= $lang == 'es' ? 'selected' : '' ?>>🌿 Español</option>
                    <option value="en" <?= $lang == 'en' ? 'selected' : '' ?>>🔥 English</option>
                </select>
            </form>
            
        </div>
        <button id="menu-toggle" class="lg:hidden text-white text-3xl">
                ☰
        </button>
    </div>

    <?php include 'menu.php'; ?>
    
</nav>
