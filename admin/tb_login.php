<?php
    $servername = "localhost";
    $username= "root";
    $password = "";
    $dbname = "mydb";

    include "koneksi.inc.php";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        die("connection failed : " . mysqli_connect_error()); 

    }

    $sql = "CREATE TABLE login_kontak(
        id INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        username  VARCHAR(30),
        password  VARCHAR(40))";

    if(mysqli_query($conn, $sql)){
        echo "Table created succesfully";
    } else{
        echo "Error creating table". mysqli_error($conn);
    }

    mysqli_close($conn)
?>