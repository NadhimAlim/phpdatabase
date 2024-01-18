<?php
    include "service/database.php";
    session_start();

    $register_messange = "";

    if(isset($_SESSION["is_login"])){
        header("location: dashbord.php");
    }

    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        try {
            $sql = "INSERT INTO users (username, password) VALUES ('$username' , '$password')";

            if($db->query($sql)){
                $register_messange = "Daftar Akun Berhasil, Silahkan Login";
            }else {
                $register_messange = "Daftar Akun Tidak Berhasil,Silahkan Daftar Kembali";
            }
        } catch(mysqli_sql_exception) {
            $register_messange = "Username Sudah Digunakan Silahkan Daftar Lagi";
        }

        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "layout/header.php"?>
    <h3>Daftar Akun</h3>
    <i><?= $register_messange ?></i>
    <form action="register.php" method="post">
        <input type="text" placeholder="Masukkan Username" name="username">
        <input type="password" placeholder="Masukkan Password" name="password">
        <button type="submit" name="register">Daftar Sekarang</button>
    </form>

    <?php include "layout/footer.php" ?>
</body>
</html>