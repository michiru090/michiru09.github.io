<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>
<?php
require_once('koneksidb.php');

$KodePetugas = $_GET['id'];
$query_sql = "SELECT * FROM tb_petugas WHERE KodePetugas = '$KodePetugas'";
$sql = mysqli_query($koneksidb, $query_sql) or die(mysqli_error($koneksidb));
$data = mysqli_fetch_assoc($sql);

if ($data) {
    // Delete the file from the server
    if (!empty($data['Lokasi']) && file_exists("image/" . $data['Lokasi'])) {
        unlink("image/" . $data['Lokasi']);
    }
    // Delete the database record
    $query_sql = "DELETE FROM tb_petugas WHERE KodePetugas='$KodePetugas'";
    $sql = mysqli_query($koneksidb, $query_sql) or die(mysqli_error($koneksidb));
    if ($sql) {
        echo "<script>alert('Berhasil hapus.'); window.location.href='petugas.php';</script>";
    } else {
        echo "<script>alert('Gagal hapus data.'); window.location.href='petugas.php';</script>";
    }
} else {
    echo "<script>alert('ID tidak ditemukan.'); window.location.href='petugas.php';</script>";
}
?>
