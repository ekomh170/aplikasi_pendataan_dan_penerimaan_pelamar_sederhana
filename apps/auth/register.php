<?php include '../config/block_akses.php' ?>
<!DOCTYPE html>
<html>
<head>
    <title>APPS DATA PELAMAR</title>
    <link rel="stylesheet" href="../assets/cssku/style.css">
</head>
<body>
    <div class="container"> 
        <form class="box" method="post" action="proses/auth_regis.php">
            <br><br><br><br><br><br>
            <h1>Argha Karya Prima Industry</h1>
            <img src="../assets/foto/logo.jpg">
            <h3>Buat Akun Baru</h3>
            <input type="email" name="eml" placeholder="Masukan Email" required>
            <input type="password" name="pw" placeholder="Masukan Password" required>
            <select name="rl" id="rl" required>
                <option value="HRD">HRD</option>
                <option value="Kepala HRD">Kepala HRD</option>
            </select>
            <input type="submit" name="submit" value="Daftar">
            <hr>
            <a href="login.php">Login</a>
            <a href="../index.php">Halaman Utama</a>
        </form>
    </div>
</body>
</html>