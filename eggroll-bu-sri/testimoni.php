<?php
require_once __DIR__ . '/partials/config.php';
require_once __DIR__ . '/partials/functions.php';
include __DIR__ . '/partials/header.php';
?>
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 text-amber-700">Testimoni Pelanggan</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<?php
$testi = $conn->query("SELECT * FROM testimonials ORDER BY id DESC LIMIT 9");
if ($testi && $testi->num_rows > 0):
    while ($t = $testi->fetch_assoc()):
?>
            <div class="bg-amber-50 p-6 rounded-xl shadow-md">
                <div class="flex items-center mb-4">
                    <img src="<?php echo e($t['avatar_url'] ?: 'https://via.placeholder.com/48x48?text=U'); ?>" class="w-12 h-12 rounded-full mr-4" alt="<?php echo e($t['name']); ?>">
                    <div>
                         <h4 class="font-bold"><?php echo e($t['name']); ?></h4>
                        <div class="flex text-amber-400">
                        <?php
                            $rating = (int)$t['rating'];
                            for ($i=1; $i<=5; $i++) {
                                echo $i <= $rating ? '<i class=\"fas fa-star\"></i>' : '<i class=\"far fa-star\"></i>';
                            }
                        ?>
                        </div>
                    </div>
                </div>
                <p class="text-gray-700">"<?php echo e($t['comment']); ?>"</p>
            </div>
<?php
    endwhile;
else:
    echo '<p class="text-center col-span-3">Belum ada testimoni.</p>';
endif;
?>
        </div>
    </div>
</section>
<?php include __DIR__ . '/partials/footer.php'; ?>
