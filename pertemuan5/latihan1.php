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
// array 
// variabel yang dapat memiliki banyak nilai
// Elemen array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0(nol)

// membuat array :

// cara lama
$hari = array("Senin", "Selasa", "Rabu");

// cara baru 
$bulan = ["Januari", "Februari", "Maret"];
//bisa juga memiliki tipe data yang berbeda
$arr1 = [123, "Tulisan", false];


// menampilkan array :

// var_dump() atau print_r()
// var_dump($hari);
// echo"<br>";
// print_r($bulan);
// echo"<br>";

// menampilkan 1 elemen pada array 
// echo $hari[0];
// echo"<br>";
// echo $bulan[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo"<br>";
var_dump($hari);

?>