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
    $KodeSupplier = trim($_POST['KodeSupplier']);
    $Nama = trim($_POST['Nama']);
    $Alamat = trim($_POST['Alamat']);
    $Telp = trim($_POST['Telp']);

    $query_sql = "UPDATE tb_supplier SET Nama='$Nama', Alamat='$Alamat', Telp='$Telp' WHERE KodeSupplier='$KodeSupplier'";

    $sql = mysqli_query($koneksidb, $query_sql) or die(mysqli_error());
    if ($sql) {
        echo "<script> alert ('Berhasil simpan.') </script>";
        echo "<script>window.location.href='supplier.php'</script>";
    }
}

$KodeSupplier = $_GET['id'];
$query_sql = "SELECT * FROM tb_supplier where KodeSupplier='$KodeSupplier'";
$sql = mysqli_query($koneksidb, $query_sql) or die(mysqli_error());
$totaldata = mysqli_num_rows($sql);
$data = mysqli_fetch_assoc($sql);
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
        <h2>Edit Data Supplier</h2>

        <form method="post" name="form1">
            <div class="form-group">
                <div class="form-group">
                    <label for="KodeSupplier">Kode Supplier :</label>
                    <input type="text" disabled value="<?php echo $data['KodeSupplier']; ?>" name="KodeSupplier" class="form-control">
                    <input type="hidden" value="<?php echo $data['KodeSupplier']; ?>" name="KodeSupplier" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Nama">Nama :</label>
                    <input type="text" required value="<?php echo $data['Nama']; ?>" name="Nama" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Alamat">Alamat :</label>
                    <input type="text" required value="<?php echo $data['Alamat']; ?>" name="Alamat" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Telp">Telp :</label>
                    <input type="text" required value="<?php echo $data['Telp']; ?>" name="Telp" class="form-control">
                </div>
                <div class="form-check mb-12">
                    <button class="btn btn-success" name="btnsimpan" value="btnsimpan" type="submit"> Simpan
                        <i class="ace-icon fa fa-signal"></i>
                    </button>
                    <button class="btn btn-danger" type="button"> Reset
                        <i class="ace-icon fa fa-signal"></i>
                    </button>
                    <a href="supplier.php"><button class="btn btn-primary" type="button"> Data Supplier
                            <i class="ace-icon fa fa-signal"></i> </button></a>
                </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ302DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" cross origin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
</body>

</html>