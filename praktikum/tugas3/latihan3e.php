<?php
/* 
Daffaiz Naufal
203040138
Shift Jumat 13.00
*/
?>

<?php

$cars = [
    [
        "Manufacturer" => "Toyota",
        "series/models" => "Land Cruiser J10 1998",
        "class" => "off-road/SUV",
        "production" => "1998",
        "gambar" => "toyotaj100.jpg"
    ],
    [
        "Manufacturer" => "Mercedez-Benz",
        "series/models" => "Mercedez-Benz-G-Class (W463), Second generation",
        "class" => "Luxury SUV",
        "production" => "2018",
        "gambar" => "benz-gclass.jpg"
    ],
    [
        "Manufacturer" => "Toyota",
        "series/models" => "Supra",
        "class" => "Sports Car",
        "production" => "2019",
        "gambar" => "toyotasupra.png"
    ],
    [
        "Manufacturer" => "Mitsubishi",
        "series/models" => "Pajero Sport Third generation ",
        "class" => "SUV",
        "production" => "2015",
        "gambar" => "pajerosport.jpg"
    ],
    [
        "Manufacturer" => "Porsche",
        "series/models" => "Panamera",
        "class" => "Executive / Luxury Car",
        "production" => "2009",
        "gambar" => "porschepanamera.jpg"
    ],
    [
        "Manufacturer" => "Honda",
        "series/models" => "City",
        "class" => "Subcompact Car",
        "production" => "1981",
        "gambar" => "hondacity.jpg"
    ],
    [
        "Manufacturer" => "Mazda",
        "series/models" => "RX-7 (FD3S)",
        "class" => "Coupe",
        "production" => "1985",
        "gambar" => "mazdarx7.jpg"
    ],
    [
        "Manufacturer" => "Renault",
        "series/models" => "Megane IV",
        "class" => "Hatcback",
        "production" => "2016",
        "gambar" => "renaultmegane.jpg"
    ],
    [
        "Manufacturer" => "Subaru",
        "series/models" => "WRX STI",
        "class" => "Sedan",
        "production" => "2014",
        "gambar" => "subaruwrxsti.jpg"
    ],
    [
        "Manufacturer" => "BMW",
        "series/models" => "X3",
        "class" => "SUV",
        "production" => "2003",
        "gambar" => "bmwx3.jpg"
    ]
];
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Latihan</title>
</head>

<body>
    <div class="float-md-start">
        <table class="table table-bordered table-striped table-hover text-center table-dark">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Merk</th>
                    <th scope="col">Series / Model</th>
                    <th scope="col">Class</th>
                    <th scope="col">Production Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cars as $carno => $car ) : ?>
                    <tr>
                        <td><?= $carno +1 ?></td>
                        <td>
                            <img src="img/<?= $car["gambar"]; ?>">
                        </td>
                        <td><?= $car["Manufacturer"]; ?></td>
                        <td><?= $car["series/models"]; ?></td>
                        <td><?= $car["class"]; ?></td>
                        <td><?= $car["production"]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>






















</body>

</html>