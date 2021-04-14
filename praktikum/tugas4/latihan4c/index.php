<?php
/* 
Daffaiz Naufal
203040138
Shift Jumat 13.00
*/
?>

<?php
//menghubungkan dengan file php lainnya
require 'php/functions.php';

//melakukan query
$mobil = query("SELECT * FROM list_mobil");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>test</title>
</head>

<body>
    <div class="container">
    <?php foreach ($mobil as $mbl) : ?>
        <p class="Series/Models">
            <a href="php/detail.php?id=<?= $mbl['id'] ?>">
            <?= $mbl["Series/Models"] ?>
            </a>
        </p>
    <?php endforeach ; ?>
    </div>


</body>

</html>