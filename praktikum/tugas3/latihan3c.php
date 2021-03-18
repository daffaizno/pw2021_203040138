<?php
/* 
Daffaiz Naufal
203040138
Shift Jumat 13.00
*/
?>

<?php 

$pemainterkenal = [
    "Cristiano Ronaldo" => "Juventus",
    "Lionel Messi" => "Barcelona",
    "Luca Modric" => "Real Madrid",
    "Mohammad Saleh" => "Liverpool",
    "Neymar Jr" => "Paris Saint German",
    "Sadio Mane" => "Liverpool",
    "Zlatan Ibrahimovic" => "Ac Milan"
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <style>
        .kotak {
            border: 1px solid black;
            padding: 5px;
            width: 50%;
            text-align: left;
        }
    </style>
</head>
<body>

    <div class="kotak">
        <h3>Daftar pemain bola terkenal dan clubnya</h3>
        <table>
            <?php foreach($pemainterkenal as $nama => $club) : ?>
                <tr>
                    <td><b><?= $nama; ?></b></td>
                    <td>:</td>
                    <td><?= $club; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

</body>
</html>




