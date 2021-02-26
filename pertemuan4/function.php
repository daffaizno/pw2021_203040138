<?php
/*  
    Daffaiz Naufal  
    203040138   
    https://github.com/daffaizno/pw2021_203040138
    Pertemuan 4 - 26 Februari 2021
    Minggu ke-4 belajar mengenai function dalam php
*/
?>
<?php
    function salam($waktu, $nama) {
        return "Selamat  $waktu, $nama!";
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>
    <h1><?php echo salam("Siang", "Daffaiz"); ?></h1>
</body>
</html>