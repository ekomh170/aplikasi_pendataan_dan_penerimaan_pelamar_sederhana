<?php 

$id   = $d['id_pelamar'];
$sql = mysqli_query($koneksi, "SELECT * FROM tb_pelamar WHERE id_pelamar=$id") or die(mysqli_error($koneksi));
$row  = mysqli_fetch_assoc($sql);

$id_pelamar = $row['id_pelamar'];

$ttpno = mysqli_query($koneksi, "SELECT * FROM tb_tolak_pelamar where id_pelamar='$id'");
$ds = mysqli_fetch_array($ttpno);

$ttp = mysqli_query($koneksi, "SELECT * FROM tb_terima_pelamar where id_pelamar='$id'");
$ds2 = mysqli_fetch_array($ttp);
?>