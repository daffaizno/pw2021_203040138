<?php
//mengecek apakah ada id yang dikirimkan
//jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

//mengambil id dari url
$id = $_GET['id'];

// melakukan query dengan parameter id yang diambil dari url
$mobil = query("SELECT * FROM list_mobil WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $mobil["gambar"]; ?>">
        </div>
        <div class="keterangan">
            <p><?= $mobil["Manufacturer"]; ?></p>
            <p><?= $mobil["Series/Models"]; ?></p>
            <p><?= $mobil["Class"]; ?> </p>
            <p><?= $mobil["Production Date"]; ?></p>
        </div>

    <button class "back-button"><a href="../index.php">Back</button>
    </div>
</body>

</html>