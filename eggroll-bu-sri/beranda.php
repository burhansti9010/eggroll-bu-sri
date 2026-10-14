<?php
require_once __DIR__ . '/partials/config.php';
require_once __DIR__ . '/partials/functions.php';
include __DIR__ . '/partials/header.php';
?>
<section id="home" class="hero-section flex items-center justify-center relative">  
    <div class="text-center text-white px-4 z-10">
        <h1 class="text-4xl md:text-6xl font-bold mb-4 animate-bounce">Sri Delight Eggroll</h1>
        <p class="text-xl md:text-2xl mb-8">Gurih, Renyah, dan Bikin Nagih!</p>
        <a href="produk.php" class="bg-amber-600 hover:bg-amber-700 text-white font-bold py-3 px-8 rounded-full text-lg transition inline-block">Lihat Produk</a>
    </div>
</section>

<div class="bg-amber-100 py-3">
    <div class="container mx-auto text-center">
        <p class="text-amber-800 font-medium">
            <span class="font-bold">PROMO HARI INI:</span> Belum Tersedia
        </p>  
    </div>
</div>

<?php include __DIR__ . '/partials/footer.php'; ?>
