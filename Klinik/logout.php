<?php
session_start();
session_destroy();
header("location:index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGOUT</title>
</head>
<body>
    <h2>Berhasil Logout</h2>

    <a href="index.php">Login Kembali <br>
        <button>Klik untuk login</button></a>
</body>
</html>