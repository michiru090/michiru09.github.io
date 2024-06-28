<?php
session_start();
require('db.php'); // Assuming the database connection is in db.php

$error = false;

if (isset($_POST['username'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT * FROM `users` WHERE `username`='$username' and `password`='$password'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header("Location: admin.php");
    } else {
        $error = true; // Set error flag to true
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index1.css">
    <title>Document</title>
</head>

<body>
    <div class="login">
        <div class="form">
            <h1>Log In</h1>
            <form action="" method="post">
                <input type="text" name="username" placeholder="Username" required /><br>
                <input type="password" name="password" placeholder="Password" required />
                <br>
                <input name="submit" type="submit" value="Login" />
                <?php
                if ($error) {
                    echo "<p style='color:red;'>Username/password is incorrect.</p>";
                }
                ?>
            </form>
            <p>Not registered yet? <a href='registration.php'>Register Here</a></p>
        </div>
    </div>
</body>

</html>