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

    $KodePetugas = trim($_POST['KodePetugas']);
    $Nama = trim($_POST['Nama']);
    $Jabatan = trim($_POST['Jabatan']);
    $Password = trim($_POST['Password']);

    $lokasi_file = $_FILES['Lokasi']['tmp_name'];
    $tipe_file   = $_FILES['Lokasi']['type'];
    $nama_file   = $_FILES['Lokasi']['name'];
    $direktori   = "image/$nama_file";

    //  echo $lokasi_file."<br>";
    //   echo $tipe_file."<br/>".$nama_file."<br>".$direktori;

    if (copy($lokasi_file, $direktori)) {
        //echo "data $nama_file telah disalin";
        unlink($lokasi_file);
    } else {
        echo ("gagal menyalin $nama_file");
    }

    $query_sql = "INSERT INTO tb_petugas (KodePetugas, Nama, Jabatan, Password, Lokasi) 
    VALUES ('$KodePetugas', '$Nama', '$Jabatan', '$Password', '$nama_file' )";
    $sql = mysqli_query($koneksidb, $query_sql) or die(mysqli_error());
    if ($sql) {
        echo "<script> alert ('Berhasil simpan .') </script>";
        echo "<script>window.location.href='petugas.php'</script>";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <script>
        function tampilkanPreview(gambar, idpreview) {
            var gb = gambar.files;
            for (var i = 0; i < gb.length; i++) {
                var gbPreview = gb[i];
                var imageType = /image.*/;
                var preview = document.getElementById(idpreview);
                var reader = new FileReader();

                if (gbPreview.type.match(imageType)) {
                    preview.file = gbPreview;
                    reader.onload = (function(element) {
                        return function(e) {
                            element.src = e.target.result;
                        };
                    })(preview);
                    reader.readAsDataURL(gbPreview);
                } else {
                    alert("file yang anda upload tidak sesuai. Khusus mengunakan image.");
                }

            }
        }
    </script>
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
        <h2>Tambah Data Teh</h2>
        <form method="post" name="form1" enctype="multipart/form-data">
            <div class="form-group">
                <div class="form-group">
                    <label for="KodePelanggan">Kode Petugas :</label>
                    <input type="text" required name="KodePetugas" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Nama">Nama Teh :</label>
                    <input type="text" required name="Nama" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Jabatan">Jenis Teh :</label>
                    <input type="text" required name="Jabatan" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Lokasi">File :</label>
                    <input name="Lokasi" type="file" id="Lokasi" accept="image/*" onchange="tampilkanPreview(this, 'preview')" \>

                    <img src="" alt="" name="preview" width="100px" height="100px" id="preview" />
                </div>

                <div class="form-check mb-12">
                    <button class="btn btn-success" name="btnsimpan" value="btnsimpan" type="submit"> Simpan
                        <i class="ace-icon fa fa-signal"></i>
                    </button>
                    <button class="btn btn-danger" type="reset"> Reset
                        <i class="ace-icon fa fa-signal"></i>
                    </button>
                    <a href="petugas.php"><button class="btn btn-primary" type="button"> Data Teh
                            <i class="ace-icon fa fa-signal"></i>
                        </button>
                    </a>
                </div>
            </div>
        </form>

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ302DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
</body>

</html>