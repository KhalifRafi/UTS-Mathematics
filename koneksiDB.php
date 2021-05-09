<?php

    $databaseHost = 'localhost';
    $databaseName = 'tabel_skor';
    $databaseUsername = 'root';
    $databasePassword = '';

    $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

    function inputTabel($nama, $score){
        $inputData = "INSERT INTO datapemain (Nama, Score) VALUES('".$nama."','".$score."')";
        if (mysqli_query($GLOBALS['mysqli'], $inputData)) {
          } else {
            echo "Error: " . $inputData . "<br>" . mysqli_error($GLOBALS['koneksi']);
          }
        mysqli_close($GLOBALS['mysqli']);
    }
?>