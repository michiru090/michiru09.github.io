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
    $KodeBarang = trim($_POST['KodeBarang']);
    $Nama = trim($_POST['Nama']);
    $HargaBeli = trim($_POST['HargaBeli']);
    $HargaJual = trim($_POST['HargaJual']);
    $Stok = trim($_POST['Stok']);
    $Satuan = trim($_POST['Satuan']);
    $Petugas = 'ADMIN';

    $query_sql = "UPDATE tb_barang SET Nama='$Nama', HargaBeli='$HargaBeli', HargaJual='$HargaJual', Stok='$Stok', Satuan='$Satuan', Petugas='$Petugas'
                WHERE KodeBarang='$KodeBarang'";
    $sql = mysqli_query($koneksidb, $query_sql) or die(mysqli_error());
    if ($sql) {
        echo "<script> alert('Berhasil simpan .')</script>";
        echo "<script>window.location.href='barang.php'</script>";
    }
}

$KodeBarang = $_GET['id'];
$query_sql = "SELECT * FROM tb_barang where KodeBarang='$KodeBarang' ";
$sql = mysqli_query($koneksidb, $query_sql) or die(mysqli_error());
$totaldata = mysqli_num_rows($sql);
$data = mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="docs/4.0/assets/img/favicons/favicon.ico">

    <title>Aplikasi PHP MySQL</title>
    <link rel="cannonical" href="https://getbootstrap.com/docs/4.0/examples/navbar-static/">

    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="navbar-top.css" rel="stylesheet">
</head>

<body>
    <?php require_once('menu.php'); ?>
    <br>
    <div class="container">
        <h2>Edit Data Barang</h2>

        <form method="post" name="form1">
            <div class="card">
                <div class="card-header">
                    Ubah Data Barang
                </div>
                <div class="card-body card-block">
                    <div class="row form-group">
                        <div class="col col-md-6">
                            <div class="form-group">
                                <label for="KodeBarang">Kode Barang :</label>
                                <input type="text" disabled value="<?php echo $data['KodeBarang']; ?>" name="KodeBarang" class="form-control">
                                <input type="hidden" required value="<?php echo $data['KodeBarang']; ?>" name="KodeBarang" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="Nama">Nama :</label>
                                <input type="text" required value="<?php echo $data['Nama']; ?>" name="Nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="HargaBeli">HargaBeli :</label>
                                <input type="text" required value="<?php echo $data['HargaBeli']; ?>" name="HargaBeli" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="HargaJual">HargaJual :</label>
                                <input type="text" required value="<?php echo $data['HargaJual']; ?>" name="HargaJual" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="Stok">Stok :</label>
                                <input type="text" required value="<?php echo $data['Stok']; ?>" name="Stok" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="Satuan">Satuan :</label>
                                <select class="form-control" name="Satuan">
                                    <option value="<?php echo $data['Satuan']; ?>"><?php echo $data['Satuan']; ?></option>
                                    <option value="PCS">PCS</option>
                                    <option value="KG">KG</option>
                                    <option value="BAL">BAL</option>
                                    <option value="DUS">DUS</option>
                                </select>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-success" name="btnsimpan" value="btnsimpan" type="submit"> Simpan
                                    <i class="ace-icon fa fa-signal"></i>
                                </button>
                                <button class="btn btn-danger" type="reset"> Reset
                                    <i class="ace-icon fa fa-signal"></i>
                                </button>
                                <a href="barang.php"><button class="btn btn-primary" type="button">Data Barang
                                        <i class="ace-icon fa fa-signal"></i>
                                    </button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
</body>

</html>