<?php
/*  
    Daffaiz Naufal  
    203040138   
    https://github.com/daffaizno/pw2021_203040138
    Pertemuan 7 - 19 Maret 2021
    Minggu ke-7 belajar Get & Post
*/
?>

<?php 
// SUPERGLOBALS
// variable global milik php
// merupakan Array Associative

// $_GET
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV


// $_GET
$cars = [
    [
        "Manufacturer" => "toyota",
        "series/models" => "Land Cruiser J10 1998",
        "class" => "off-road/SUV",
        "production" => "1998",
        "gambar" => "toyotaj100.jpg"
    ],
    [
        "Manufacturer" => "Mercedez-Benz",
        "series/models" => "Merceez-Benz-G-Class (W463), Second generation",
        "class" => "Luxury SUV",
        "production" => "2018",
        "gambar" => "benz-gclass.jpg"
    ]
];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>
<body>
    <h1>Daftar Mobil</h1>
    <?php foreach ($cars as $car) :?>
        <ul>
            <li>
            <a href="latihan2.php?nama=<?= $car["series/models"];?>&Manufacturer=<?= $car["Manufacturer"];?>&class=<?= $car["class"];?>&production=<?= $car["production"];?>&gambar=<?= $car["gambar"];?> "><?= $car["series/models"]; ?></a>
            </li>
        </ul>
    <?php endforeach ; ?>
</body>
</html>

