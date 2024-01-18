<?php 
    session_start();
    if(isset($_POST["logout"])){
        session_unset();
        session_destroy();
        header('location: index.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   

    
    <nav>
        <h1>Nadhim Alim</h1>
        <div>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Kontak</a>
        </div>
    </nav>
    <h3>Selamat Datang <?= $_SESSION["username"]?> </h3>
    <form action="dashbord.php" method="post">
        <button type="submit" name="logout">Logout</button>
    </form>

    
</body>
</html>