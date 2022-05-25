<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>CETAK PENGGUNA</title>
</head>

<body>
    <h2>
        <center>CETAK KONTAK</center>
    </h2>
    <center>
        <?php
        include "koneksi.inc.php";
        $sql = "select * from kontak order by id;";
        $qry = mysqli_query($conn, $sql) or die("Proses cetak gagal");
        echo "<table width='75%' cellpadding='2' cellspacing='0' border='1' class='table table-hover'>
        <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Kota</th>
        <th>Pesan</th>";
        while ($hasil = mysqli_fetch_row($qry)) {
            echo "<tr>
        <td>$hasil[0]</td>
        <td>$hasil[1]</td>
        <td>$hasil[2]</td>
        <td>$hasil[3]</td>
        <td>$hasil[4]</td>
        <td>$hasil[5]</td>
        <td>$hasil[6]</td>
        </tr>";
        }
        echo "</table>";

        ?>
        <br>
        <a href="logout.php" class="btn btn-danger">Log Out</a>
    </center>



</body>

</html>