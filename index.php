<<<<<<< HEAD
<?php
// Mulai session
session_start();

// Tentukan halaman default
$defaultPage = 'pages/auth/login.php';

// Cek apakah pengguna sudah login
if (isset($_SESSION['user_id'])) {
    // Tentukan halaman dashboard berdasarkan peran pengguna
    $role = $_SESSION['role'];
    
    switch ($role) {
        case 'admin':
            $dashboardPage = 'pages/dashboard/admin/index.php';
            break;
        case 'owner':
            $dashboardPage = 'pages/dashboard/owner/index.php';
            break;
        case 'teacher':
            $dashboardPage = 'pages/dashboard/teacher/index.php';
            break;
        case 'student':
            $dashboardPage = 'pages/dashboard/student/index.php';
            break;
        case 'parent':
            $dashboardPage = 'pages/dashboard/parent/index.php';
            break;
        default:
            // Logout jika peran tidak valid
            session_destroy();
            header("Location: $defaultPage");
            exit;
    }
    
    // Redirect ke dashboard yang sesuai
    header("Location: $dashboardPage");
    exit;
}

// Jika belum login, arahkan ke halaman login
header("Location: $defaultPage");
exit;
=======
<?php
// Mulai session
session_start();

// Tentukan halaman default
$defaultPage = 'pages/auth/login.php';

// Cek apakah pengguna sudah login
if (isset($_SESSION['user_id'])) {
    // Tentukan halaman dashboard berdasarkan peran pengguna
    $role = $_SESSION['role'];
    
    switch ($role) {
        case 'admin':
            $dashboardPage = 'pages/dashboard/admin/index.php';
            break;
        case 'owner':
            $dashboardPage = 'pages/dashboard/owner/index.php';
            break;
        case 'teacher':
            $dashboardPage = 'pages/dashboard/teacher/index.php';
            break;
        case 'student':
            $dashboardPage = 'pages/dashboard/student/index.php';
            break;
        case 'parent':
            $dashboardPage = 'pages/dashboard/parent/index.php';
            break;
        default:
            // Logout jika peran tidak valid
            session_destroy();
            header("Location: $defaultPage");
            exit;
    }
    
    // Redirect ke dashboard yang sesuai
    header("Location: $dashboardPage");
    exit;
}

// Jika belum login, arahkan ke halaman login
header("Location: $defaultPage");
exit;
>>>>>>> 14bbd93 (Inisialisasi proyek XAMPP)
?>