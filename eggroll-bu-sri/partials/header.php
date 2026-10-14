<?php
// partials/header.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eggroll Bu Sri - Gurih & Renyah</title>
    <!-- Tailwind (boleh dipertahankan) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/pesan.css">
</head>
<body class="bg-[#fff9f0] text-[#3a3a3a]">
    <!-- Navigation -->
    <nav class="bg-amber-600 text-white shadow-lg">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center space-x-2">   
                <img src="assets/img/NEW LOGO.png" alt="Sri Delight Eggroll" class="h-10 rounded-full" onerror="this.src='https://via.placeholder.com/40x40?text=EB'">
                <a href="beranda.php" class="text-xl font-bold">Sri Delight Eggroll</a>
            </div>
            <div class="hidden md:flex space-x-6">
                <!-- <a href="beranda.php" class="hover:text-amber-200 transition">Beranda</a> -->
                <a href="produk.php" class="hover:text-amber-200 transition">Produk</a>
                <a href="tentang.php" class="hover:text-amber-200 transition">Tentang</a>
                <a href="testimoni.php" class="hover:text-amber-200 transition">Testimoni</a>
                <!-- <a href="pesan.php" class="hover:text-amber-200 transition">Pesan</a> -->
                <a href="kontak.php" class="hover:text-amber-200 transition">Kontak</a>
            </div>
            <div class="flex items-center space-x-4">
                <a href="pesan.php" class="bg-amber-700 hover:bg-amber-800 px-4 py-2 rounded-full font-medium transition">Pesan Sekarang</a>
                <button class="md:hidden text-2xl" id="menuToggle">
                    <i class="fas fa-bars"></i>
                </button>  
            </div>
        </div>
        <!-- Mobile Menu -->
        <div class="md:hidden hidden bg-amber-700 w-full" id="mobileMenu">
            <div class="container mx-auto px-4 py-3 flex flex-col space-y-3">
                <!-- <a href="beranda.php" class="hover:text-amber-200 transition">Beranda</a> -->
                <a href="produk.php" class="hover:text-amber-200 transition">Produk</a>
                <a href="tentang.php" class="hover:text-amber-200 transition">Tentang</a>
                <a href="testimoni.php" class="hover:text-amber-200 transition">Testimoni</a>
                <!-- <a href="pesan.php" class="hover:text-amber-200 transition">Pesan</a> -->
                <a href="kontak.php" class="hover:text-amber-200 transition">Kontak</a>
            </div>
        </div>
    </nav>
    <script src="assets/js/main.js"></script>
