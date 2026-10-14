<?php
require_once __DIR__ . '/partials/config.php';
require_once __DIR__ . '/partials/functions.php';

$sent = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name  = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);
    $sent = $stmt->execute();
    $stmt->close();
}

include __DIR__ . '/partials/header.php';
?> 
<section id="kontak" class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row">
            <div class="md:w-1/2 mb-8 md:mb-0 md:pr-8">
                <h2 class="text-3xl font-bold mb-6 text-amber-700">Kontak Kami</h2>
                <?php if($sent): ?>
                    <div class="bg-green-100 text-green-800 px-4 py-3 rounded mb-4">
                        Pesan Anda berhasil dikirim!
                    </div>
                <?php endif; ?>
                <form method="post" class="space-y-4">
                    <div>
                        <label class="block mb-1">Nama</label>
                        <input type="text" name="name" class="w-full border px-3 py-2 rounded" required>
                    </div>
                    <div>
                        <label class="block mb-1">Email</label>
                        <input type="email" name="email" class="w-full border px-3 py-2 rounded" required>
                    </div>
                    <div>
                        <label class="block mb-1">Pesan</label>
                        <textarea name="message" class="w-full border px-3 py-2 rounded" rows="5" required></textarea>
                    </div>
                    <button class="bg-amber-600 hover:bg-amber-700 text-white px-6 py-3 rounded-full font-medium transition" type="submit">
                        Kirim
                    </button>
                </form>
            </div>
            <div class="md:w-1/2" id="lokasi">
                <h2 class="text-3xl font-bold mb-6 text-amber-700">Lokasi Kami</h2>
                <div class="bg-gray-200 rounded-xl overflow-hidden h-64">
                    <a href="https://maps.app.goo.gl/3wHTUj8s8cR6iJbZ8" target="_blank" rel="noopener noreferrer">
                     <img src="assets/img/lokasi.png" 
                    alt="Map" 
                    class="w-full h-full object-cover hover:opacity-90 transition" 
                    onerror="this.src='https://via.placeholder.com/800x400?text=MAP'">
                    </a>
                </div>
                <p class="mt-4 text-gray-700">Jl. Jangli Karanganyar Legok, RT.4/RW.4, Karanganyar Gn., Kec. Candisari, Kota Semarang, Jawa Tengah 50255</p>
                <div class="space-y-4 mt-6">
                    <div class="flex items-start">
                        <div class="bg-amber-100 p-3 rounded-full mr-4">
                            <i class="fas fa-phone-alt text-amber-700"></i>
                        </div>
                        <div>
                            <h4 class="font-bold">Telepon</h4>
                            <p>0812-3456-7890</p>
                        </div>
                    </div>  
                    <div class="flex items-start">
                        <div class="bg-amber-100 p-3 rounded-full mr-4">
                            <i class="fab fa-whatsapp text-amber-700"></i>
                        </div>
                        <div>
                            <h4 class="font-bold">WhatsApp</h4>
                            <p>0812-3456-7890</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-amber-100 p-3 rounded-full mr-4">
                            <i class="fab fa-instagram text-amber-700"></i>
                        </div>
                        <div>
                            <h4 class="font-bold">Instagram</h4>
                            <p>@eggroll.busri</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-amber-100 p-3 rounded-full mr-4">
                            <i class="far fa-clock text-amber-700"></i>
                        </div>
                        <div>
                            <h4 class="font-bold">Jam Buka</h4>
                            <p>RAMADHAN dan SEBELUM IDUL FITRI</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/partials/footer.php'; ?>
