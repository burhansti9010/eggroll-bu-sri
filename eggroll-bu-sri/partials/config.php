<?php
// partials/config.php
$host = "localhost";
$user = "learn";
$pass = "learn";
$db   = "eggroll_busri";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

mysqli_set_charset($conn, "utf8mb4");
?>  