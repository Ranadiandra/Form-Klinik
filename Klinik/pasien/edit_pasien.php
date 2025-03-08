<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Update Pasien</title>

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
            height: 65%;
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
    <h2>FORM UPDATE PASIEN</h2>
    <form action="update_pasien.php" name="form" method="POST">
        <table>
            <?php
            include '../koneksi.php';
            $kode = $_GET['no_pasien'];
            $tampil = mysqli_query($conn, "SELECT * FROM pasien WHERE no_pasien = '$kode'");
            while($data = mysqli_fetch_array($tampil)){
            ?>
            <tr>
                <td><label for="">No Pasien</label></td>
                <td><input type="text" name="no_pasien" id="" size="5" value="<?php echo $data['no_pasien']?>"></td>
            </tr>
            <tr>
                <td><label for="">Nama Pasien</label></td>
                <td><input type="text" name="nama_pasien" id="" size="30" value="<?php echo $data['nama_pasien']?>"></td>
            </tr>
            <tr>
                <td><label for="">Alamat</label></td>
                <td><textarea name="alamat" id="" cols="30" rows="5"><?php echo $data['alamat']?></textarea></td>
            <tr>
                <td><label for="">No. Handphone</label></td>
                <td><input type="text" name="hp" id="" size="30" placeholder="0899-9999-9999" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" maxlength="16" value="<?php echo $data['hp'] ?>"></td>
            </tr>
            <tr>
                <td><label for="">Kode Dokter</label></td>
                <td>
                    <select name="kode_dokter" id="">
                        <option value="">-- Pilih Kode Dokter --</option>
                        <?php
                        include '../koneksi.php';
                        $tampil_dokter=mysqli_query($conn, "SELECT * FROM dokter");
                        while($data=mysqli_fetch_array($tampil_dokter)){
                        ?>
                        <option value="<?php echo $data['kode_dokter']?>"><?php echo $data['kode_dokter']?> | <?php echo $data['nama_dokter']?></option> 
                        <?php } ?>                        
                        </select>
                </td>
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