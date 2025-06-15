<?php
include "../../koneksi.php";
session_start();
if(!isset($_SESSION['username']) and !isset($_SESSION['password'])){
    die("ANDA BELUM LOGIN, SILAHKAN LOGIN <a href='../../index.php'>DI SINI</a> UNTUK MELAKUKAN EDIT DATA");
}
else{
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #e3f2fd;
        color: #0d47a1;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        flex-direction: column;
    }

    h2 {
        color: #0d47a1;
        margin-bottom: 20px;
    }

    form {
        background-color: #ffffff;
        border: 1px solid #90caf9; 
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 40%;
        height: 50%;
    }

    table {
         width: 100%;
        margin-left: 10px;
        margin-top: 40px;
    }

    td {
        padding: 8px;
    }

    input[type="text"] {
        width: 90%;
        padding: 8px;
        border: 1px solid #90caf9; 
        border-radius: 4px;
    }

    .button-container {
            text-align: center;
            margin-top: 20px;
        }

        input[type="submit"], input[type="reset"] {
            background-color: #42a5f5; 
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
            width: 25%;
        }

    input[type="submit"]:hover, input[type="reset"]:hover {
        background-color: #1e88e5;
    }
</style>
    
<body>
<h2>FORM UPDATE DOKTER</h2>
    <form action="update_dokter.php" name="form" method="POST">
        <table>
            <?php
            include '../../koneksi.php';
            $kode = $_GET['kode_dokter'];
            $tampil = mysqli_query($conn, "SELECT * FROM dokter WHERE kode_dokter = $kode");
            while($data = mysqli_fetch_array($tampil)){
            ?>
            <tr>
                <td><label for="">Kode Dokter</label></td>
                <td><input type="text" name="kode_dokter" id="" size="5" value="<?php echo $data['kode_dokter'] ?>"></td>
            </tr>
            <tr>
                <td><label for="">Nama Dokter</label></td>
                <td><input type="text" name="nama_dokter" id="" size="30" value="<?php echo $data['nama_dokter'] ?>"></td>
            </tr>
            <tr>
                <td><label for="">Nama Poli</label></td>
                <td><input type="text" name="poli" id="" size="30" value="<?php echo $data['poli'] ?>"></td>
            </tr>
            <?php } ?>
        </table>
        <br>
        <div class="button-container">
            <input type="submit" name="simpan" id="" value="UPDATE">
            <input type="reset" name="reset" id="" value="RESET">
        </div>
    </form>
</body>
</html>
<?php } ?>