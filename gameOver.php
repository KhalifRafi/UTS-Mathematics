<?php    
    session_start();
    include "koneksiDB.php";
    inputTabel($_SESSION["nama"], $_SESSION["score"]);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        body{
            background-color: #ffd3b4;
        }
    </style>
    <title>Game Over</title>
  </head>
  <body>
        <h2>Hello <?php echo $_SESSION["nama"];?>, Sayang permainan sudah selesai. Semoga lain kali bisa lebih baik.</h2>
        <h2>Score Anda : <?php echo $_SESSION["score"]; ?></h2><br>
        <a href="newGame.php">Main Lagi ?</a>
        <br><br>
        <h4>LeaderBoard</h4>
        <br><br>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Score</th>
                </tr>
            </thead>
            <?php
            $mysqli = mysqli_connect($databaseHost,$databaseUsername,$databasePassword,$databaseName) or die(mysqli_error());
            $inputData = "SELECT * FROM datapemain ORDER BY score DESC LIMIT 10";
            $result = mysqli_query($GLOBALS['mysqli'], $inputData);
            if (mysqli_num_rows($result) > 0) {
                $i = 1;
                while($row = mysqli_fetch_array($result)) {
                    echo "<tbody>";
                    echo "<tr>";
                    echo "<td>" . $i . "</td>";
                    echo "<td>" . $row["Nama"] . "</td>";
                    echo "<td>" . $row["Score"] . "</td>";
                    echo "</tr>";
                    echo "</tbody>";
                    $i = $i + 1;  
                }
            } else {
                
            }
            mysqli_close($GLOBALS['mysqli']);
            ?>
        </table>
  </body>
</html>
