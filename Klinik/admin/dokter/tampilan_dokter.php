<?php
include "../../koneksi.php";
session_start();
if(!isset($_SESSION['username']) and !isset($_SESSION['password'])){
    die("ANDA BELUM LOGIN, SILAHKAN LOGIN <a href='../../index.php'>DI SINI</a> UNTUK MELIHAT DATA");
    // header("location:../../index.php");  bisa juga pake ini
}
else{
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Data Dokter</title>
    <link rel="stylesheet" href="../../navigasi/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h2, table{
            margin-top: 7%;
        }
        h2 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }

        th{
            padding: 8px;
            text-align: center;
        }

        td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .button.edit{
            display: inline-block;
            padding: 6px 12px;
            margin: 4px 2px;
            border: none;
            border-radius: 4px;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            text-decoration: none;
            font-size: 14px;
            cursor: pointer;
            width: 65px;
        }
        .button.delete {
            display: inline-block;
            padding: 6px 12px;
            margin: 4px 2px;
            border: none;
            border-radius: 4px;
            background-color: #f44336;
            color: white;
            text-align: center;
            text-decoration: none;
            font-size: 14px;
            cursor: pointer;
            width: 75px;
        }
    </style>

</head>
<body>
    <!-- HEADER -->
    <header>
        <nav>
            <ul class="menu">
                <li><a href="../../navigasi/home_page.php">Home</a></li>
                <li class="dropdown">
                    <a href="#">Halaman Dokter</a>
                    <ul class="dropdown-menu">
                        <li><a href="index_dokter.php">Form Data Dokter</a></li>
                        <li><a href="tampilan_dokter.php">Data Dokter</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">Halaman Pasien</a>
                    <ul class="dropdown-menu">
                        <li><a href="../pasien/index_pasien.php">Form Data Pasien</a></li>
                        <li><a href="../pasien/tampilan_pasien.php">Data Pasien</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <!-- END HEADER -->

    <!-- HERO -->
    <h2>DATA DOKTER</h2>
    <table border="1">
        <tr>
            <th>KODE DOKTER</th>
            <th>NAMA DOKTER</th>
            <th>NAMA POLI</th>
            <th>AKSI</th>
        </tr>

        <?php
        include '../../koneksi.php';
        $tampil = mysqli_query($conn, "SELECT * FROM dokter");
        while($data = mysqli_fetch_array($tampil)){
        ?>

        <tr>
            <td><?php echo $data['kode_dokter'] ?></td>
            <td><?php echo $data['nama_dokter'] ?></td>
            <td><?php echo $data['poli'] ?></td>
            <td class="button"> 
            <a href='edit.php?kode_dokter="<?php echo $data['kode_dokter']?>"' class="button edit">EDIT</a> 
            <a href='hapus.php?kode_dokter="<?php echo $data['kode_dokter']?>"' class="button delete">DELETE</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <!-- END HERO -->
</body>
</html>
<?php } ?>