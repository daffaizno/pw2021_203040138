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
        <table cellpadding="10" cellspacing="0" border="1">
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Merk</th>
                <th>Series / Model</th>
                <th>Class</th>
                <th>Production Date</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach ($mobil as $mbl) :?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><img src="assets/img/<?= $mbl["gambar"]; ?>"</td>
                        <td><?= $mbl["Manufacturer"] ?></td>
                        <td><?= $mbl["Series/Models"] ?></td>
                        <td><?= $mbl["Class"] ?></td>
                        <td><?= $mbl["Production Date"] ?></td>
                    </tr>
            <?php $i++ ?>
            <?php endforeach; ?>    
        </table>
    </div>


</body>

</html>