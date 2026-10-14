<?php
// partials/functions.php
function rupiah($angka) {
    return "Rp " . number_format($angka, 0, ",", ".");
}

function e($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
?>