<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMS - Registrasi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .login-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            display: flex;
            max-width: 900px;
            width: 100%;
            animation: fadeInUp 0.8s ease forwards;
        }
        
        .left-panel {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }
        
        .left-panel::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.1);
            transform: rotate(45deg);
        }
        
        .logo {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .logo i {
            font-size: 36px;
            color: #667eea;
        }
        
        .left-panel h2 {
            font-size: 32px;
            margin-bottom: 15px;
            font-weight: 600;
        }
        
        .left-panel p {
            font-size: 16px;
            line-height: 1.6;
            opacity: 0.9;
        }
        
        .right-panel {
            padding: 50px;
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .login-form h3 {
            font-size: 28px;
            margin-bottom: 30px;
            color: #333;
            font-weight: 600;
        }
        
        .input-group {
            position: relative;
            margin-bottom: 25px;
        }
        
        .input-group i {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            font-size: 18px;
            transition: all 0.3s ease;
        }
        
        .input-group input {
            width: 100%;
            padding: 15px 20px 15px 55px;
            border: 2px solid #e0e0e0;
            border-radius: 50px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }
        
        .input-group input:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            outline: none;
        }
        
        .input-group input:focus + i {
            color: #667eea;
        }
        
        .btn-login {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 15px;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 20px;
        }
        
        .btn-login:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
        }
        
        .options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        
        .forgot-password {
            color: #667eea;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
        }
        
        .forgot-password:hover {
            color: #764ba2;
        }
        
        .role-selector {
            margin-top: 20px;
        }
        
        .role-selector p {
            font-size: 14px;
            color: #666;
            margin-bottom: 10px;
        }
        
        .custom-select {
            position: relative;
            width: 100%;
        }
        
        .custom-select select {
            appearance: none;
            width: 100%;
            padding: 15px 20px;
            border: 2px solid #e0e0e0;
            border-radius: 50px;
            background: #f8f9fa;
            font-size: 16px;
            color: #333;
            cursor: pointer;
            outline: none;
        }
        
        .custom-select select:focus {
            border-color: #667eea;
        }
        
        .custom-select::after {
            content: '\f078';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            pointer-events: none;
        }
        
        .alert {
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }
        
        .alert-danger {
            background-color: #fee2e2;
            color: #dc2626;
            border: 1px solid #fecaca;
        }
        
        .alert i {
            margin-right: 10px;
            font-size: 18px;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @media (max-width: 768px) {
            .login-container {
                flex-direction: column;
                max-width: 100%;
            }
            
            .left-panel, .right-panel {
                width: 100%;
                padding: 30px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="left-panel">
            <div class="logo">
                <i class="fas fa-graduation-cap"></i>
            </div>
            <h2>EMS School Management</h2>
            <p>Selamat datang di platform pendidikan terintegrasi dengan teknologi mutakhir</p>
        </div>
        
        <div class="right-panel">
            <div class="login-form">
                <h3>Daftar Akun Baru</h3>
                
                <?php 
                // Tampilkan error jika ada
                if (isset($_SESSION['registration_errors'])) {
                    foreach ($_SESSION['registration_errors'] as $error) {
                        echo '<div class="alert alert-danger"><i class="fas fa-exclamation-circle"></i> ' . $error . '</div>';
                    }
                    unset($_SESSION['registration_errors']); // Hapus error setelah ditampilkan
                }
                ?>
                
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <div class="input-group">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Nama Pengguna" required>
                    </div>
                    
                    <div class="input-group">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Alamat Email" required>
                    </div>
                    
                    <div class="input-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Kata Sandi" required>
                    </div>
                    
                    <div class="input-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="confirm_password" placeholder="Konfirmasi Kata Sandi" required>
                    </div>
                    
                    <button type="submit" class="btn-login">Daftar Sekarang</button>
                    
                    <div class="options">
                        <a href="login.php" class="forgot-password">Sudah Punya Akun? Login Disini</a>
                    </div>
                </form>
                
                <div class="role-selector">
                    <p>Pilih Peran Anda:</p>
                    <div class="custom-select">
                        <select name="role" id="roleSelector">
                            <option value="all">Semua Peran</option>
                            <option value="admin">Admin</option>
                            <option value="owner">Pemilik</option>
                            <option value="teacher">Guru</option>
                            <option value="student">Murid</option>
                            <option value="parent">Orang Tua</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const roleSelect = document.getElementById('roleSelector');
            roleSelect.addEventListener('change', function() {
                console.log('Selected role:', this.value);
            });
        });
    </script>
</body>
</html>