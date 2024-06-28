<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>
<?php
require_once('koneksidb.php');

$KodeBarang = $_GET['id'];
$query_sql = "DELETE FROM tb_barang where KodeBarang='$KodeBarang'";
$sql = mysqli_query($koneksidb, $query_sql) or die(mysqli_error());
if ($sql) {
    echo "<script> alert ('Berhasil Hapus.') </script>";
    echo "<script>window.location.href='barang.php' </script>";
}
