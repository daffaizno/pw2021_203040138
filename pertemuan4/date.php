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
    // date -> untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-y");  

    // Time 
    // UNIX Timestamp / EPOCH time -> detik yang sudah berlalu Sejak 1 Januari 1970
    // echo time();
    // echo date("d M y", time()+60*60*24*100);

    // mktime
    // membuat sediri detik 
    // mktime(0,0,0,0,0,0);
    // jam, menit, detik, bulan, tanggal, tahun
    // echo mktime(0,0,0,11,11,1111);
    // echo date("l",mktime(0,0,0,11,11,1111));

    // strtotime
    // echo date("l", strtotime("1 January 1970"));
    // echo strtotime("1 January 1970");
    ?>