<?php
/*  
    Daffaiz Naufal  
    203040138   
    https://github.com/daffaizno/pw2021_203040138
    Pertemuan 6 - 12 Maret 2021
    Minggu ke-6 belajar mengenai associative array dalam php
*/
?>
<?php 

// $mahasiswa = [
//     ["John", "123456", "Teknik Informatika", "johntest@gmail.com"],
//     ["Denny", "654321", "Teknik Informatika", "dennytest@gmail.com"]
// ];

// array associative 
// definisi sama seperti array numerik kecuali Key-nya adalah string kita buat sendiri

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

    <title>Daftar Mobil</title>
</head>
<body>
<h1>List Mobil</h1>
<?php foreach ($cars as $car) :?>
<ul>
    <li> 
        <img src="img/<?= $car["gambar"];?>">
    <li>
    <li>Manufacturer: <?= $car["Manufacturer"]; ?></li>
    <li>series/models: <?= $car["series/models"]; ?></li>
    <li>class: <?= $car["class"]; ?></li>
    <li>production year: <?= $car["production"]; ?></li>
</ul>
<?php endforeach; ?>
</body>
</html>