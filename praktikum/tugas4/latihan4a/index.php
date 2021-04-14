<?php
/* 
Daffaiz Naufal
203040138
Shift Jumat 13.00
*/
?>

<?php
//connect database 
$conn = mysqli_connect("localhost", "root","");
//memilih database
mysqli_select_db($conn, "pw_tubes_203040138");
//query dari database
$result = mysqli_query($conn, "SELECT * FROM list_mobil");

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
            <?php while($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><img src="assets/img/<?= $row["gambar"]; ?>"</td>
                        <td><?= $row["Manufacturer"] ?></td>
                        <td><?= $row["Series/Models"] ?></td>
                        <td><?= $row["Class"] ?></td>
                        <td><?= $row["Production Date"] ?></td>
                    </tr>
            <?php $i++ ?>
            <?php endwhile; ?>    
        </table>
    </div>


</body>

</html>