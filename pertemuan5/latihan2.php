<?php
/*  
    Daffaiz Naufal  
    203040138   
    https://github.com/daffaizno/pw2021_203040138
    Pertemuan 5 - 5 Maret 2021
    Minggu ke-5 belajar pengulangan pada array php
*/
?>
<?php

// pengulangan pada array
// for / for each

$angka = [3,2,15,20,11,77,89];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear { 
            clear: both;
        }
    </style>
</head>
<body>
        <!-- for -->
    <?php for ($i = 0; $i < count($angka); $i++ ) { ?>
        <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } ?>
        
    <div class="clear"></div>

        <!-- foreach -->
    <?php foreach( $angka as $a ) { ?>
        <div class="kotak"><?php echo $a; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach( $angka as $a ) : ?>
        <div class="kotak"><?php echo $a; ?></div>
    <?php endforeach ;?>

</body>
</html>