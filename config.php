<?php
// =============================================================
// File: config.php (Versi Final - Bersih)
// =============================================================

// Header CORS
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    exit(0);
}

// --- Konfigurasi Database Anda ---
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'money_tracker_db'); // Pastikan nama ini benar

// Fungsi untuk membuat koneksi
function connect() {
    $connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if (mysqli_connect_errno()) {
        die("Gagal terhubung dengan MySQL: " . mysqli_connect_error());
    }
    return $connect;
}

// Membuat koneksi global yang akan dipakai file lain
$db = connect();