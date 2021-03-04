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
        .loop {
            background-color: salmon;
            display: inline-block;
            height: 50px;
            width: 50px;
            border-radius: 50px;
            line-height: 50px;
            text-align: center;
            margin-bottom: 5px;
            border: 1px solid black;
        }

    </style>
</head>
<body>
    
    <?php for( $i = 1; $i <= 3; $i++ ) : ?>
        <?php for( $j = 1; $j <= $i; $j++ ) : ?>
            <div class="loop"><?= $i ?></div>
        <?php endfor; ?>
        <br>
    <?php endfor; ?>

</body>
</html>