<?php
session_start();
require_once '../config/db.php';

$email = $_POST['email'];
$password = $_POST['password'];

// Query untuk mendapatkan data pengguna
$stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {
    // Set session
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['role'] = $user['role'];
    
    // Redirect berdasarkan peran
    switch($user['role']) {
        case 'admin':
            header('Location: ../pages/dashboard/admin/index.php');
            break;
        case 'owner':
            header('Location: ../pages/dashboard/owner/index.php');
            break;
        case 'teacher':
            header('Location: ../pages/dashboard/teacher/index.php');
            break;
        case 'student':
            header('Location: ../pages/dashboard/student/index.php');
            break;
        case 'parent':
            header('Location: ../pages/dashboard/parent/index.php');
            break;
        default:
            header('Location: ../index.php?error=invalid_role');
    }
} else {
    header('Location: ../index.php?error=invalid_credentials');
}
exit;
?>