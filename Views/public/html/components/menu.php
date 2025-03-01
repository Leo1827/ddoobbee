<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<?php if (!isset($page)) $page = ''; ?>

<!-- menu.php -->
<div id="menu" class="hidden lg:flex justify-center items-center h-14 bg-[#f7e0c8]">
    <ul class="flex space-x-12 text-lg font-bold px-6 pt-3">
    <li class="bg-[#000] rounded border border-[#000] pb-2 pl-2 hover:text-black hover:bg-[#e495ae]">
            <a href="<?= BASE_URL ?>index.php" 
               class='px-4 rounded text-[#fff] bg-[#ed563a] py-2 border border-[#000] hover:bg-[#fff]
                <?= ($page == 'home') 
                    ? 'bg-[#fff] text-[#000] text-black' 
                    : 'hover:text-black hover:bg-[#ed563a]'; ?>
                '>
                <?= $texts[$lang]['main1'] ?>
            </a>
        </li>
        <li class="bg-[#000] rounded border border-[#000] pb-2 pl-2 hover:text-black hover:bg-[#e495ae]">
            <a href="<?= BASE_URL ?>products.php" 
                class="px-4 rounded text-[#fff] bg-[#ed563a] py-2 border border-[#000] hover:bg-[#fff]
                <?= ($page == 'products') 
                    ? 'bg-[#fff] text-[#000] text-black'
                    : 'hover:text-[#ffb400] hover:bg-[#ed563a]'; ?>">
                <?= $texts[$lang]['main2'] ?>
            </a>
        </li>
        <li class="bg-[#000] rounded border border-[#000] pb-2 pl-2 hover:text-black hover:bg-[#e495ae]">
            <a href="<?= BASE_URL ?>about.php" 
                class="px-4 rounded text-[#fff] bg-[#ed563a] py-2 border border-[#000] hover:bg-[#fff] 
                <?= ($page == 'about') 
                ? 'bg-[#fff] text-[#000] text-black'
                : 'hover:text-[#ffb400] hover:bg-[#ed563a]'; ?>">
                <?= $texts[$lang]['main3'] ?>
            </a>
        </li>
        <li class="bg-[#000] rounded border border-[#000] pb-2 pl-2 hover:text-black hover:bg-[#e495ae]">
            <a href="<?= BASE_URL ?>contact.php" 
                class="px-4 rounded text-[#fff] bg-[#ed563a] py-2 border border-[#000] hover:bg-[#fff] 
                <?= ($page == 'contact') 
                ? 'bg-[#fff] text-[#000] text-black'
                : 'hover:text-[#ffb400] hover:bg-[#ed563a]'; ?>">
                <?= $texts[$lang]['main4'] ?>
            </a>
        </li>
    </ul>

</div>

<!-- Menú desplegable en móvil -->
<div id="mobile-menu" class="hidden lg:hidden bg-black bg-opacity-90 w-full text-center py-4 mt-10">
    <ul>
        <li>
            <a href="/" class="block py-2 px-4 hover:bg-white hover:text-black">
                <?= $texts[$lang]['main1'] ?>
            </a>
        </li>
        <li>
            <a href="productos.php" class="block py-2 px-4 hover:bg-white hover:text-black">
                <?= $texts[$lang]['main2'] ?>
            </a>
        </li>
        <li>
            <a href="exclusivos.php" class="block py-2 px-4 hover:bg-white hover:text-black">
                <?= $texts[$lang]['main3'] ?>
            </a>
        </li>
        <li>
            <a href="contacto.php" class="block py-2 px-4 hover:bg-white hover:text-black">
                <?= $texts[$lang]['main4'] ?>
            </a>
        </li>
    </ul>
</div>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        let mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });
</script>
