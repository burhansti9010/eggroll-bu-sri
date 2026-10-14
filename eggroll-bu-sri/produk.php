<?php
require_once __DIR__ . '/partials/config.php';
require_once __DIR__ . '/partials/functions.php';
include __DIR__ . '/partials/header.php';
?>
<section id="produk" class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 text-amber-700">Produk Kami</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
<?php
$products = $conn->query("SELECT * FROM products ORDER BY name ASC");
if ($products && $products->num_rows > 0):
    while ($p = $products->fetch_assoc()):   
?>
            <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden transition duration-300">
                <div class="product-image relative">
                    <img src="<?php echo e($p['image_url'] ?: 'https://via.placeholder.com/600x400?text=Eggroll'); ?>" alt="<?php echo e($p['name']); ?>" class="w-full h-64 object-cover">
                    <?php if(!empty($p['label'])): ?>
                        <div class="absolute top-3 left-3 bg-amber-600 text-white px-3 py-1 rounded-full text-sm"><?php echo e($p['label']); ?></div>
                    <?php endif; ?>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2"><?php echo e($p['name']); ?></h3>
                    <p class="text-gray-600 mb-4"><?php echo e($p['description']); ?></p>
                    <div class="flex justify-between items-center">
                        <span class="text-amber-700 font-bold text-lg"><?php echo rupiah($p['price']); ?></span>
                        <a href="pesan.php?add=<?php echo $p['id']; ?>" class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-full transition">+ Tambah</a>
                    </div>
                </div>
            </div>
<?php
    endwhile;
else:
    echo '<p class="text-center col-span-3">Belum ada produk.</p>';
endif;
?>
        </div>
    </div>
</section>
<?php include __DIR__ . '/partials/footer.php'; ?>
 