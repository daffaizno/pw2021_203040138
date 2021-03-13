<?php
/*  
    Daffaiz Naufal  
    203040138   
    https://github.com/daffaizno/pw2021_203040138
    Pertemuan 6 - 12 Maret 2021
    Minggu ke-6 belajar mengenai associative array dalam php
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .kotak{
            background-color: yellowgreen;
            width: 50px;
            height: 50px;
            text-align: center;
            line-height: 50px;
            margin: 5px;
            float: left;
            transition: 2s;

        }
        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;

        }

        .clear{
            clear: both;
        }
    </style>
</head>
<body>

<?php
 // array multidimensi 
$angka = [  
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
?>

<?php foreach($angka as $a) : ?>
    <?php foreach($a as $b) : ?>
        <div class="kotak"> <?php echo $b;?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
<?php endforeach; ?>
</body>
</html>