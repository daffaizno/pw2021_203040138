<?php
/* 
Daffaiz Naufal
203040138
Shift Jumat 13.00
*/
?>

<?php 

$players = [
    [
    "Nama" => "Cristiano Ronaldo",
    "Club" => "Juventus",
    "Main" => "100",
    "Gol" => "76",
    "Assist" => "30"
    ],
    [
    "Nama" => "Lionel Messi",
    "Club" => "Barcelona",
    "Main" => "120",
    "Gol" => "80",
    "Assist" => "12"
    ],
    [
    "Nama" => "Luka Modric",
    "Club" => "Real Madrid",
    "Main" => "87",
    "Gol" => "12",
    "Assist" => "48"
    ],
    [
    "Nama" => "Mohammad Salah",
    "Club" => "Liverpool",
    "Main" => "90",
    "Gol" => "103",
    "Assist" => "8"
    ],
    [
    "Nama" => "Neymar Jr",
    "Club" => "Paris Saint Germain",
    "Main" => "109",
    "Gol" => "56",
    "Assist" => "15"
    ],
    [
    "Nama" => "Sadio Mane",
    "Club" => "Liverpool",
    "Main" => "63",
    "Gol" => "30",
    "Assist" => "70"
    ],
    [
    "Nama" => "Zlatan Ibrahimovic",
    "Club" => "AC Milan",
    "Main" => "100",
    "Gol" => "10",
    "Assist" => "12"
    ]
];

$jumlahMain = 0;
$jumlahGol = 0;
$jumlahAssist = 0;
foreach($players as $player) {
    $jumlahMain += $player["Main"];
    $jumlahGol += $player["Gol"];
    $jumlahAssist += $player["Assist"];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <style>
        .table, th, td{
            border: 1px solid black;
            padding: 5px;
            text-align: left;
        }
    </style>
</head>

<table>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>CLUB</th>
            <th>MAIN</th>
            <th>GOL</th>
            <th>ASSIST</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($players as $playerNo => $player) : ?>
            <tr>
                <td><?= $playerNo + 1; ?></td>
                <td><?= $player["Nama"]; ?></td>
                <td><?= $player["Club"]; ?></td>
                <td><?= $player["Main"]; ?></td>
                <td><?= $player["Gol"]; ?></td>
                <td><?= $player["Assist"]; ?></td>
            </tr>
        <?php endforeach; ?>
            <tr>
                <td>#</td>
                <td colspan="2" >Jumlah</td>
                <td><?= $jumlahMain ?></td>
                <td><?= $jumlahGol ?></td>
                <td><?= $jumlahAssist?></td>
            </tr>



</body>
</html>