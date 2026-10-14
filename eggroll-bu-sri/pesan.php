<?php
require_once __DIR__ . '/partials/config.php';
require_once __DIR__ . '/partials/functions.php';
session_start();

// Tambah ke keranjang
if (isset($_GET['add'])) {
    $id = (int)$_GET['add'];
    $_SESSION['cart'][$id] = ($_SESSION['cart'][$id] ?? 0) + 1;
    header("Location: pesan.php");
    exit;
}

// Hapus item
if (isset($_GET['remove'])) {
    $id = (int)$_GET['remove'];
    if (isset($_SESSION['cart'][$id])) unset($_SESSION['cart'][$id]);
    header("Location: pesan.php");
    exit;
}

// Proses checkout
$success = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['checkout'])) {
    $name    = $_POST['name'] ?? '';
    $phone   = $_POST['phone'] ?? '';
    $address = $_POST['address'] ?? '';
    $total   = 0;

    if (!empty($_SESSION['cart'])) {
        $ids = implode(',', array_map('intval', array_keys($_SESSION['cart'])));
        $res = $conn->query("SELECT id, price FROM products WHERE id IN ($ids)");

        $priceMap = [];
        while ($row = $res->fetch_assoc()) {
            $priceMap[$row['id']] = $row['price'];
        }

        foreach ($_SESSION['cart'] as $pid => $qty) {
            $total += ($priceMap[$pid] ?? 0) * $qty;
        }

        $stmt = $conn->prepare("INSERT INTO orders (customer_name, phone, address, total, status) VALUES (?, ?, ?, ?, 'pending')");
        $stmt->bind_param("sssi", $name, $phone, $address, $total);
        if ($stmt->execute()) {
            $order_id = $stmt->insert_id;
            $stmt->close();

            $stmt2 = $conn->prepare("INSERT INTO order_items (order_id, product_id, quantity, price) VALUES (?, ?, ?, ?)");
            foreach ($_SESSION['cart'] as $pid => $qty) {
                $price = $priceMap[$pid] ?? 0;
                $stmt2->bind_param("iiii", $order_id, $pid, $qty, $price);
                $stmt2->execute();
            }
            $stmt2->close();

            $_SESSION['cart'] = [];
            $success = true;
        }
    }
}

include __DIR__ . '/partials/header.php';
?>
    <div class="container">
  <div class="wrapper">
    <h2 class="title-page">Pesan Sekarang</h2>

    <?php if ($success): ?>
      <div class="alert-success">
        Terima kasih! Pesanan Anda telah kami terima.
      </div>
    <?php endif; ?>

    <div class="cart-box">
      <h3 class="section-title">Keranjang Belanja</h3>
      <div class="table-wrapper">
        <table class="table-cart">
          <!-- <?php

echo "<h2>Isi Keranjang:</h2>";

// Cek apakah keranjang ada isinya
if (!empty($_SESSION['cart'])) {
    echo "<ul>";
    foreach ($_SESSION['cart'] as $id => $jumlah) {
        echo "<li>Produk ID: $id | Jumlah: $jumlah</li>";
    }
    echo "</ul>";
} else {
    echo "<p>Keranjang belanjamu masih kosong.</p>";
}
?> -->
        </table>
      </div>
    </div>

    <form method="post" class="order-form">
      <h3 class="section-title">Data Pemesan</h3>
      <div class="form-grid">
        <div class="form-group">
          <label>Nama</label>
          <input type="text" name="name" required>
        </div>
        <div class="form-group">
          <label>No. HP</label>
          <input type="text" name="phone" required>
        </div>
        <div class="form-group full">
          <label>Alamat</label>
          <textarea name="address" required></textarea>
        </div>
      </div>
      <button type="submit" name="checkout" class="btn-checkout">Checkout</button>
    </form>
  </div>
</div>
</section>
<?php include __DIR__ . '/partials/footer.php'; ?>
