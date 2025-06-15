<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dokter dan Pasien</title>
    <link rel="stylesheet" href="style.css">
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
    <section class="hero" id="home">
        <div>
        <h1>Selamat Datang di Website Rana</h1><br>
        </div>
        <div>
        <p>Halaman ini menyediakan data dokter dan pasien untuk memastikan pelayanan kesehatan <br>
            yang lebih efisien dan terorganisir. Disini kamu dapat melakukan insert, update, dan delete <br>
            data terbaru dari nama dokter dan pasien.</p>
        </div>
    </section>
    <!-- END HERO -->

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Navigation</h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="../admin/dokter/">Data Dokter</a></li>
                        <li><a href="../admin/pasien/tampilan_pasien.php">Data Pasien</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Cooperation</h4>
                    <ul>
                        <li><a href="#">Jejew's Company</a></li>
                        <li><a href="#">Pidaw's Company</a></li>
                        <li><a href="#">Nince's Company</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Follow Us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="copy-right">
                <p>&copy; 2025 Rana. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->
</body>
</html>