<?php include '../config/block_akses.php' ?>
<!DOCTYPE html>
<html>
<head>
    <title>APPS DATA PELAMAR</title>
    <link rel="stylesheet" href="../assets/cssku/style.css">
</head>
<body>
    <div class="container"> 
        <form class="box" method="post" action="proses/auth.php">
            <h1>Argha Karya Prima Industry</h1>
            <img src="../assets/foto/logo.jpg">
            <h3>Login</h3>
            <input type="email" name="eml" placeholder="Masukan Email" required>
            <input type="password" name="pw" placeholder="Masukan Password" required>
            <input type="submit" name="" value="Login">
            <hr>
            <a href="register.php">Daftar</a>
            <a href="../index.php">Halaman Utama</a>
        </form>
    </div>
</body>
</html>