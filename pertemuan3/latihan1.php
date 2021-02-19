<!--
    Daffaiz Naufal  
    203040138   
    https://github.com/daffaizno/pw2021_203040138
    Pertemuan 3 - 19 Februari 2021
    Minggu ke-3 belajar mengenai Struktur Kendali (Pengulangan & Pengkondisian)
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0">
    <!-- <?php 
        for($i = 1; $i <= 3; $i++) {
            echo "<tr>";
            for( $j = 1; $j <= 5; $j++ ) {
                echo "<td> $i,$j </td>";
            }
            echo "</tr>";
        }
    ?> -->

    <!-- atau --> 

    <!-- <?php for( $i = 1; $i <= 3; $i++ ) : ?>
        <tr>
            <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                <td><?php echo "$i,$j"; ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?> -->

    <!-- Membuat warna berbeda pada baris genap dan ganjil menggunakan pengkondisian -->

    <?php for( $i = 1; $i <= 5; $i++ ) : ?>
        <?php if( $i % 2 == 1 ) : ?>
            <tr class="warna-baris">
        <?php else: ?>
            <tr>
        <?php endif; ?>
            <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                <td><?php echo "$i,$j"; ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>

</table>

</body>
</html>