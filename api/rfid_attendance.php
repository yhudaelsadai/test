<?php
header('Content-Type: application/json');
require_once '../../config/db.php';

$data = json_decode(file_get_contents('php://input'), true);

if (!isset($data['rfid_code']) || !isset($data['device_id'])) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Data tidak lengkap']);
    exit;
}

$rfidCode = $data['rfid_code'];
$deviceId = $data['device_id'];

// Cari murid berdasarkan RFID code
$stmt = $pdo->prepare("SELECT id FROM students WHERE rfid_code = ?");
$stmt->execute([$rfidCode]);
$student = $stmt->fetch();

if (!$student) {
    http_response_code(404);
    echo json_encode(['status' => 'error', 'message' => 'Murid tidak ditemukan']);
    exit;
}

// Simpan absensi
$stmt = $pdo->prepare("
    INSERT INTO rfid_attendances (student_id, rfid_device_id, attendance_time, status)
    VALUES (?, ?, NOW(), 'IN')
");
$result = $stmt->execute([$student['id'], $deviceId]);

if ($result) {
    http_response_code(200);
    echo json_encode(['status' => 'success', 'message' => 'Absensi berhasil dicatat']);
} else {
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => 'Gagal mencatat absensi']);
}