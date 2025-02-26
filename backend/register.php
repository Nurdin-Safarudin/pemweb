<?php

session_start();

require './../config/db.php';

if (isset($_POST['submit'])) {

    global $db_connect;

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    if ($confirm != $password) {
        echo "Password tidak sesuai dengan konfirmasi password.";
        die;
    }

    $usedEmail = mysqli_query($db_connect, "SELECT email FROM users WHERE email = '$email'");
    if (mysqli_num_rows($usedEmail) > 0) {
        echo "Email sudah digunakan.";
        die;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    $created_at = date('Y-m-d H:i:s', time());

    $users = mysqli_query($db_connect, "INSERT INTO users (name, email, password, created_at) VALUES ('$name', '$email', '$password', '$created_at')");

    if ($users) {
        $_SESSION['message'] = "Registrasi berhasil! Silakan login.";
        header('Location: ./../index.php'); // Redirect ke halaman index
        exit;
    } else {
        echo "Terjadi kesalahan saat registrasi.";
    }
}
