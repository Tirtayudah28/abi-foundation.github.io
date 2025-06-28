<?php
session_start();
include '../config/koneksi.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Gunakan prepared statement untuk keamanan
    $stmt = $koneksi->prepare("SELECT * FROM users_admin WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Cek apakah email ditemukan
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Verifikasi password dengan password_hash()
        if (password_verify($password, $user['password'])) {
            $_SESSION['login'] = true;
            $_SESSION['role'] = $user['role']; // contoh: 'admin'
            $_SESSION['email'] = $user['email'];

            header("Location: ../dashboard/index.php?pesan=login_berhasil");
            exit();
        } else {
            echo "Password salah.";
        }
    } else {
        echo "Email tidak ditemukan.";
    }
}
?>
