<?php
include __DIR__ . '/partials/header.php';
?>
<section id="tentang" class="py-16 bg-amber-50">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-8 md:mb-0 md:pr-8">
                <img src="assets/img/bu-sri.png" alt="Bu Sri" class="rounded-lg shadow-xl w-full" onerror="this.src='https://via.placeholder.com/600x400?text=Bu+Sri'">
            </div>
            <div class="md:w-1/2">
                <h2 class="text-3xl font-bold mb-6 text-amber-700">Tentang Bu Sri</h2>
                <p class="text-gray-700 mb-4">Eggroll Bu Sri adalah usaha rumahan yang berdiri sejak 2012, dimulai dari hobi Bu Sri membuat jajanan untuk keluarga hingga akhirnya berkembang menjadi bisnis yang diminati banyak orang.</p>
                <p class="text-gray-700 mb-6">Dengan resep turun temurun dan bahan-bahan pilihan, kami menghadirkan eggroll dengan cita rasa yang khas dan tekstur yang sempurna - renyah di luar, lembut di dalam.</p>
                
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div class="flex items-center">
                        <div class="bg-amber-100 p-3 rounded-full mr-3">
                            <i class="fas fa-check text-amber-700"></i>
                        </div>
                        <span>100% Halal</span>
                    </div>
                    <div class="flex items-center">
                        <div class="bg-amber-100 p-3 rounded-full mr-3">
                            <i class="fas fa-check text-amber-700"></i>
                        </div>
                        <span>Non MSG</span>
                    </div> 
                    <div class="flex items-center">
                        <div class="bg-amber-100 p-3 rounded-full mr-3">
                            <i class="fas fa-check text-amber-700"></i>
                        </div>
                        <span>Fresh Daily</span>
                    </div>
                    <div class="flex items-center">
                        <div class="bg-amber-100 p-3 rounded-full mr-3">
                            <i class="fas fa-check text-amber-700"></i>
                        </div>
                        <span>Bahan Premium</span>
                    </div>
                </div>
                
                <div class="flex space-x-4">
                    <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-full w-10 h-10 flex items-center justify-center transition">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/eggrollbusri?igsh=cmRhZXEza2Rybzht" class="bg-pink-600 hover:bg-pink-700 text-white p-3 rounded-full w-10 h-10 flex items-center justify-center transition">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="bg-green-500 hover:bg-green-600 text-white p-3 rounded-full w-10 h-10 flex items-center justify-center transition">
                        <i class="fab fa-whatsapp"></i>
                    </a> 
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/partials/footer.php'; ?>
