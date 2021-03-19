<?php
/*  
    Daffaiz Naufal  
    203040138   
    https://github.com/daffaizno/pw2021_203040138
    Pertemuan 7 - 19 Maret 2021
    Minggu ke-7 belajar Get & Post
*/
?>

<?php 
// cek apakah tombol submit sudah ditekan apa belum
    if (isset ($_POST["submit"]) ) {
    // cek username & password
    if( $_POST["username"] == "admin" && $_POST["password"] == "123") {

    // jika benar, redirect ke halaman admin 
        header("Location: admin.php");
        exit;
    }else{
    // jika slah tampilkan pesan kesalan 
    $error = "true";
    }
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login admin</title>
</head>
<body>
    <h1>login Admin</h1>

<?php if(isset($error)) :?>
<p>username atau password salah</p>
<?php endif ;?>

<ul>
    <form action="" method="post">
        <li>
        <label for="username">Username :</label>
        <input type="text" name="username" id="username">
        </li>
        <li> 
        <label for="password">password :</label>
        <input type="password" name="password" id="password">
        </li>
        <li>
        <button type="submit" name="submit">Login</button>
        </li>

    </form>
</ul>

</body>
</html>