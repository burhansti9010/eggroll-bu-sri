<?php
// partials/footer.php
$year = date('Y');
?>
    <footer class="bg-amber-800 text-white py-8 mt-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <div class="flex items-center space-x-2">
                        <img src="assets/img/NEW LOGO.png" alt="Logo Sri Delight Eggroll" class="h-8 rounded-full" onerror="this.src='https://via.placeholder.com/32x32?text=EB'">
                        <span class="text-lg font-bold">Sri Delight Eggroll</span>
                    </div>
                    <p class="mt-2 text-amber-200">Gurih, Renyah, Bikin Nagih!</p>
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="text-amber-200 hover:text-white transition">Kebijakan Privasi</a>
                    <a href="#" class="text-amber-200 hover:text-white transition">Syarat & Ketentuan</a>
                    <a href="#" class="text-amber-200 hover:text-white transition">FAQ</a>
                </div>
            </div>
            <hr class="border-amber-700 my-6">
            <div class="text-center text-sm text-amber-200">
                <p>© <?php echo $year; ?> Sri Delight Eggroll. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
