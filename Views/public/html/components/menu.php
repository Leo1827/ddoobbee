<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<?php if (!isset($page)) $page = ''; ?>

<!-- menu.php -->
<div id="menu" class="hidden lg:flex justify-center items-center h-14">
    <ul class="flex space-x-20 text-lg font-bold px-6 py-3">
        <li>
            <a href="<?= BASE_URL ?>index.php" class="px-4 py-2 <?= ($page == 'home') ? 'border-b-4 border-[#33135c] text-black' : 'hover:text-black hover:bg-white'; ?>">
                <?= $texts[$lang]['main1'] ?>
            </a>
        </li>
        <li>
            <a href="<?= BASE_URL ?>products.php" class="px-4 py-2 <?= ($page == 'products') ? 'border-b-4 border-[#33135c] text-black' : 'hover:text-black hover:bg-white'; ?>">
                <?= $texts[$lang]['main2'] ?>
            </a>
        </li>
        <li>
            <a href="<?= BASE_URL ?>about.php" class="px-4 py-2 <?= ($page == 'about') ? 'border-b-4 border-[#33135c] text-black' : 'hover:text-black hover:bg-white'; ?>">
                <?= $texts[$lang]['main3'] ?>
            </a>
        </li>
        <li>
            <a href="<?= BASE_URL ?>contact.php" class="px-4 py-2 <?= ($page == 'contact') ? 'border-b-4 border-[#33135c] text-black' : 'hover:text-black hover:bg-white'; ?>">
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
