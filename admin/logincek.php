<?php 
    session_start();
    // include koneksi
    include 'koneksi.inc.php';

    // mengambil data yang diinput dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // select username dan password dari tabel login_kontak
    $sql = mysqli_query($conn,"SELECT * FROM login_kontak WHERE username='$username' AND password='$password'");

    // menghitung jumlah data yang ditemukan
    $valid = mysqli_num_rows($sql);

    if($valid > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:cetak.php");
    }else{
        header("location:index.php?pesan=gagal");
    }
?>