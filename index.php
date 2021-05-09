<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        .menu-sapa{
            width: 100%;
            height: 100vh;
            background-image: url(bg1a.png);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            text-align: center;
            padding-top: 5px;
        }
        .menu-sapa h4{
            color: #3f37c9;
            padding-bottom: 10px;
        }
        .menu-sapa h6{
            font-size: 20px;
            padding-top: 10px;
        }
        .form-login{
            width: 100%;
            height: 100vh;
            background-image: url(mask.png);
            background-position: center;
            background-repeat: no-repeat;
            background-size: 50%;
        }
        .form-login input{
            width: 35%;
        }

    </style>
    <title>Menu Utama</title>
  </head>
  <body>

    <?php

    $_SESSION["lives"] = 5;
    $_SESSION["score"] = 0;

    if (isset($_SESSION["nama"])) {
        echo "<div class='menu-sapa'>";
            echo "<h4>Hallo ".$_SESSION["nama"].", selamat datang kembali di permainan ini!!! </h4>";
            echo "<a href='pertanyaan.php'>[Start Game]</a>";
            echo "<h6>Bukan anda ? <a href='newGame.php'>(Klik di sini)</a></h6>";
        echo "</div>";
    } else {
        echo "<div class='form-login form-group'>";
            echo "<form action='pertanyaan.php' method='post'>";
            echo "<label>Masukkan Nama</label>";
            echo "<input type='text' name='nama' class='form-control'><br><br>";
            echo "<label>Masukkan Email</label>";
            echo "<input type='email' name='email' class='form-control'><br><br>";
            echo " <button type='submit' name='submit' class='btn btn-primary'>Submit</button>";
            echo "</form>";
        echo "</div>";
    }

?>    

  </body>
</html>
