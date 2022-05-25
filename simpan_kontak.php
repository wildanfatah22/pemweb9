<?php
    include "admin/koneksi.inc.php";
    $servername="localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";
    $conn = mysqli_connect($host, $username, $password, $dbname) or die("Koneksi gagal dibangun"); 
    //memindahkan nilai data form ke variabel sederhana agar mudah ditulis
    $nama=$_POST['nama'];
    $jkel=$_POST['jkel'];
    $email=$_POST['email'];
    $alamat=$_POST['alamat'];
    $kota=$_POST['kota'];
    $pesan=$_POST['pesan'];
    $sql="insert kontak set nama='$nama',
    jkel='$jkel', 
    email='$email', 
    alamat='$alamat', 
    kota='$kota', 
    pesan='$pesan'";
    
    mysqli_query($conn, $sql) or die("Proses simpan ke database gagal"); 
    header("location:kontak.php");
