<<<<<<< HEAD
<aside class="sidebar">
    <div class="logo">
        <img src="../assets/images/logo.png" alt="EMS Logo">
        <h3>EMS</h3>
    </div>
    
    <ul class="menu">
        <li>
            <a href="#">
                <i class="fas fa-tachometer-alt"></i>
                <span>Beranda</span>
            </a>
        </li>
        
        <?php if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'owner'): ?>
        <li>
            <a href="#">
                <i class="fas fa-users"></i>
                <span>Manajemen Pengguna</span>
            </a>
        </li>
        <?php endif; ?>
        
        <?php if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'owner' || $_SESSION['role'] == 'teacher'): ?>
        <li>
            <a href="#">
                <i class="fas fa-chalkboard-teacher"></i>
                <span>Kelas & Mata Pelajaran</span>
            </a>
        </li>
        <?php endif; ?>
        
        <?php if ($_SESSION['role'] == 'student' || $_SESSION['role'] == 'parent'): ?>
        <li>
            <a href="#">
                <i class="fas fa-book"></i>
                <span>Rencana Pembelajaran</span>
            </a>
        </li>
        <?php endif; ?>
        
        <li>
            <a href="#">
                <i class="fas fa-calendar-alt"></i>
                <span>Jadwal</span>
            </a>
        </li>
        
        <li>
            <a href="#">
                <i class="fas fa-chart-bar"></i>
                <span>Laporan</span>
            </a>
        </li>
    </ul>
=======
<aside class="sidebar">
    <div class="logo">
        <img src="../assets/images/logo.png" alt="EMS Logo">
        <h3>EMS</h3>
    </div>
    
    <ul class="menu">
        <li>
            <a href="#">
                <i class="fas fa-tachometer-alt"></i>
                <span>Beranda</span>
            </a>
        </li>
        
        <?php if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'owner'): ?>
        <li>
            <a href="#">
                <i class="fas fa-users"></i>
                <span>Manajemen Pengguna</span>
            </a>
        </li>
        <?php endif; ?>
        
        <?php if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'owner' || $_SESSION['role'] == 'teacher'): ?>
        <li>
            <a href="#">
                <i class="fas fa-chalkboard-teacher"></i>
                <span>Kelas & Mata Pelajaran</span>
            </a>
        </li>
        <?php endif; ?>
        
        <?php if ($_SESSION['role'] == 'student' || $_SESSION['role'] == 'parent'): ?>
        <li>
            <a href="#">
                <i class="fas fa-book"></i>
                <span>Rencana Pembelajaran</span>
            </a>
        </li>
        <?php endif; ?>
        
        <li>
            <a href="#">
                <i class="fas fa-calendar-alt"></i>
                <span>Jadwal</span>
            </a>
        </li>
        
        <li>
            <a href="#">
                <i class="fas fa-chart-bar"></i>
                <span>Laporan</span>
            </a>
        </li>
    </ul>
>>>>>>> 14bbd93 (Inisialisasi proyek XAMPP)
</aside>