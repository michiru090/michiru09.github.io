<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
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
    <title>Top navbar example for Bootstrap</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/navbar-static/">
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="navbar-top.css" rel="stylesheet">
</head>

<body>

    <?php require_once('menu.php'); ?>
    <div class="container">
        <div class="jumbotron">
            <h1>Aplikasi Persediaan Barang</h1>
            <p class="lead">Aplikasi mudah belajar PHP Dasar dengan Database MySQL .</p>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ302DKtIkvYIKзUENzmM7KCkRr/rE9/Qpg6aAZGJWFDMVNA/GpGFF93hXpG5KkN" cross origin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
</body>
L

</html>