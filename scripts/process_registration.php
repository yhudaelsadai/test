<<<<<<< HEAD
<?php
// Mulai session
session_start();

// Hubungkan ke database
include 'config/db.php';

// Ambil data dari form
$username = htmlspecialchars(trim($_POST['username']));
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
$password = trim($_POST['password']);
$confirm_password = trim($_POST['confirm_password']);
$role = htmlspecialchars(trim($_POST['role']));

// Validasi input
$errors = [];

// Cek username
if (empty($username)) {
    $errors[] = "Username wajib diisi";
} elseif (strlen($username) < 3) {
    $errors[] = "Username minimal 3 karakter";
}

// Cek email
if (empty($email)) {
    $errors[] = "Email wajib diisi";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Format email tidak valid";
} else {
    // Cek apakah email sudah terdaftar
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->rowCount() > 0) {
        $errors[] = "Email sudah terdaftar";
    }
}

// Cek password
if (empty($password)) {
    $errors[] = "Password wajib diisi";
} elseif (strlen($password) < 8) {
    $errors[] = "Password minimal 8 karakter";
} elseif ($password !== $confirm_password) {
    $errors[] = "Konfirmasi password tidak cocok";
}

// Cek role
$valid_roles = ['admin', 'owner', 'teacher', 'student', 'parent'];
if (empty($role) || !in_array($role, $valid_roles)) {
    $errors[] = "Role tidak valid";
}

// Jika tidak ada error, lanjutkan registrasi
if (empty($errors)) {
    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    try {
        // Simpan user ke database
        $stmt = $pdo->prepare("
            INSERT INTO users (username, email, password, role) 
            VALUES (?, ?, ?, ?)
        ");
        $stmt->execute([$username, $email, $hashed_password, $role]);
        
        // Redirect ke halaman login dengan pesan sukses
        $_SESSION['success_message'] = "Registrasi berhasil! Silakan login.";
        header("Location: login.php");
        exit;
    } catch (PDOException $e) {
        $errors[] = "Error database: " . $e->getMessage();
    }
}

// Jika ada error, simpan ke session dan tampilkan
if (!empty($errors)) {
    $_SESSION['registration_errors'] = $errors;
    header("Location: registration.php");
    exit;
=======
<?php
// Mulai session
session_start();

// Hubungkan ke database
include 'config/db.php';

// Ambil data dari form
$username = htmlspecialchars(trim($_POST['username']));
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
$password = trim($_POST['password']);
$confirm_password = trim($_POST['confirm_password']);
$role = htmlspecialchars(trim($_POST['role']));

// Validasi input
$errors = [];

// Cek username
if (empty($username)) {
    $errors[] = "Username wajib diisi";
} elseif (strlen($username) < 3) {
    $errors[] = "Username minimal 3 karakter";
}

// Cek email
if (empty($email)) {
    $errors[] = "Email wajib diisi";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Format email tidak valid";
} else {
    // Cek apakah email sudah terdaftar
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->rowCount() > 0) {
        $errors[] = "Email sudah terdaftar";
    }
}

// Cek password
if (empty($password)) {
    $errors[] = "Password wajib diisi";
} elseif (strlen($password) < 8) {
    $errors[] = "Password minimal 8 karakter";
} elseif ($password !== $confirm_password) {
    $errors[] = "Konfirmasi password tidak cocok";
}

// Cek role
$valid_roles = ['admin', 'owner', 'teacher', 'student', 'parent'];
if (empty($role) || !in_array($role, $valid_roles)) {
    $errors[] = "Role tidak valid";
}

// Jika tidak ada error, lanjutkan registrasi
if (empty($errors)) {
    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    try {
        // Simpan user ke database
        $stmt = $pdo->prepare("
            INSERT INTO users (username, email, password, role) 
            VALUES (?, ?, ?, ?)
        ");
        $stmt->execute([$username, $email, $hashed_password, $role]);
        
        // Redirect ke halaman login dengan pesan sukses
        $_SESSION['success_message'] = "Registrasi berhasil! Silakan login.";
        header("Location: login.php");
        exit;
    } catch (PDOException $e) {
        $errors[] = "Error database: " . $e->getMessage();
    }
}

// Jika ada error, simpan ke session dan tampilkan
if (!empty($errors)) {
    $_SESSION['registration_errors'] = $errors;
    header("Location: registration.php");
    exit;
>>>>>>> 14bbd93 (Inisialisasi proyek XAMPP)
}