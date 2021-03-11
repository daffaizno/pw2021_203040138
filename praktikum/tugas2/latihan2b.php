<?php
/* 
Daffaiz Naufal
203040138
Shift Jumat 13.00
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .border {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
<?php

$jawabanIsset= "Isset adalah = Fungsi isset pada PHP adalah Fungsi isset  digunakan untuk memeriksa apakah suatu variabel sudah diatur atau belum. Fungsi isset  mengembalikan false jika variabel pengujian berisi nilai NULL<br><br>";
$jawabanEmpty = "Empty adalah = Empty pada PHP berfungsi sebagai penanda suatu kondisi. Contohnya yang sering kita temukan adalah dalam pengisian suatu data.";

function soal($style){
    global $jawabanIsset, $jawabanEmpty;
    echo $jawabanIsset, $jawabanEmpty;
    return $style;
    
}

?>

<div class="border">
<?php echo soal(""); ?>
</div>

</body>
</html>
