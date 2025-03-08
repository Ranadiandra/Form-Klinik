<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Pasien</title>
    <link rel="stylesheet" href="../navigasi/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet"/>
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
            margin-top: 5%;
            margin-bottom: 20px;
        }

        form {
            background-color: #ffffff;
            border: 1px solid #90caf9;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 40%;
            height: 70%;
        }

        table {
            width: 95%;
            margin-left: 10px;
            margin-right: 10px;
            margin-top: 15px;
        }

        td {
            padding: 8px;
        }

        input[type="text"], textarea, select {
            width: 100%;
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
                        <li><a href="../pasien/tampilan_pasien.php">Data Pasien</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <!-- END HEADER -->

    <!-- HERO -->
    <h2>FORM DATA PASIEN</h2>
    <form action="posting_pasien.php" name="form" method="POST">
        <table>
            <tr>
                <td><label for="">No Pasien</label></td>
                <td><input type="text" name="no_pasien" id="" size="5"></td>
            </tr>
            <tr>
                <td><label for="">Nama Pasien</label></td>
                <td><input type="text" name="nama_pasien" id="" size="30"></td>
            </tr>
            <tr>
                <td><label for="">Alamat</label></td>
                <td><textarea name="alamat" id="" rows="4" cols="30" placeholder="ketikan alamatmu"></textarea></td>
            </tr>
            <tr>
                <td><label for="">No. Handphone</label></td>
                <td><input type="text" name="hp" id="" size="30" placeholder="0899-9999-9999" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" maxlength="16"></td>
            </tr>
            <tr>
                <td><label for="">Kode Dokter</label></td>
                <td>
                    <select name="kode_dokter" id="">
                        <option value="">-- Pilih Kode Dokter --</option>
                        <?php
                        include '../koneksi.php';
                        $tampil=mysqli_query($conn, "SELECT * FROM dokter");
                        while($data=mysqli_fetch_array($tampil)){
                        ?>
                        <option value="<?php echo $data['kode_dokter']?>"><?php echo $data['kode_dokter']?> | <?php echo $data['nama_dokter']?></option>
                        
                        <?php } ?>                        
                        </select>
                </td>
            </tr>
        </table>
        <br>
        <div class="button-container">
            <input type="submit" name="simpan" id="" value="SAVE">
            <input type="reset" name="reset" id="" value="RESET">
        </div>
    </form>
    <!-- END HERO -->
</body>
</html>
