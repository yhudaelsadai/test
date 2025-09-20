<<<<<<< HEAD
<section class="attendance-section">
    <h3>Absensi Hari Ini</h3>
    <table class="attendance-table">
        <thead>
            <tr>
                <th>Waktu</th>
                <th>Status</th>
                <th>Device</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stmt = $pdo->prepare("
                SELECT ra.attendance_time, ra.status, rd.device_name
                FROM rfid_attendances ra
                JOIN rfid_devices rd ON ra.rfid_device_id = rd.serial_number
                WHERE ra.student_id = ?
                ORDER BY ra.attendance_time DESC
                LIMIT 10
            ");
            $stmt->execute([$_SESSION['user_id']]);
            $attendances = $stmt->fetchAll();
            
            foreach ($attendances as $attendance) {
                echo "<tr>";
                echo "<td>" . date('H:i:s', strtotime($attendance['attendance_time'])) . "</td>";
                echo "<td>" . ($attendance['status'] === 'IN' ? 'Masuk' : 'Keluar') . "</td>";
                echo "<td>" . $attendance['device_name'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
=======
<section class="attendance-section">
    <h3>Absensi Hari Ini</h3>
    <table class="attendance-table">
        <thead>
            <tr>
                <th>Waktu</th>
                <th>Status</th>
                <th>Device</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stmt = $pdo->prepare("
                SELECT ra.attendance_time, ra.status, rd.device_name
                FROM rfid_attendances ra
                JOIN rfid_devices rd ON ra.rfid_device_id = rd.serial_number
                WHERE ra.student_id = ?
                ORDER BY ra.attendance_time DESC
                LIMIT 10
            ");
            $stmt->execute([$_SESSION['user_id']]);
            $attendances = $stmt->fetchAll();
            
            foreach ($attendances as $attendance) {
                echo "<tr>";
                echo "<td>" . date('H:i:s', strtotime($attendance['attendance_time'])) . "</td>";
                echo "<td>" . ($attendance['status'] === 'IN' ? 'Masuk' : 'Keluar') . "</td>";
                echo "<td>" . $attendance['device_name'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
>>>>>>> 14bbd93 (Inisialisasi proyek XAMPP)
</section>