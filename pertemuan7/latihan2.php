<?php
// cek apakah tidak ada data di $_GET
if (!isset($_GET["nama"]) || 
    !isset($_GET["Manufacturer"]) ||
    !isset ($_GET["nama"]) ||
    !isset($_GET["class"]) ||
    !isset($_GET["production"])) {
    // redirect
    header("Location: latihan1.php");
    exit;
}
?>

<!-- GET -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"];?>" alt=""></li>
        <li><?= $_GET["Manufacturer"];?></li>
        <li><?= $_GET["nama"];?></li>
        <li><?= $_GET["class"];?></li>
        <li><?= $_GET["production"];?></li>
    </ul>
    <a href="latihan1.php">tombol balik</a>
</body>
</html>