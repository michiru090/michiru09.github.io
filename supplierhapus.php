<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>
<?php
require_once('koneksidb.php');

$KodeSupplier = $_GET['id'];
$query_sql = "DELETE FROM tb_supplier where KodeSupplier=$KodeSupplier";
$sql = mysqli_query($koneksidb, $query_sql) or die(mysqli_error());
if ($sql) {
    echo "<script> alert ('Berhasil Hapus.') </script>";
    echo "<script>window.location.href='supplier.php'</script>";
}
?>