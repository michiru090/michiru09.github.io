<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>
<?php
require_once('koneksidb.php');
$query_sql = "SELECT * FROM tb_barang";
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
    <link rel="icon" href="docs/4.0/assets/img/favicons.ico">

    <title>Aplikasi PHP MySQL</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/navbar-static/">

    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="navbar-top.css" rel="stylesheet">
</head>

<body>
    <?php require_once('menu.php'); ?>
    <br>
    <div class="container">
        <h2>Data Barang</h2>
        <a href="barangtambah.php"><button class="btn btn-primary" type="button"> Tambah Barang
                <i class="ace-icon fa fa-signal"></i>
            </button></a>
        <br><br>

        <table align="table-responsive" class="table table-striped table-bordered table-hover" id="dynamic-table">
            <thead>
                <th>Ubah / Hapus</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Harga beli</th>
                <th>Harga jual</th>
                <th>Stok</th>
                <th>Satuan</th>
                <th>Petugas</th>
            </thead>
            <tbody>
                <?php do {
                    if ($totaldata == 0) {
                        echo 'data kosong.';
                    } else { ?>
                        <tr>
                            <td>
                                <a href="barangedit.php?id=<?php echo $data['KodeBarang']; ?>">
                                    <button class="btn-warning">Ubah</button></a>
                                <a href="baranghapus.php?id=<?php echo $data['KodeBarang']; ?>">
                                    <button class="btn-danger">Hapus</button></a>
                            <td><?php echo $data['KodeBarang']; ?></td>
                            <td><?php echo $data['Nama']; ?></td>
                            <td><?php echo $data['HargaBeli']; ?></td>
                            <td><?php echo $data['HargaJual']; ?></td>
                            <td><?php echo $data['Stok']; ?></td>
                            <td><?php echo $data['Satuan']; ?></td>
                            <td><?php echo $data['Petugas']; ?></td>
                            </td>


                        </tr>
                <?php }
                } while ($data = mysqli_fetch_assoc($sql));
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5Kkn" crossorigin="anonymous"></script>
    <<script>window.jquery || document.write('<script src="assets/js/vendor/jqery-slim.min.js"></script>')</script>
        <script src="assets/js/vendor/popper.min.js"></script>
        <script src="dist/js/bootstrap.min.js"></script>
</body>

</html>