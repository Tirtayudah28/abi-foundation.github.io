<?php 
    include '../config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama     = trim($_POST['nama']);
    $email    = trim($_POST['email']);
    $password = $_POST['password'];
    $role     = 'admin'; // bisa kamu ubah kalau ingin role berbeda

    // Validasi input
    if (empty($nama) || empty($email) || empty($password)) {
        $_SESSION['error'] = "Semua field wajib diisi.";
        header('Location: register_admin.php');
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Email tidak valid.";
        header('Location: register_admin.php');
        exit;
    }

    // Cek apakah email sudah digunakan
    $stmt = $koneksi->prepare("SELECT id FROM users_admin WHERE email = ?");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $_SESSION['error'] = "Email sudah terdaftar.";
        header('Location: register.php');
        exit;
    }

    // Hash password
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Simpan ke database
    $stmt = $koneksi->prepare("INSERT INTO users_admin (nama, email, password, role) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nama, $email, $password_hash, $role);

    if ($stmt->execute()) {
        $_SESSION['sukses'] = "Registrasi berhasil. Silakan login.";
        header('Location: kelola-pengguna.php');
    } else {
        $_SESSION['error'] = "Terjadi kesalahan. Coba lagi.";
        header('Location: register_admin.php');
    }

    $stmt->close();
    $koneksi->close();
} else {
    header('Location: register_admin.php');
    exit;
}
?>