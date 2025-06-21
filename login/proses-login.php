<?php
session_start();
include '../config/koneksi.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password']; // sesuaikan jika pakai password_hash

    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $koneksi->query($query);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        $_SESSION['login'] = true;
        $_SESSION['role'] = $user['role']; // 'admin'
        $_SESSION['email'] = $user['email'];

        header("Location: ../dashboard/index.php");
        exit();
    } else {
        echo "Login gagal: email atau password salah.";
    }
}
?>
