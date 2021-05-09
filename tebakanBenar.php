<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        body{
            width: 100%;
            height: 100vh;
            background-image: url(wash.png);
            background-position: center;
            background-repeat: no-repeat;
            background-size: 50%;
            overflow: hidden;
        }
        h2, h4{
            color: #ff5200;
        }
        a{
            text-decoration: none;
            font-size: 15px;
        }
        a:hover{
            background-color: grey;
        }
    </style>
    <title>Tebakan Benar</title>
</head>
<body>
    <?php

    echo "<h2>Hello " .$_SESSION['nama']. ", Selamat jawaban Anda benar... </h2>";
    echo "<h4>Lives: " .$_SESSION['lives']. " | Score: " .$_SESSION["score"]."</h4>";
    echo "<a href='pertanyaan.php'>Pergi ke soal selanjutnya</a>";

    ?>    
</body>
</html>