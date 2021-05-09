<?php
	session_start();

	if (isset($_SESSION["nama"])) {} 
    else {
		$_SESSION["nama"] = $_POST["nama"];
		$_SESSION["email"] = $_POST["email"];
	}
	if ($_SESSION["lives"] == 0) {
		header('Location: gameOver.php');
	}

	$bilPertama = rand(0,20);
	$bilKedua = rand(0,20);
	$hasilPenjumlahan = $bilPertama + $bilKedua;
	$_SESSION["hasil"] = $hasilPenjumlahan;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            width: 100%;
            height: 100vh;
            background-image: url(covid.png);
            background-position: center;
            background-repeat: no-repeat;
            background-size: 50%;
            overflow: hidden;
        }
        h2{
            color: #0e49b5;
        }
    </style>
    <title>Pertanyaan</title>
</head>
<body>
    
    <form action="peraturan.php" method="POST">
        <h2>Hello <?php echo $_SESSION["nama"];?>, tetap semangat ya...you can do the best!!!</h2>
        <h2>Lives: <?php echo $_SESSION["lives"];?> | Score: <?php echo $_SESSION["score"];?></h2>
        Berapakah <?php echo $bilPertama; ?> + <?php echo $bilKedua; ?> =
        <input type="text" name="hasil">
        <input type="submit" value="jawab">
    </form>

</body>
</html>