<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM KONTAK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .warning {
            color: #FF0000;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <form method="post" action="simpan_kontak.php">
                <h2 class="alert alert-primary text-center mt-3">FORM KONTAK</h2>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="nama" class="col-form-label">Nama</label>
                    </div>

                    <div class="col-md-9">
                        <input type="text" name="nama" id="Nama" class="form-control class=" warning>
                    </div>
                </div> <br>

                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="jkel" class="col-form-label">Jenis Kelamin</label>
                    </div>
                    <div class="col-md-9 ">
                        <input class="form-check-input" type="radio" name="jkel" id="jkel" value="Laki-Laki">
                        <label class="form-check-label" for="jkel">Laki-Laki</label>
                        <input class="form-check-input" type="radio" name="jkel" id="jkel" value="Perempuan">
                        <label class="form-check-label" for="jkel">Perempuan</label>
                    </div>
                </div> <br>

                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="email" class="col-form-label">Email</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="email" id="email" class="form-control class= " warning>
                    </div>
                </div> <br>

                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="alamat" class="col-form-label">Alamat</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="alamat" id="alamat" class="form-control class=" warning>
                    </div>
                </div> <br>

                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="kota" class="col-form-label">Kota</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="kota" id="kota" class="form-control class=" warning>
                    </div>
                </div> <br>

                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="pesan" class="col-form-label">Pesan</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="pesan" id="pesan" class="form-control class=" warning>
                    </div>
                </div> <br>

                <div class="form-group row">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>

                <br>
                <div class="form-group row">
                    <a href="home.php" name="kembali" class="btn btn-danger">Kembali</a>
                </div>


            </form>
        </div>
    </div>

</body>

</html>