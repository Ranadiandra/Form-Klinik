<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POPUP</title>
    <style>
  body {
    background-color: #f0f0f0;
    font-family: Arial, sans-serif;
  }

  .popup {
    background-color: #ffffff;
    border: 2px solid #2196F3;
    padding: 20px 30px;
    width: 300px;
    margin: 100px auto;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0px 5px 15px rgba(0,0,0,0.3);
    animation: fadeIn 0.5s ease-in-out;
  }

  .popup a {
    display: inline-block;
    margin-top: 15px;
    padding: 10px 20px;
    background-color: #2196F3;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
  }

  .popup a:hover {
    background-color: #1976D2;
  }

  @keyframes fadeIn {
    from {opacity: 0; transform: scale(0.8);}
    to {opacity: 1; transform: scale(1);}
  }

  /* style agar pop up bisa di hide */
  .popup.hide {
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.5s ease-out, visibility 0.5s ease-out;
}
</style>

</head>
<body>

<?php
session_start();

if (!isset($_SESSION['stat_login']) and !isset($_SESSION['username']) and !isset($_SESSION['password'])) {
    echo "
    <div class='popup'>
      <h2>ANDA BELUM LOGIN</h2>
      <p>Silahkan klik</p>
      <a href='index.php'>LOGIN</a>
    </div>";
    die();
} else {
    echo "
    <div class='popup'>
      <h2>Login Berhasil</h2>
      <p>Selamat Datang <strong>" . $_SESSION['username'] . "</strong></p>
      <a href='../navigasi/home_page.php'>OK</a>
    </div>";
}
?>

<!-- <script>
  setTimeout(function() {
    var popup = document.querySelector('.popup');
    if (popup) {
      popup.classList.add('hide');
    }
  }, 3000); // 3000 ms = 3 detik -->
</script>
</body>
</html>