<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>
<?php
require_once('koneksidb.php');

$query_sql = "SELECT * FROM tb_petugas";
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
        <h2>Data Teh</h2>
        <a href="petugastambah.php"><button class="btn btn-primary" type="button"> Tambah Teh
                <i class="ace-icon fa fa-signal"></i>
            </button></a> <br><br>
        <table align="table-responsive" class="table table-striped table-bordered table-hover" id="dynamic-table">
            <thead>
                <th>Edit / Hapus</th>
                <th>Nama Teh</th>
                <th>Jenis Teh</th>
                <th>Gambar</th>
            </thead>
            <tbody>
                <?php do {
                    if ($totaldata == 0) {
                        echo 'data kosong.';
                    } else { ?>
                        <tr>
                            <td>
                                <a href="petugasedit.php?id=<?php echo $data['KodePetugas']; ?>"> <button class="btn-warning">Edit</button></a>
                                <a href="petugashapus.php?id=<?php echo $data['KodePetugas']; ?>"> <button class="btn-danger">Hapus</button></a>
                            </td>
                            <td><?php echo $data['Nama']; ?></td>
                            <td><?php echo $data['Jabatan']; ?></td>
                            <td> <?php
                                    $tempat_foto = "image/" . $data['Lokasi'];
                                    //echo $tempat_foto;
                                    echo "<img src=\"$tempat_foto\" width=\"100px\" height=\"100px\">"
                                    ?>
                            </td>

                        </tr>


                <?php }
                } while ($data = mysqli_fetch_assoc($sql));
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ302DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" cross origin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
</body>

</html>