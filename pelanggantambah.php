<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>
<?php
require_once('koneksidb.php');

if (isset($_POST['btnsimpan']) == 'btnsimpan') {
    $KodePelanggan = trim($_POST['KodePelanggan']);
    $Nama = trim($_POST['Nama']);
    $Alamat = trim($_POST['Alamat']);
    $Telp = trim($_POST['Telp']);

    $query_sql = "INSERT INTO tb_Pelanggan (KodePelanggan, Nama, Alamat, Telp) 
    VALUES ('$KodePelanggan', '$Nama', '$Alamat', '$Telp')";
    $sql = mysqli_query($koneksidb, $query_sql) or die(mysqli_error());
    if ($sql) {
        echo "<script> alert ('Berhasil simpan .') </script>";
        echo "<script>window.location.href='pelanggan.php'</script>";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="docs/4.0/assets/img/favicons/favicon.ico">
    <title>Aplikasi PHP MySQL</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/navbar-static/">
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="navbar-top.css" rel="stylesheet">
</head>

<body>
    <?php
    require_once('menu.php');
    ?>
    <br>
    <div class="container">
        <h2>Tambah Data Pelanggan</h2>
        <form method="post" name="form1">
            <div class="form-group">
                <div class="form-group">
                    <label for="KodePelanggan">Kode Pelanggan :</label>
                    <input type="text" required name="KodePelanggan" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Nama">Nama :</label>
                    <input type="text" required name="Nama" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Alamat">Alamat :</label>
                    <input type="text" required name="Alamat" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Telp">Telp :</label>
                    <input type="text" required name="Telp" class="form-control">
                </div>
                <div class="form-check mb-12">
                    <button class="btn btn-success" name="btnsimpan" value="btnsimpan" type="submit"> Simpan
                        <i class="ace-icon fa fa-signal"></i>
                    </button>
                    <button class="btn btn-danger" type="reset"> Reset
                        <i class="ace-icon fa fa-signal"></i>
                    </button>
                    <a href="pelanggan.php"><button class="btn btn-primary" type="button"> Data Pelanggan
                            <i class="ace-icon fa fa-signal"></i>
                        </button></a>
                </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ302DKtIkvYIKзUENzmM7KCkRr/rE9/Qpg6aAZGJWFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
</body>

</html>