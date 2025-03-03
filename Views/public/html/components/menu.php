<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<?php if (!isset($page)) $page = ''; ?>

<!-- menu.php -->
<div id="menu" class="hidden lg:flex justify-center items-center h-14 bg-[#f7e0c8]">
    <ul class="flex space-x-12 text-lg px-6 ">
        <li class="bg-[#000] rounded border border-[#000] pb-2 pl-2 hover:bg-[#e495ae]">
            <a href="<?= BASE_URL ?>index.php" 
               class='px-4 rounded text-[#fff] bg-[#ed563a] py-2 border border-[#000] hover:bg-[#fff]
                <?= ($page == 'home') 
                    ? 'bg-[#fff] text-[#000] text-black' 
                    : 'hover:text-black hover:bg-[#ed563a]'; ?>
                '>
                <?= $texts[$lang]['main1'] ?>
            </a>
        </li>
        <li class="bg-[#000] rounded border border-[#000] pb-2 pl-2 hover:bg-[#e495ae]">
            <a href="<?= BASE_URL ?>products.php" 
                class="px-4 rounded text-[#fff] py-2 border border-[#000] hover:bg-[#7c5eac]
                <?= ($page == 'products') 
                    ? 'bg-[#7c5eac] text-[#fff]'
                    : 'hover:text-[#fff] bg-[#ed563a] hover:bg-[#7c5eac]'; ?>">
                <?= $texts[$lang]['main2'] ?>
            </a>
        </li>
        <li class="bg-[#000] rounded border border-[#000] pb-2 pl-2 hover:bg-[#e495ae]">
            <a href="<?= BASE_URL ?>about.php" 
                class="px-4 rounded text-[#fff] py-2 border border-[#000] hover:bg-[#238eab] 
                <?= ($page == 'about') 
                ? 'bg-[#238eab] text-[#fff]'
                : 'hover:text-[#fff] bg-[#ed563a] hover:bg-[#238eab]'; ?>">
                <?= $texts[$lang]['main3'] ?>
            </a>
        </li>
        <li class="bg-[#000] rounded border border-[#000] pb-2 pl-2 hover:text-black hover:bg-[#e495ae]">
            <a href="<?= BASE_URL ?>contact.php" 
                class="px-4 rounded text-[#fff] py-2 border border-[#000] hover:bg-[#57ac83] 
                <?= ($page == 'contact') 
                ? 'bg-[#57ac83] text-[#000]'
                : 'hover:text-[#fff] bg-[#ed563a] hover:bg-[#57ac83]'; ?>">
                <?= $texts[$lang]['main4'] ?>
            </a>
        </li>
    </ul>

</div>

<!-- Menú desplegable en móvil -->
<div id="mobile-menu" class="hidden lg:hidden w-full text-center py-4 mt-10">
    <ul>
        <li>
            <a href="<?= BASE_URL ?>index.php" class="block py-2 px-4 text-[#fd5138]">
                <?= $texts[$lang]['main1'] ?>
            </a>
        </li>
        <li>
            <a href="<?= BASE_URL ?>products.php" href="productos.php" class="block py-2 px-4 text-[#fd5138]">
                <?= $texts[$lang]['main2'] ?>
            </a>
        </li>
        <li>
            <a href="<?= BASE_URL ?>about.php" class="block py-2 px-4 text-[#fd5138]">
                <?= $texts[$lang]['main3'] ?>
            </a>
        </li>
        <li>
            <a href="<?= BASE_URL ?>contact.php"  class="block py-2 px-4 text-[#fd5138]">
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
