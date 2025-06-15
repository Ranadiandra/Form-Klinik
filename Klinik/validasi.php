<!-- KODE INI GA PERLU KARENA SUDAH ADA DI LOGIN -->

<?php
session_start();
$host = "localhost";  // nama server
$user = "root";       // username MySQL
$pass = "";           // password MySQL
$db   = "db_klinik";     // nama database 

$conn = mysqli_connect($host, $user, $pass, $db);

// deklarasi variabel session
if(isset($_POST['username']) and isset($_POST['password']))
{
    if($_POST['username']==$valid_username and $_POST['password']==$valid_password)
    {
        // status login: valid
        $_SESSION['stat_login']=1;
        $_SESSION['username']=$_POST['username'];
        $_SESSION['password']=md5($_POST['password']);	

        header("location:./navigasi/home_page.php"); // redirect ke homepage.php
    }
    else
    {
        // status login: tidak valid
        echo"username atau password salah<br>";
        die("Silahkan <a href='index.php'>DI SINI</a> UNTUK LOGIN KEMBALI");
    }
}
else
    {
        echo"DATA TIDAK LENGKAP";
    }
?>