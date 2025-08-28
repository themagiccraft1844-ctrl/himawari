<?php
// File: dashboard.php (Untuk User Biasa)

require_once "../db.php"; // Panggil file db.php

// Cek jika user belum login, tendang ke halaman login
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Pengguna</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="page-container">
        <div class="page-header">
            <h1>Halo, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>!</h1>
            <p>Selamat datang di dashboard kursus Anda.</p>
        </div>
        
        <div class="page-content">
            <p>Di sini Anda akan melihat daftar kursus yang tersedia.</p>
            <!-- Konten kursus akan ditambahkan di sini nanti -->
        </div>

        <p><a href="../logout.php" class="btn btn-danger">Keluar</a></p>
    </div>
</body>
</html>

<?php
// File: admin/index.php (Untuk Admin)

require_once "../db.php"; // Panggil file db.php

// Cek jika user belum login atau bukan admin, tendang ke halaman login
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || $_SESSION["role"] !== 'admin'){
    header("location: ../index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="page-container">
        <div class="page-header">
            <h1>Halo, Admin <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>!</h1>
            <p>Selamat datang di panel administrasi.</p>
        </div>

        <div class="page-content">
            <p>Di sini Anda dapat mengelola kursus, kuis, dan pengguna.</p>
            <!-- Fitur admin akan ditambahkan di sini nanti -->
        </div>

        <p><a href="../logout.php" class="btn btn-danger">Keluar</a></p>
    </div>
</body>
</html>
