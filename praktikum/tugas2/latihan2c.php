<?php
/* 
Daffaiz Naufal
203040138
Shift Jumat 13.00
*/
?>
<?php 
    function tumpukanBola($tumpukan)
    {
        for ($i = 1; $i <= $tumpukan; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "<div class=bola>$i</div>";
            }
            echo "<br>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bola {
            background-color: salmon;
            height: 50px;
            width: 50px;
            line-height: 50px;
            text-align: center;
            margin-bottom: 3px;
            margin-right: 1px;
            border-radius: 50px;
            display: inline-block;
            border: 2px solid black;
            font-weight: bold;

        }
    </style>
</head>
<body>
    <?= tumpukanBola(5); ?>
</body>
</html>