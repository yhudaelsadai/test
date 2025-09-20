<?php include '../config/db.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMS Dashboard - <?= ucfirst($_SESSION['role']); ?></title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <?php include 'sidebar.php'; ?>
        
        <!-- Main Content -->
        <div class="main-content">
            <!-- Top Navigation -->
            <nav class="top-nav">
                <div class="welcome">
                    <span>Selamat Datang, <?= $_SESSION['username']; ?>!</span>
                </div>
                <div class="actions">
                    <a href="#"><i class="fas fa-bell"></i></a>
                    <a href="#"><i class="fas fa-cog"></i></a>
                    <a href="../scripts/logout.php"><i class="fas fa-sign-out-alt"></i> Keluar</a>
                </div>
            </nav>
            
            <!-- Page Content -->
            <div class="page-content">
                <!-- Konten spesifik dashboard akan dimuat di sini -->
            </div>
        </div>
    </div>
</body>
</html>