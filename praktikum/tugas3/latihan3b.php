<?php
/* 
Daffaiz Naufal
203040138
Shift Jumat 13.00
*/
?>

<?php 

$pemainterkenal = ["Mohammad Salah","Cristiano Ronaldo","Lionel Messi","Zlatan Ibrahimovic","Neymar Jr"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h2>Daftar Pemain Bola terkenal</h2>
<ol>
        <?php foreach ($pemainterkenal as $nama) :?>
            <li><?= $nama; ?></li>
        <?php endforeach; ?>
</ol>


<h2>daftar pemain bola terkenal baru</h2>
    <?php 
        $pemainterkenal[] = "Luca Modric";
        $pemainterkenal[] = "Sadio Mane";
        sort($pemainterkenal);
    ?>

    <ol>
        <?php foreach ($pemainterkenal as $nama) :?>
            <li><?= $nama; ?></li>
        <?php endforeach; ?>
    </ol>    
</body>
</html>
