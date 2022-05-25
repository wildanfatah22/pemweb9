<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        body {
            padding-top: 12%;
            padding-left: 37%;
        }
    </style>
</head>

<body>
    <div class="card col-md-5">
        <div class="card-body">

            <?php

            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal") {
                    echo "<center>Username atau password salah!</center>";
                    echo "<br>";
                }
            }
            ?>

            <form method="post" action="logincek.php">
                <div class="form-group">
                    <input type="text" name="username" class="form-control" id="email" placeholder="Masukan Username" required>
                </div> <br>

                <div class="form-group">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Masukan Password" required>
                </div><br>

                
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" name="masuk" class="btn btn-primary">Masuk</button>
                    <a href="../home.php" name="kembali" class="btn btn-danger">Kembali</a>

                </div>

            </form>
        </div>
    </div>
</body>

</html>