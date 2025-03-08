<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien</title>
    <link rel="stylesheet" href="../navigasi/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h2 {
            color: #333;
        }
        h2, table{
            margin-top: 7%;
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
                <li><a href="../navigasi/home_page.php">Home</a></li>
                <li class="dropdown">
                    <a href="#">Halaman Dokter</a>
                    <ul class="dropdown-menu">
                        <li><a href="../index.php">Form Data Dokter</a></li>
                        <li><a href="../tampilan_dokter.php">Data Dokter</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">Halaman Pasien</a>
                    <ul class="dropdown-menu">
                        <li><a href="../pasien/index_pasien.php">Form Data Pasien</a></li>
                        <li><a href="pasien/tampilan_pasien.php">Data Pasien</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <!-- END HEADER -->

    <!-- HERO -->
    <h2>DATA PASIEN</h2>
    <table border="1">
        <tr>
            <th>NO. PASIEN</th>
            <th>NAMA PASIEN</th>
            <th>ALAMAT</th>
            <th>NO. HANDPHONE</th>
            <th>KODE DOKTER</th>
            <th>AKSI</th>
        </tr>

        <?php 
        include '../koneksi.php'; 
        $tampil = mysqli_query($conn, "SELECT * FROM pasien");
        while($data = mysqli_fetch_array($tampil)){
        ?>

        <tr>
            <td><?php echo $data['no_pasien']?></td>
            <td><?php echo $data['nama_pasien']?></td>
            <td><?php echo $data['alamat']?></td>
            <td><?php echo $data['hp']?></td>
            <td><?php echo $data['kode_dokter']?></td>
            <td>
            <a href="edit_pasien.php?no_pasien=<?php echo $data['no_pasien']?>" class="button edit">EDIT</a>
            <a href="hapus_pasien.php?no_pasien=<?php echo $data['no_pasien']?>" class="button delete">DELETE</a></td>
        </tr>
        <?php } ?>
    </table>
    <!-- END HERO -->
</body>
</html>