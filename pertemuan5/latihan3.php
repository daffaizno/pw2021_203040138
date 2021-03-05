<?php
/*  
    Daffaiz Naufal  
    203040138   
    https://github.com/daffaizno/pw2021_203040138
    Pertemuan 5 - 5 Maret 2021
    Minggu ke-5 belajar mengenai array php
*/
?>
<?php 

$mahasiswa = [
    ["John", "123456", "Teknik Informatika", "johntest@gmail.com"],
    ["Denny", "654321", "Teknik Informatika", "dennytest@gmail.com"]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Daftar Mahasiswa</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<?php foreach ($mahasiswa as $mhs) :?>
<ul>
    <li><?= $mhs[0]; ?></li>
    <li><?= $mhs[1]; ?></li>
    <li><?= $mhs[2]; ?></li>
    <li><?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>
</body>
</html>