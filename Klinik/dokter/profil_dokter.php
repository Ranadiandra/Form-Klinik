<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Dokter</title>
    <link rel="stylesheet" href="profil.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet"/>
</head>
<body>
    <!-- HEADER -->
    <header>
        <nav>
            <ul class="menu">
                <li><a href="#home">Home</a></li>
                <li class="dropdown">
                    <a href="#">Halaman Dokter</a>
                    <ul class="dropdown-menu">
                        <li><a href="../admin/dokter/index_dokter.php">Form Data Dokter</a></li>
                        <li><a href="../admin/dokter/tampilan_dokter.php">Data Dokter</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">Halaman Pasien</a>
                    <ul class="dropdown-menu">
                        <li><a href="../admin/pasien/index_pasien.php">Form Data Pasien</a></li>
                        <li><a href="../admin/pasien/tampilan_pasien.php">Data Pasien</a></li>
                    </ul>
                </li>
                <li>
                <a href="../logout.php" class="btn btn-danger" style="padding: 10px 20px; background-color: red; color: white; border: none; border-radius: 5px; text-decoration: none;">Logout</a>
                </li>
            </ul>
        </nav>
    </header>
    <!-- END HEADER -->

    <!-- HERO -->
    <div class="hero">
        <h2>Profil Dokter</h2>
        <img src="../image/si_imup.jpg" alt="" srcset="" width="100px" height="100px">
        <label for="">RANA DIANDRA ZAHRA XI RPL 1</label>
        <br>
        <table>                                 
            <tr>
                <td>
                    <h5>USER DETAILS</h5><br>
                    <a href="editprofil_dokter.php">klik aku lee buat edit</a>
                </td>
            </tr>
            <tr>
            </tr>
        </table>
    <!-- END HERO -->
</body>
</html>