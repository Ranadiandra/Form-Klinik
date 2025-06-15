<!-- Selasa, 29 April 2025 -->
<?php
include "koneksi.php";
session_start();

if(isset($_SESSION['username'])){
    header("location: navigasi/home_page.php");
    exit();
}
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM login_klinik WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if($result->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        header("location: navigasi/home_page.php");
        exit();
    }else{
        echo "<script>alert('Username atau Password salah!, silahkan coba lagi')</script>";
    }                                                                                                                                                                                                                                                                                                                                                                              
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM LOGIN</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet"/>
</head>
<body>
    <h2>LOGIN</h2>
    <form name="Fbiodata" action="" method="post">
        <table>
            <tr>
                <td><label for="">Username</label></td>
                <td><input type="text" name="username" value="" class="form-control" placeholder=" Masukkan Username" required><br></td>
            </tr>
            <tr>
                <td><label for="">Password</label></td>
                <td><input type="password" name="password" value="" class="form-control" placeholder=" Masukkan Password" required></td>
            </tr>
        </table>
        <div class="button-container">
            <input type="submit" name="submit" id="" class="btn btn-primary" value="LOGIN">
        </div>
    </form>
</body>
</html>